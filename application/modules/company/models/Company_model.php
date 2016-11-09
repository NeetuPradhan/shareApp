<?php
class Company_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->model('backend/settings_model');
        $this->load->helper('email_helper');
    }

    function check_email_forget($str) {
        $sql = "SELECT * FROM tbl_company WHERE email='$str' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    function get_company_detail($id) {
        return $this->db->get_where('tbl_company', array('id' => $id))->row_array();
    }


    function update_company($company_id) {
        $data = array(
                    'name' => $this->input->post('name'),
                    'code' => $this->input->post('code'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('phone'),
                    'fax' => $this->input->post('fax'),
                    'address' => $this->input->post('address'),
                    'company_type' => $this->input->post('company_type'),
            );

        $this->db->where('id', $company_id);
        if($this->db->update('tbl_company', $data)){
            return true;
        } else {
            return false;
        }
    }

    function update_password($password) {
        $data = array(
            'password' => $password
            );

        $this->db->where('email', $this->session->userdata('company_email'));

        if($this->db->update('tbl_company', $data)){
            return true;
        } else {
            return false;
        }
    }

    public function verify_current_pw() {
        $this->db->where('email', $this->session->userdata('company_email'));
        $query = $this->db->get_where('tbl_company', array('email = ' => $this->session->userdata('company_email')));

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
        $company_details = $this->get_company_detail_by_email($this->input->post('email'));
        $message = $this->settings_model->get_email_template('FORGOT_PWD');
        $subject = $message['subject'];
        $emailbody = $message['content'];

        $key = genRandomString('32');
        $email = sha1(md5($this->input->post('email')));
            
        $confirm = "<a target='_blank' href='".getCompanyUrl()."validate_pw_reset_credentials/$key/$email'>here</a>";        
        $parseElement = array(
            "USERNAME" => $company_details['name'],
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
        $query = $this->db->get('tbl_company');

        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update_activation_reset_key($key){
        $data = array('activation_reset_key' => $key );
        $this->db->where("email", $this->input->post("email"));
        $this->db->update("tbl_company", $data);
    }


    public function is_key_valid($key, $hash_email) {
        $options = array(
                    'BINARY(activation_reset_key)' => $key,
                    'BINARY(SHA1(MD5(email)))' => $hash_email
                );
        $this->db->where($options);
        $this->db->select('email');
        $query = $this->db->get_where('tbl_company', $options);
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
                    'password' => $this->helper_model->encrypt_me($this->input->post('password')),
                    'activation_reset_key' => genRandomString('42') 
                );
        $this->db->update('tbl_company', $data);
        if($this->db->affected_rows()){
            return true;
        } else {
            return false;
        }
    }

    public function get_company_detail_by_email($email) {
        return $this->db->get_where('tbl_company', array('email' => $email))->row_array();
    }

    function update_verification_status($email) {
        $this->db->set('verification_status', '1');
        $this->db->where('email', $email);
        $this->db->update('tbl_company');
    }

    function insert_announcement() {
        $data = array(
                'title' => $this->input->post('title'),
                'detail' => $this->input->post('detail'),
                'company_id' => $this->session->userdata('company_id'),
                'added_date' => get_local_time('time'),
        );

        if($this->db->insert('tbl_announcement', $data)){
            return true;
        } else {
            return false;
        }
    }

    function announcement_list() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tbl_announcement');
        return $query->result_array();
    }

    function get_announcement($announcement_id) {
        $options = array('id' => $announcement_id);
        $query = $this->db->get_where('tbl_announcement', $options, 1);
        return $query->row_array();
    }

    function update_announcement($announcement_id) {
        $data = array(
                'title' => $this->input->post('title'),
                'detail' => $this->input->post('detail'),
            );

        $this->db->where('id', $announcement_id);
        if($this->db->update('tbl_announcement', $data)){
            return true;
        } else {
            return false;
        }
    }

    function delete_announcement($announcement_id) {
        $this->db->where('id', $announcement_id);
        if($this->db->delete('tbl_announcement')){
            return true;
        }
        return false;
    }

    function change_status($id) {
        $options = array('id' => $id);
        $query = $this->db->get_where('tbl_announcement', $options, 1);
        $det=$query->row_array();

        if ($det['status'] === '1') {
            $status = '0';
        } elseif ($det['status'] === '0') {
            $status = '1';
        }

        $data = array('status' => $status);
        $this->db->where('id', $id);
        if($this->db->update('tbl_announcement', $data)){
            return true;
        } else {
            return false;
        }
    }
}
?>