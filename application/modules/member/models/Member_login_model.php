<?php

class Member_login_model extends CI_Model {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('backend/settings_model');
        $this->load->helper('email_helper');
    }

    public function can_log_in() {
		$this->db->where('email', $this->input->post('email'));
		$query = $this->db->get('tbl_users');

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

    public function get_user_details($email) {
    	return $this->db->get_where('tbl_users', array('email' => $email))->row_array();
	}


	public function pass_reset_email(){
        $mail_setting = $this->settings_model->get_email_settings();
        $user_details = $this->get_user_detail_by_email($this->input->post('email'));
        $message = $this->settings_model->get_email_template('FORGOT_PWD');
        $subject = $message['subject'];
        $emailbody = $message['content'];

        $key = genRandomString('32');
        $email = sha1(md5($this->input->post('email')));
            
        $confirm = "<a target='_blank' href='".getMemberUrl()."validate_pw_reset_credentials/$key/$email'>here</a>";        
        $parseElement = array(
            "USERNAME" => $user_details['f_name']." ".$user_details['l_name'],
            "SITENAME" => $this->config->item('site_name'),
            "LINK" => $confirm,
            "SITELINK" => base_url()
        );
        $subject = parse_email($parseElement, $subject);
        $message = parse_email($parseElement, $emailbody);
        $data = array(
                    'subject' => $subject,
                    'message' => $message,
                    'to' => $this->input->post('email')
                    );
        $this->update_activation_reset_key($key);
        send_email($mail_setting,$data);
    }


    public function check_email($email){
        $this->db->where(array('email' => $email));
        // $query = $this->db->get('tbl_users');
        // $this->db->count_all_results('tbl_users');
        // echo $this->db->last_query(); exit;
        if ($this->db->count_all_results('tbl_users') > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


    public function get_user_detail_by_email($email) {
        return $this->db->get_where('tbl_users', array('email' => $email))->row_array();
    }

    public function update_activation_reset_key($key){
        $data = array('activation_reset_key' => $key );
        $this->db->where("email", $this->input->post("email"));
        $this->db->update("tbl_users", $data);
    }
}

?>