<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	if(!$this->helper_model->validate_admin_session()){
          redirect(base_url() . 'admin');
        }
	  	$this->load->library('form_validation');
	}


	public function index(){
		$this->dashboard();
	}


	public function dashboard() {
		if($this->session->userdata('is_logged_in')){
			$data['main'] = 'backend/dashboard';
			$this->load->view('backend/admin', $data);
		} else {
			redirect('login');
		}
		
	}
}
