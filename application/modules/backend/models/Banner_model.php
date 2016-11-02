<?php

class Banner_model extends CI_Model {	
		
    function banner_list() {
        $this->db->where('del_flag', 0);
        $this->db->order_by('display_order', 'DESC');

        $query = $this->db->get('tbl_banner');
        return $query->result_array();
    }

    function get_banner($banner_id) {
        $options = array('id' => $banner_id);
        $query = $this->db->get_where('tbl_banner', $options, 1);
        return $query->row_array();
    }

    function add_banners($image) {
        $display_order = $this->get_max('display_order');
        $data = array('title' => $this->input->post('title'),
                      'image' => $image,
                      'description' => $this->input->post('description'),
                      'added_date' => date("Y-m-d H:i:s"),
                      'status' => $this->input->post('status'),
                      'display_order' => $display_order['display_order'] + 1
        );
        $this->db->insert('tbl_banner', $data);
    }

    function update_banner($image = '',$banner_id) {
        if ($image == '')
            $image = $this->input->post('prev_image');
        
        $data = array(
                'title' => $this->input->post('title'),
                'image' => $image,
                'description' => $this->input->post('description'),
                'updated_date' => date("Y-m-d H:i:s"),
                'status' => $this->input->post('status')
            );

        $this->db->where('id', $banner_id);
        if($this->db->update('tbl_banner', $data)){
            return true;
        } else {
            return false;
        }
    }

    function delete_banner($banner_id) {
        $sql ="Update tbl_banner set del_flag=1 where id='$banner_id'";
        if($this->db->query($sql)){
            return true;
        } else {
            return false;
        }
    }

    function change_status($id) {
        $options = array('id' => $id);
        $query = $this->db->get_where('tbl_banner', $options, 1);
        $det=$query->row_array();

        if ($det['status'] === '1') {
            $status = '0';
        } elseif ($det['status'] === '0') {
            $status = '1';
        }

        $data = array('status' => $status);
        $this->db->where('id', $id);
        if($this->db->update('tbl_banner', $data)){
            return true;
        } else {
            return false;
        }
    }

    function sort_data($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tbl_banner', $data);
    }

    function get_max($column_name) {
        $this->db->select_max($column_name);
        return $this->db->get('tbl_banner')->row_array();
    }
    
}
