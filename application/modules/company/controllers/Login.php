<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	$this->form_validation->CI =& $this;
	  	$this->load->library('form_validation');
	  	$this->load->model('company_login_model');
	}

	public function index() {
		if($this->helper_model->validate_company_session()){
			redirect(getHomeUrl());
		}
		$this->form_validation->set_rules('email', "Email",'xss_clean|valid_email|callback_validate_credentials|callback_check_user_status');
		$this->form_validation->set_rules('password', "Password",'required|xss_clean');
		if($this->form_validation->run()) {
			$this->helper_model->set_company_login_session($this->input->post('email'));

			if($this->input->post('remember_me') !== null) {

				$cookie = array(
					'name'   => 'company_email',
					'value'  => $this->input->post('email'),
					'expire' => time()+30 * 24 * 60 * 60
					);
				$this->input->set_cookie($cookie);

				$cookie = array(
					'name'   => 'company_pw',
					'value'  => $this->input->post('password'),
					'expire' => time()+30 * 24 * 60 * 60
					);
				$this->input->set_cookie($cookie);

			}else{
				delete_cookie('company_email');
				delete_cookie('company_pw');
			}

				redirect(getHomeUrl());
		}
		$data['title'] = 'Login';
		$data['module'] = 'company';
		$data['view_file'] = 'login_form';
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
	}

	public function validate_credentials(){
		if($this->company_login_model->can_log_in()){
			return true;
		} else {
			$this->form_validation->set_message('validate_credentials','Incorrect Email/Password');
			return false;
		}
	}

	public function check_user_status(){
		$company_details = $this->company_login_model->get_company_details($this->input->post('email'));
		if($company_details['verification_status']==0){
			$this->form_validation->set_message('check_user_status', 'Your account is not verified. Please check your email inbox and click on the verification link there to verify your account.');
			return false;
		} elseif($company_details['account_status']==3) {
			$this->form_validation->set_message('check_user_status', "Your account has been blocked. Please contact Admin from the <a href='" . base_url() . "contact_us'> Contact Us</a> page to access your account.");
			return false;
		} else {
			return true;
		}
	}

	public function logout() {
		$data = array('company_email', 'company_pw', 'is_Login', 'user_id');
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
			redirect(getHomeUrl());
		
	}

}
