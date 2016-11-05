<?php

class Error_log extends MX_Controller {

    function __construct()
    {
        parent::__construct();
        $this->form_validation->CI =& $this;
        if(!$this->helper_model->validate_admin_session()){
          redirect(base_url() . 'admin');
        }
    }


   	function index () {
   		$data['title'] = 'Error Log';
      $data['subtitle'] = 'View your recent error log here.';
   		$data['main'] = 'backend/log';
   		$this->load->view('backend/admin', $data);
   	}


}