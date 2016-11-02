<?php

class News_model extends CI_Model {	
		
    function news_list() {
        $this->db->where('del_flag', 0);
        $this->db->order_by('display_order', 'DESC');

        $query = $this->db->get('tbl_news');
        return $query->result_array();
    }

    function get_news($news_id) {
        $options = array('id' => $news_id);
        $query = $this->db->get_where('tbl_news', $options, 1);
        return $query->row_array();
    }

    function add_news() {
        $display_order = $this->get_max('display_order');
        $data = array('title' => $this->input->post('title'),
                      'description' => $this->input->post('description'),
                      'added_date' => date("Y-m-d H:i:s"),
                      'display_order' => $display_order['display_order'] + 1,
                      'status' => $this->input->post('status')
        );
        $this->db->insert('tbl_news', $data);
    }

    function update_news($news_id) {
        $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'updated_date' => date("Y-m-d H:i:s"),
                'status' => $this->input->post('status')
            );

        $this->db->where('id', $news_id);
        if($this->db->update('tbl_news', $data)){
            return true;
        } else {
            return false;
        }
    }

    function delete_news($news_id) {
        $sql ="Update tbl_news set del_flag=1 where id='$news_id'";
        if($this->db->query($sql)){
            return true;
        } else {
            return false;
        }
    }

    function change_status($id) {
        $options = array('id' => $id);
        $query = $this->db->get_where('tbl_news', $options, 1);
        $det=$query->row_array();

        if ($det['status'] === '1') {
            $status = '0';
        } elseif ($det['status'] === '0') {
            $status = '1';
        }

        $data = array('status' => $status);
        $this->db->where('id', $id);
        if($this->db->update('tbl_news', $data)){
            return true;
        } else {
            return false;
        }
    }

    function sort_data($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tbl_news', $data);
    }

    function get_max($column_name) {
        $this->db->select_max($column_name);
        return $this->db->get('tbl_news')->row_array();
    }
    
}
