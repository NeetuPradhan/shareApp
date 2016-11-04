<?php

class User_model extends CI_Model {	
		
	function __construct() {
       
    }

    function user_list($per_page, $offset = '1') {
        $this->db->where('del_flag', 0);
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get('tbl_users');
        return $query->result_array();
    }

    function get_user($id) {
        $options = array('id' => $id,
                          'del_flag' => '0');
        $query = $this->db->get_where('tbl_users', $options, 1);
        return $query->row_array();
    }

    function update_user($user_id) {
        $data = array('verification_status' => $this->input->post('verification_status'),
                    'account_status' => $this->input->post('account_status')
                  );
        $this->db->where('id', $user_id);
        return $this->db->update('tbl_users', $data);
    }
}
