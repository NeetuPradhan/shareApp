<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends MX_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	$this->form_validation->CI =& $this;
	  	$this->load->library('form_validation');
	  	$this->load->model('company_model');
	  	$this->load->model('register_company_model');
	}

	public function index() {
		self::update_info();
	}

 	public function update_info() {
 		$company_id = $this->session->userdata('company_id');
 		$this->form_validation->set_rules('code','Code','required|xss_clean');
		$this->form_validation->set_rules('name','Company Name','required|xss_clean');
		$this->form_validation->set_rules('phone','Phone','xss_clean|required');
		$this->form_validation->set_rules('fax','Fax','xss_clean');
		$this->form_validation->set_rules('address','Address','xss_clean');
		$this->form_validation->set_rules('company_type','Company Type','xss_clean|required');

 		$data["info"] = $this->company_model->get_company_detail($company_id);
 		$data["company_type"]= $this->register_company_model->get_company_type();

		if($this->form_validation->run()){
			if($this->company_model->update_company($company_id)){
	            $this->session->set_userdata( 'user_flash_msg_type', "success" );
	            $this->session->set_flashdata('user_flash_msg', 'Account Updated Successfully');
	            redirect(getHomeUrl());
			} else {
				$this->session->set_userdata( 'user_flash_msg_type', "danger" );
	            $this->session->set_flashdata('user_flash_msg', 'Sorry, Unable to update.');
			}
		}
 		$data['title'] = 'Edit Account';
		$data['module'] = 'company';
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
		$data['module'] = 'company';
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
		if($this->helper_model->validate_company_session()){
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
			$data['module'] = 'company';
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
			$this->form_validation->set_message('email_exists', "Email Does not exist in our system. Please <a href='" . getCompanyUrl() . "register'>Register </a>First.");
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
			$this->company_model->reset_password($this->session->userdata('company_email'));
			$this->helper_model->set_company_login_session($this->session->userdata('company_email'));
			$this->session->set_userdata( 'user_flash_msg_type', "success" );
	        $this->session->set_flashdata('user_flash_msg', "Your Password has been successfully reset.");
			redirect(getHomeUrl());
		}
		$email = $this->company_model->is_key_valid($key, $hash_email);
		if($email){
			$this->company_model->update_verification_status($email);
			$this->session->set_userdata('company_email', $email);

			$data["email"] = $email;
			$data["key"] = $key;
			$data["hash_email"] = $hash_email;
			$data['title'] = 'Reset Password';
			$data['module'] = 'company';
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