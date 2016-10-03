<?php

class Helper_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->library('encryption');
        $this->encryption->initialize(
            array(
                    'cipher' => 'aes-256',
                    'driver' => 'openssl',
                    'mode' => 'ctr'
                )
            );
    }

    public function encrypt_me($data) {
        return $this->encryption->encrypt($data);
    }


    public function decrypt_me($data) {
        return $this->encryption->decrypt($data);
    }

    function get_time_zone_setting() {
        $sql = "SELECT delay,sign FROM tbl_timezone WHERE status='1'";
        $query = $this->db->query($sql);
        $record = $query->row_array();
        $data = $record['delay'] . ":" . $record['sign'];
        $split = explode(":", $data);
        return $split;
    }

    public function set_admin_login_session($email){
        $admin_details = $this->db->get_where('tbl_admin', array('email' => $email))->row_array();
        $data = array(
                    'admin_email' => $email,
                    'admin_pw' => $admin_details['password'],
                    'name' => $admin_details['admin_details'],
                    'is_logged_in' => 1,
                    'admin_id' => $admin_details["id"],
                );
        $this->session->set_userdata($data);
    }

    public function validate_admin_session(){
        if($this->session->userdata('admin_email') && $this->session->userdata('admin_pw')) {
            $options = array(
                            'email' => $this->session->userdata('admin_email'),
                            );
            $this->db->where($options);
            $this->db->select("password");
            $db_pw = $this->db->get('tbl_admin')->row_array();
            if($this->decrypt_me($this->session->userdata('admin_pw')) === $this->decrypt_me($db_pw["password"])){
                return true;
            } else{
                return false;
            }
        } else {
            return false;
        }
    }
}

?>