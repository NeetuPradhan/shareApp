<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends MX_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	$this->form_validation->CI =& $this;
	  	$this->load->library('form_validation');
	  	$this->load->model('company_model');
	}

	public function index() {
		self::register();
	}

	public function register() {
		$this->form_validation->set_rules('code','Code','required|xss_clean');
		$this->form_validation->set_rules('name','Company Name','required|xss_clean');
		$this->form_validation->set_rules('email','email','is_unique[tbl_company.email]');
		// $this->form_validation->set_rules('email', "Email",'required|xss_clean|trim|valid_email|is_unique[tbl_company.email]');
		$this->form_validation->set_rules('email', "Email",'required|xss_clean|trim|valid_email');
		$this->form_validation->set_message('is_unique', 'This %s has already been registered.');
		$this->form_validation->set_rules('password','Password','required|xss_clean|min_length[6]|max_length[50]');
		$this->form_validation->set_rules('c_password','Confirm Password','required|xss_clean|matches[password]');
		$this->form_validation->set_rules('phone','Phone','xss_clean|required');
		$this->form_validation->set_rules('fax','Fax','xss_clean');
		$this->form_validation->set_rules('address','Address','xss_clean');
		$this->form_validation->set_rules('company_type','Company Type','xss_clean|required');

		if($this->form_validation->run()==TRUE) {
			$activation_code = genRandomString(32);
            $inserted_id = $this->company_model->register($activation_code);
   			if($activation_code!='system_error') {
			    if($this->company_model->reg_confirmation_email($activation_code)) {
				    $this->session->set_userdata( 'user_flash_msg_type', "success" );
		        	$this->session->set_flashdata('user_flash_msg', "You've successfully created your Account. A verification link has been sent to your email. Please check your inbox");
		        	redirect(getAuthUrl());
		        } else {
		        	$this->company_model->hard_delete_company($inserted_id);
					$this->session->set_userdata( 'user_flash_msg_type', "danger" );
		        	$this->session->set_flashdata('user_flash_msg', "Sorry, we cannot complete your registration at the moment. Please try again later.");
		        }
			}
		}

		$data['title'] = 'Register';
		$data['module'] = 'company';
		$data['company_type'] = $this->company_model->get_company_type();
		$data['view_file'] = 'register_form';
		$data['scripts'] = array();
		$data['stylesheets'] = array(
			base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
			base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
			);
		echo Modules::run('Template/render_html', $data);
	}

	function activation_process($key='', $hash_email='') {
		$email = $this->company_model->activated($key, $hash_email);
        if($email) {
        	$this->session->set_userdata( 'user_flash_msg_type', "success" );
	        $this->session->set_flashdata('user_flash_msg', "Congratulations, you've successfully activated your account.");
	        $this->helper_model->set_company_login_session($email);
			redirect(base_url());					
		} else {
			echo "Invalid Credentials"; exit;
		}
 	}

 	public function update_info() {
 		$user_id = $this->session->userdata('user_id');
 		$this->form_validation->set_rules('f_name','First Name','required|xss_clean');
		$this->form_validation->set_rules('l_name','Last Name','required|xss_clean');
		$this->form_validation->set_rules('gender','Gender','required|xss_clean');
		$this->form_validation->set_rules('mobile','Mobile','required|xss_clean');
		$this->form_validation->set_rules('phone','Phone','xss_clean');
		$this->form_validation->set_rules('address','Address','xss_clean');
		$this->form_validation->set_rules('city','City','xss_clean');

 		$data["info"] = $this->company_model->get_user_detail($user_id);

		if($this->form_validation->run()){
			if($this->company_model->update_user($user_id)){
	            $this->session->set_userdata( 'user_flash_msg_type', "success" );
	            $this->session->set_flashdata('user_flash_msg', 'Account Updated Successfully');
	            redirect(getHomeUrl(), 'refresh');
			} else {
				$this->session->set_userdata( 'user_flash_msg_type', "danger" );
	            $this->session->set_flashdata('user_flash_msg', 'Sorry, Unable to update.');
			}
		}
 		$data['title'] = 'Edit Account';
		$data['module'] = 'member';
		$data['view_file'] = 'edit_info';
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
 	}

 	public function change_password() {
		$this->form_validation->set_rules('cur_password', 'Current Password', 'required|xss_clean|callback_verify_current_pass');
        $this->form_validation->set_rules('new_password', 'Password', 'required|xss_clean|min_length[6]|max_length[64]');
        $this->form_validation->set_rules('c_password', 'Confirm Password', 'required|xss_clean|matches[new_password]');

        if ($this->form_validation->run()) {
            $password = $this->helper_model->encrypt_me($this->input->post('new_password'));
            if($this->company_model->update_password($password)) {
                $this->session->set_userdata( 'user_flash_msg_type', "success" );
                $this->session->set_flashdata('user_flash_msg', 'Password Changed Successfully');
                redirect(getHomeUrl());
            } else {
                $this->session->set_userdata( 'user_flash_msg_type', "danger" );
                $this->session->set_flashdata('user_flash_msg', 'Sorry, Unable to Change the Password');
            }
        }

        $data['title'] = 'Change Password';
		$data['module'] = 'member';
		$data['view_file'] = 'change_password';
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
	}

	public function verify_current_pass() {
        if($this->company_model->verify_current_pw()) {
            return true;
        } else {
            $this->form_validation->set_message('verify_current_pass','Current Password Incorrect');
            return false;
        }
    }

    public function forgot_pass(){
		if($this->helper_model->validate_user_session()){
			redirect(base_url());
		} else {
			$this->form_validation->set_rules('email', "Email",'required|trim|xss_clean|valid_email|callback_email_exists');
			if($this->form_validation->run()){
				$this->company_model->pass_reset_email();
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

	public function email_exists() {
		if($this->company_model->check_email($this->input->post('email'))==FALSE) {
			$this->form_validation->set_message('email_exists', "Email Does not exist in our system. Please <a href='" . getMemberUrl() . "register'>Register </a>First.");
			return false;
		} else {
			return true;
		}	
	}

	public function validate_pw_reset_credentials($key='', $hash_email='') {
		$this->form_validation->set_rules('new_password','New Password','required|xss_clean|min_length[6]|max_length[50]');
		$this->form_validation->set_rules('c_password','Confirm Password','required|xss_clean|matches[new_password]');
		if($this->form_validation->run()) {
			$this->session->unset_userdata('user_key');
			$this->company_model->reset_password($this->session->userdata('user_email'));
			$this->helper_model->set_company_login_session($this->session->userdata('company_email'));
			$this->session->set_userdata( 'user_flash_msg_type', "success" );
	        $this->session->set_flashdata('user_flash_msg', "Your Password has been successfully reset.");
			redirect(getHomeUrl());
		}
		$email = $this->company_model->is_key_valid($key, $hash_email);
		if($email){
			$this->company_model->update_verification_status($email);
			$this->session->set_userdata('user_email', $email);

			$data["email"] = $email;
			$data["key"] = $key;
			$data["hash_email"] = $hash_email;
			$data['title'] = 'Reset Password';
			$data['module'] = 'member';
			$data['view_file'] = 'reset_password';
			$data['scripts'] = array();
			$data['stylesheets'] = array(
				base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
				base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
				);
			echo Modules::run('Template/render_html', $data);
		}
	}

}
// 