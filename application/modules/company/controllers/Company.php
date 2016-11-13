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
		$email = $this->company_model->is_key_valid($key, $hash_email);
		if($this->form_validation->run()) {
			// $this->session->unset_userdata('user_key');
			if($email) {
				$this->company_model->update_verification_status($email);
				$this->company_model->reset_password($email);
				$this->helper_model->set_company_login_session($email);
				$this->session->set_userdata( 'user_flash_msg_type', "success" );
	        	$this->session->set_flashdata('user_flash_msg', "Your Password has been successfully reset.");
				$this->session->set_userdata('company_email', $email);
			}
			redirect(getHomeUrl());
		}

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

	/* announcement start */

	public function announcement() {
		$query = $this->db->get('tbl_announcement');
		$config['total_rows'] = $query->num_rows();
        $config['per_page'] = '300';
        $offset = $this->uri->segment(4, 0);
        $config['uri_segment'] = '4';
        $this->pagination->initialize($config);

        $data['announcement'] = $this->company_model->announcement_list($config['per_page'], $offset);
        $data['links'] = $this->pagination->create_links();
		$data['title'] = 'Announcement List';
		$data['module'] = 'company';
		$data['view_file'] = 'announcement/list';
		$data['scripts'] = array(
							base_url().'assets/admin/template/plugins/datatables/jquery.dataTables.min.js',
							base_url().'assets/admin/template/plugins/datatables/dataTables.bootstrap.min.js',
							base_url().'assets/common/js/alertify.js',
						);
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
							base_url().'assets/admin/template/plugins/datatables/dataTables.bootstrap.css',
							base_url().'assets/common/css/alertifyjs/css/alertify.css',
							base_url().'assets/common/css/alertifyjs/css/themes/default.css',
						);
		echo Modules::run('Template/render_html', $data);
	}

	public function announcement_add() {
		$this->form_validation->set_rules('title', 'Title', 'required|xss_clean');
		$this->form_validation->set_rules('detail', 'Detail', 'required|xss_clean');
		editor();

		if($this->form_validation->run()) {
			if($this->company_model->insert_announcement()){
	            $this->session->set_userdata( 'user_flash_msg_type', "success" );
	            $this->session->set_flashdata('user_flash_msg', 'Announcemnet added Successfully');
	            redirect(getCompanyUrl().'announcement');
			} else {
				$this->session->set_userdata( 'user_flash_msg_type', "danger" );
	            $this->session->set_flashdata('user_flash_msg', 'Sorry, Unable to add.');
			}
		}
		$data['title'] = 'Add Announcement';
		$data['module'] = 'company';
		$data['view_file'] = 'announcement/add';
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
	}

	public function announcement_edit($id) {
		$this->form_validation->set_rules('title', 'Title', 'required|xss_clean');
		$this->form_validation->set_rules('detail', 'Detail', 'required|xss_clean');
		editor();

		if($this->form_validation->run()){
			$this->company_model->update_announcement($id);
            $this->session->set_userdata( 'user_flash_msg_type', "success" );
            $this->session->set_flashdata('user_flash_msg', 'Announcement Updated Successfully');
            redirect(getCompanyUrl().'announcement');
		}

		$data['info'] = $this->company_model->get_announcement($id);
		$data['title'] = 'Edit Announcement';
		$data['module'] = 'company';
		$data['view_file'] = 'announcement/edit';
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
	}

	public function announcement_delete($id) {
        if($this->company_model->delete_announcement($id)) {
            echo json_encode(array(
                    'status' => TRUE,
                    'message' => 'Announcement deleted successfully'
            ));
        } else {
            echo json_encode(array(
                    'status' => FALSE,
                    'message' => 'Delete Failed'
            ));
        }
    }

    public function change_status($id) {
        if($this->company_model->change_status($id)) {
            echo json_encode(array(
                    'status' => TRUE,
                    'message' => 'Status changed successfully'
            ));
        } else {
            echo json_encode(array(
                    'status' => FALSE,
                    'message' => 'Status change Failed'
            ));
        }
    }

	/* announcement end */

}