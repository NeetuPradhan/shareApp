<?php

class Company_login_model extends CI_Model {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('backend/settings_model');
        $this->load->helper('email_helper');
    }

    public function can_log_in() {
		$this->db->where('email', $this->input->post('email'));
		$query = $this->db->get('tbl_company');

		if($query->num_rows() == 1){
			$row = $query->row_array(); 
			$pass = $this->helper_model->decrypt_me($row['password']);
			if($this->input->post('password') == $pass){
			  	return true;
			} else {
			  	return false;
			}
		} else {
			return false;
		}
	}

    public function get_company_details($email) {
    	return $this->db->get_where('tbl_company', array('email' => $email))->row_array();
	}
}

?>