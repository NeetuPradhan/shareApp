<?php

class Company_type_model extends CI_Model {	
		
    function company_type_list() {
        $this->db->order_by('display_order', 'DESC');

        $query = $this->db->get('tbl_company_type');
        return $query->result_array();
    }

    function get_company_type($company_type_id) {
        $options = array('id' => $company_type_id);
        $query = $this->db->get_where('tbl_company_type', $options, 1);
        return $query->row_array();
    }

    function add_company_type() {
        $display_order = $this->get_max('display_order');
        $data = array('type' => $this->input->post('type'),
                      'added_date' => date("Y-m-d H:i:s"),
                      'display_order' => $display_order['display_order'] + 1,
                      'status' => $this->input->post('status')
        );
        $this->db->insert('tbl_company_type', $data);
    }

    function update_company_type($company_type_id) {
        $data = array(
                'type' => $this->input->post('type'),
                'updated_date' => date("Y-m-d H:i:s"),
                'status' => $this->input->post('status')
            );

        $this->db->where('id', $company_type_id);
        if($this->db->update('tbl_company_type', $data)){
            return true;
        } else {
            return false;
        }
    }

    function delete_company_type($company_type_id) {
        $this->db->where('id', $company_type_id);
        $this->db->delete('tbl_company_type');
        if($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function change_status($id) {
        $options = array('id' => $id);
        $query = $this->db->get_where('tbl_company_type', $options, 1);
        $det=$query->row_array();

        if ($det['status'] === '1') {
            $status = '0';
        } elseif ($det['status'] === '0') {
            $status = '1';
        }

        $data = array('status' => $status);
        $this->db->where('id', $id);
        if($this->db->update('tbl_company_type', $data)){
            return true;
        } else {
            return false;
        }
    }

    function sort_data($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tbl_company_type', $data);
    }

    function get_max($column_name) {
        $this->db->select_max($column_name);
        return $this->db->get('tbl_company_type')->row_array();
    }
    
}
