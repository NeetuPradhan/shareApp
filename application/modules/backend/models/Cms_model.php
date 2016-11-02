<?php

class Cms_model extends CI_Model {	
		
    function cms_list() {
        $this->db->where('del_flag', 0);
        $this->db->order_by('display_order', 'DESC');

        $query = $this->db->get('tbl_cms');
        return $query->result_array();
    }

    function get_cms($cms_id) {
        $options = array('id' => $cms_id);
        $query = $this->db->get_where('tbl_cms', $options, 1);
        return $query->row_array();
    }

    function add_cms() {
        $display_order = $this->get_max('display_order');
        $data = array('title' => $this->input->post('title'),
                      'head_text' => $this->input->post('head_text'),
                      'content' => $this->input->post('content'),
                      'meta_keywords' => $this->input->post('meta_keywords'),
                      'meta_description' => $this->input->post('meta_description'),
                      'added_date' => date("Y-m-d H:i:s"),
                      'display_order' => $display_order['display_order'] + 1,
                      'status' => $this->input->post('status')
        );
        $this->db->insert('tbl_cms', $data);
    }

    function update_cms($cms_id) {
        $data = array(
                'title' => $this->input->post('title'),
                'head_text' => $this->input->post('head_text'),
                'content' => $this->input->post('content'),
                'meta_keywords' => $this->input->post('meta_keywords'),
                'meta_description' => $this->input->post('meta_description'),
                'modified_date' => date("Y-m-d H:i:s"),
                'status' => $this->input->post('status')
            );

        $this->db->where('id', $cms_id);
        if($this->db->update('tbl_cms', $data)){
            return true;
        } else {
            return false;
        }
    }

    function delete_cms($cms_id) {
        $sql ="Update tbl_cms set del_flag=1 where id='$cms_id'";
        if($this->db->query($sql)){
            return true;
        } else {
            return false;
        }
    }

    function change_status($id) {
        $options = array('id' => $id);
        $query = $this->db->get_where('tbl_cms', $options, 1);
        $det=$query->row_array();

        if ($det['status'] === '1') {
            $status = '0';
        } elseif ($det['status'] === '0') {
            $status = '1';
        }

        $data = array('status' => $status);
        $this->db->where('id', $id);
        if($this->db->update('tbl_cms', $data)){
            return true;
        } else {
            return false;
        }
    }

    function sort_data($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tbl_cms', $data);
    }

    function get_max($column_name) {
        $this->db->select_max($column_name);
        return $this->db->get('tbl_cms')->row_array();
    }
    
}
