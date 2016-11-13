<?php

class Company_model extends CI_Model {	
		
	function __construct() {
       
    }

    function company_list($per_page, $offset = '1') {
        $this->db->where('del_flag', 0);
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get('tbl_company');
        return $query->result_array();
    }

    function get_company($id) {
        $options = array('id' => $id,
                          'del_flag' => '0');
        $query = $this->db->get_where('tbl_company', $options, 1);
        return $query->row_array();
    }

    function update_company($company_id) {
        $data = array('verification_status' => $this->input->post('verification_status'),
                      'account_status' => $this->input->post('account_status')
                  );
        $this->db->where('id', $company_id);
        return $this->db->update('tbl_company', $data);
    }

    function get_company_announcement($company_id) {
        $this->db->where('company_id',$company_id);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tbl_announcement');
        return $query->result_array();
    }

    function get_announcement_by_id($announcement_id) {
        $this->db->where('id',$announcement_id);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tbl_announcement');
        return $query->row_array();
    }
    
    function update_announcement_status($announcement_id) {
        $data = array('status' => $this->input->post('status'),
                  );
        $this->db->where('id', $announcement_id);
        return $this->db->update('tbl_announcement', $data);
    }
}
