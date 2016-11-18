<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	$this->form_validation->CI =& $this;
	  	$this->load->library('form_validation');
	  	$this->load->model('member_login_model');
	}

	public function index() {
		if($this->helper_model->validate_user_session()){
			redirect(getHomeUrl());
		}
		$this->form_validation->set_rules('email', "Email",'xss_clean|valid_email|callback__validate_credentials|callback__check_user_status');
		$this->form_validation->set_rules('password', "Password",'required|xss_clean');
		if($this->form_validation->run()) {
			$this->helper_model->set_user_login_session($this->input->post('email'));

			if($this->input->post('remember_me') !== null) {

				$cookie = array(
					'name'   => 'user_email',
					'value'  => $this->input->post('email'),
					'expire' => time()+30 * 24 * 60 * 60
					);
				$this->input->set_cookie($cookie);

				$cookie = array(
					'name'   => 'user_pw',
					'value'  => $this->input->post('password'),
					'expire' => time()+30 * 24 * 60 * 60
					);
				$this->input->set_cookie($cookie);

			}else{
				delete_cookie('user_email');
				delete_cookie('user_pw');
			}

			redirect(getHomeUrl());
		}
		$data['title'] = 'Login';
		$data['module'] = 'member';
		$data['view_file'] = 'login_form';
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
	}

	public function _validate_credentials(){
		if($this->member_login_model->can_log_in()){
			return true;
		} else {
			$this->form_validation->set_message('_validate_credentials','Incorrect Email/Password');
			return false;
		}
	}

	public function _check_user_status(){
		$user_details = $this->member_login_model->get_user_details($this->input->post('email'));
		if($user_details['verification_status']==0){
			$this->form_validation->set_message('_check_user_status', 'Your account is not verified. Please check your email inbox and click on the verification link there to verify your account.');
			return false;
		} elseif($user_details['account_status']==3) {
			$this->form_validation->set_message('_check_user_status', "Your account has been blocked. Please contact Admin from the <a href='" . base_url() . "contact_us'> Contact Us</a> page to access your account.");
			return false;
		} else {
			return true;
		}
	}

	public function logout() {
		$data = array('user_email', 'user_pw', 'is_Login', 'user_id');
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
			redirect(getHomeUrl());
		
	}


	public function forgot_password(){
		if($this->helper_model->validate_user_session()){
			redirect(base_url());
		} else {
			$this->form_validation->set_rules('email', "Email",'required|trim|xss_clean|valid_email|callback__email_exists');
			if($this->form_validation->run()){
				$this->member_login_model->pass_reset_email();
				$this->session->set_userdata( 'user_flash_msg_type', "success" );
	        	$this->session->set_flashdata('user_flash_msg', "A message has been sent to your email with password reset link. Please check your inbox.");
				redirect(getHomeUrl());
			} 
			$data['title'] = 'Reset Password';
			$data['module'] = 'member';
			$data['view_file'] = 'forgot_password';
			$data['scripts'] = array();
			$data['stylesheets'] = array(
				base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
				base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
				);
			echo Modules::run('Template/render_html', $data);
		}
	}


	public function _email_exists() {
		if(!$this->member_login_model->check_email($this->input->post('email'))) {
			$this->form_validation->set_message('_email_exists', "Email Does not exist in our system. Please <a href='" . getMemberUrl() . "register'>Register </a>First.");
			return false;
		} else {
			return true;
		}	
	}

}
