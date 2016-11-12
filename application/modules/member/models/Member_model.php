<?php
class Member_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->model('backend/settings_model');
        $this->load->helper('email_helper');
    }

    function check_email_forget($str) {
        $sql = "SELECT * FROM tbl_users WHERE email='$str' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    function get_user_detail($id) {
        return $this->db->get_where('tbl_users', array('id' => $id))->row_array();
    }

    function update_user($user_id) {
        $data = array(
                    'f_name' => $this->input->post('f_name'),
                    'l_name' => $this->input->post('l_name'),
                    'email' => $this->input->post('email'),
                    'gender' => $this->input->post('gender'),
                    'address' => $this->input->post('address'),
                    'city' => $this->input->post('city'),
                    'mobile' => $this->input->post('mobile'),
                    'phone' => $this->input->post('phone'),
            );

        $this->db->where('id', $user_id);
        if($this->db->update('tbl_users', $data)){
            return true;
        } else {
            return false;
        }
    }

    function update_password($password) {
        $data = array(
            'password' => $password
            );

        $this->db->where('email', $this->session->userdata('user_email'));

        if($this->db->update('tbl_users', $data)){
            return true;
        } else {
            return false;
        }
    }

    public function verify_current_pw() {
        $this->db->where('email', $this->session->userdata('user_email'));
        $query = $this->db->get_where('tbl_users', array('email = ' => $this->session->userdata('user_email')));

        if($query->num_rows() == 1){
            $row = $query->row_array(); 
            $pass = $this->helper_model->decrypt_me($row['password']);
            if($this->input->post('cur_password') == $pass){
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
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
            "SITENAME" => 'JobPortal',
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
        $query = $this->db->get('tbl_users');

        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update_activation_reset_key($key){
        $data = array('activation_reset_key' => $key );
        $this->db->where("email", $this->input->post("email"));
        $this->db->update("tbl_users", $data);
    }


    public function is_key_valid($key, $hash_email) {
        $options = array(
                    'BINARY(activation_reset_key)' => $key,
                    'BINARY(SHA1(MD5(email)))' => $hash_email
                );
        $this->db->where($options);
        $this->db->select('email');
        $query = $this->db->get_where('tbl_users', $options);
        if($query->num_rows()==1) {
            $data = $query->row_array();
            return $data['email'];
        } else {
            return false;
        }
    }

    public function reset_password($email) {
        $this->db->where('email',$email);
        $data = array(
                    'password' => $this->helper_model->encrypt_me($this->input->post('new_password')),
                    'activation_reset_key' => genRandomString('42') 
                );
        $this->db->update('tbl_users', $data);
        if($this->db->affected_rows()){
            return true;
        } else {
            return false;
        }
    }

    public function get_user_detail_by_email($email) {
        return $this->db->get_where('tbl_users', array('email' => $email))->row_array();
    }

    function update_verification_status($email) {
        $this->db->set('verification_status', '1');
        $this->db->where('email', $email);
        $this->db->update('tbl_users');
    }

}
?>