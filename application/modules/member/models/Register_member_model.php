<?php
class Register_member_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->model('backend/settings_model');
        $this->load->helper('email_helper');
    }

    function register($activation_code) {
        $data = array(
            'f_name' => $this->input->post('f_name'),
            'l_name' => $this->input->post('l_name'),
            'password' => $this->helper_model->encrypt_me($this->input->post('password')),
            'email' => $this->input->post('email'),
            'gender' => $this->input->post('gender'),
            'address' => $this->input->post('address'),
            'city' => $this->input->post('city'),
            'mobile' => $this->input->post('mobile'),
            'phone' => $this->input->post('phone'),
            'verification_status' => 0,
            'reg_date' => get_local_time('time'),
            'activation_reset_key' => $activation_code
        );
        $this->db->insert('tbl_users', $data);
        return $this->db->insert_id();
    }
    

    function reg_confirmation_email($activation_code) {
        $mail_setting = $this->settings_model->get_email_settings();
        $message = $this->settings_model->get_email_template('REGISTRATION');
        $subject = $message['subject'];
        $emailbody = $message['content'];
        $hash_email = sha1(md5($this->input->post('email')));
        $confirm = "Click <a href='".getMemberUrl()."register/activation_process/$activation_code/$hash_email'> here</a> to activate your JobPortal account";
        $parseElement = array(
            "USERNAME" => $this->input->post("f_name"),
            "SITENAME" => 'JobPortal',
            "CONFIRM" => $confirm,
            "LINK" => base_url()
        );
        $subject = parse_email($parseElement, $subject);
        $emailbody = parse_email($parseElement, $emailbody);
        $mail_params = array(
                        'to' => $this->input->post('email'),
                        'subject' => $subject,
                        'message' => $emailbody,
                );
        if(send_email($mail_setting, $mail_params)){
            return true;
        } else {
            return false;
        }
    }

    function activated($key, $hash_email) {
        $this->db->where("BINARY(activation_reset_key)", $key);
        $query = $this->db->get("tbl_users");
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                if($hash_email === sha1(md5($row['email']))) {
                    $this->db->set('activation_reset_key', genRandomString('42'));
                    $this->db->set('verification_status', 1);
                    $this->db->where('email',$row['email']);
                    if($this->db->update('tbl_users')) {
                        return $row['email'];
                    } else {
                        return false;
                    }
                }
            }
            return false;
        } else {
            //echo "can't find either the key or the email."; exit;
            return false;
        }
    }

    function hard_delete_user($id){
        $this->db->where('id', $id);
        $this->db->delete('tbl_users');
    }
}
?>