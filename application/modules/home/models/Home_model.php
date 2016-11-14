<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function get_contact_details(){
        $query = $this->db->limit(1)->get('tbl_contact_us');
        return $query->row_array();
	}


	public function insert_contact_message(){
		$date = new DateTime('now');
		$date_to_insert = $date->format('Y-m-d H:i:s');
		if($this->helper_model->validate_user_session()) {
			$name = $this->session->userdata("name");
			$email = $this->session->userdata("user_email");
			$user_id = $this->session->userdata("user_id");
		} elseif ($this->helper_model->is_user_registered($this->input->post('email'))) {
			$this->db->where('email', $this->input->post('email'));
			$user_details = $this->db->get('tbl_users')->row_array();
			$email = $this->input->post('email');
			$name = $user_details['f_name']." " . $user_details['l_name'];
			/*if($user_details['user_type']==2){
				$name .= " " . $user_details['l_name'];
			}*/
			$user_id = $user_details['id'];
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$user_id = NULL;
		}
		$data_to_db = array(
                    'name'  => $name,
                    'email'  => $email,
                    'subject'  => $this->input->post('subject'),
                    'message'  => $this->input->post('message'),
                    'received_date_time'  => $date_to_insert,
                    'user_id'  => $user_id
                );
            $query = $this->db->insert_string('tbl_user_messages', $data_to_db);
            return $this->db->query($query);
	}

	public function get_footer_contents($title){
		$query = "SELECT * FROM tbl_cms
			WHERE title = '$title'";
		$result = $this->db->query($query);
		return $result->row_array();
	}

}