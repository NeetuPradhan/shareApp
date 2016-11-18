<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends MX_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	$this->form_validation->CI =& $this;
	  	$this->load->library('form_validation');
	  	$this->load->model('member_model');
	  	if($this->uri->segment('2') === 'validate_pw_reset_credentials') {
	  		$this->validate_pw_reset_credentials($this->uri->segment('3'), $this->uri->segment('4'));
	  	}
	  	if(!$this->helper_model->validate_user_session()){
			redirect(getHomeUrl());
		}
	}

	public function index() {
		self::update_info();
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

 		$data["info"] = $this->member_model->get_user_detail($user_id);

		if($this->form_validation->run()){
			if($this->member_model->update_user($user_id)){
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
		$this->form_validation->set_rules('cur_password', 'Current Password', 'required|xss_clean|callback__verify_current_pass');
        $this->form_validation->set_rules('new_password', 'Password', 'required|xss_clean|min_length[6]|max_length[64]');
        $this->form_validation->set_rules('c_password', 'Confirm Password', 'required|xss_clean|matches[new_password]');

        if ($this->form_validation->run()) {
            $password = $this->helper_model->encrypt_me($this->input->post('new_password'));
            if($this->member_model->update_password($password)) {
                $this->session->set_userdata( 'user_flash_msg_type', "success" );
                $this->session->set_flashdata('user_flash_msg', 'Password Changed Successfully');
                redirect(getMemberUrl().'login');
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

	public function _verify_current_pass() {
        if($this->member_model->verify_current_pw()) {
            return true;
        } else {
            $this->form_validation->set_message('_verify_current_pass','Current Password Incorrect');
            return false;
        }
    }


	public function validate_pw_reset_credentials($key='', $hash_email='') {
		$this->form_validation->set_rules('new_password','New Password','required|xss_clean|min_length[6]|max_length[50]');
		$this->form_validation->set_rules('c_password','Confirm Password','required|xss_clean|matches[new_password]');
		$email = $this->member_model->is_key_valid($key, $hash_email);
		if(!$email) {
			redirect(getHomeUrl());
		}
		if($this->form_validation->run()) {
			// $this->session->unset_userdata('user_key');
			if($email) {
				$this->member_model->update_verification_status($email);
				$this->session->set_userdata('user_email', $email);
				$this->member_model->reset_password($email);
				if($this->member_model->reset_password($email)) {
					$this->helper_model->set_user_login_session($email);
				}
				$this->session->set_userdata( 'user_flash_msg_type', "success" );
		        $this->session->set_flashdata('user_flash_msg', "Your Password has been successfully reset.");
			}
			redirect(getMemberUrl().'portfolio');
		}
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
