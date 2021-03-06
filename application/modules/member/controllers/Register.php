<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MX_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	$this->form_validation->CI =& $this;
	  	$this->load->library('form_validation');
	  	$this->load->model('register_member_model');
	  	if($this->helper_model->validate_user_session()){
			redirect(getHomeUrl());
		}
	}

	public function index() {
		self::register();
	}

	public function register() {
		$this->form_validation->set_rules('f_name','First Name','required|xss_clean');
		$this->form_validation->set_rules('l_name','Last Name','required|xss_clean');
		$this->form_validation->set_rules('gender','Gender','required|xss_clean');
		$this->form_validation->set_rules('email', "Email",'required|xss_clean|trim|valid_email|is_unique[tbl_users.email]');
		$this->form_validation->set_message('is_unique', 'This %s has already been registered.');
		$this->form_validation->set_rules('password','Password','required|xss_clean|min_length[6]|max_length[50]');
		$this->form_validation->set_rules('c_password','Confirm Password','required|xss_clean|matches[password]');
		$this->form_validation->set_rules('mobile','Mobile','required|xss_clean');
		$this->form_validation->set_rules('phone','Phone','xss_clean');
		$this->form_validation->set_rules('address','Address','xss_clean');
		$this->form_validation->set_rules('city','City','xss_clean');

		if($this->form_validation->run()==TRUE) {
			$activation_code = genRandomString(32);
            $inserted_id = $this->register_member_model->register($activation_code);
   			if($activation_code!='system_error') {
			    if($this->register_member_model->reg_confirmation_email($activation_code)) {
				    $this->session->set_userdata( 'user_flash_msg_type', "success" );
		        	$this->session->set_flashdata('user_flash_msg', "You've successfully created your Account. A verification link has been sent to your email. Please check your inbox");
		        	redirect(getHomeUrl());
		        } else {
		        	$this->register_member_model->hard_delete_user($inserted_id);
					$this->session->set_userdata( 'user_flash_msg_type', "danger" );
		        	$this->session->set_flashdata('user_flash_msg', "Sorry, we cannot complete your registration at the moment. Please try again later.");
		        }
			}
		}
		$data['title'] = 'Register';
		$data['module'] = 'member';
		$data['view_file'] = 'register_form';
		$data['scripts'] = array();
		$data['stylesheets'] = array(
			base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
			base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
			);
		echo Modules::run('Template/render_html', $data);
	}

	function activation_process($key='', $hash_email='') {
		$email = $this->register_member_model->activated($key, $hash_email);
        if($email) {
        	$this->session->set_userdata( 'user_flash_msg_type', "success" );
	        $this->session->set_flashdata('user_flash_msg', "Congratulations, you've successfully activated your account.");
	        $this->helper_model->set_user_login_session($email);
			redirect(getHomeUrl());					
		} else {
			echo "Invalid Credentials"; exit;
		}
 	}
}
