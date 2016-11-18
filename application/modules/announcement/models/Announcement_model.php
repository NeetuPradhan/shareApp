<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcement_model extends CI_Model {

	public function get_announcement($limit=false,$more_count=false) {
		$this->db->order_by('id', 'DESC');
		$this->db->where('status',1);
        if($limit){
        	$this->db->limit($limit);
        }else if($more_count){
        	$this->db->limit($more_count,$limit);
        }
        $query = $this->db->get('tbl_announcement');
        return $query->result_array();
	}

	public function totalRecordAnnouncement() {
		$this->db->where('status',1);
		$query = $this->db->get('tbl_announcement');
		$records = $query->result_array();
		return count($records);
	}

	public function get_remaining_announcement($announcement_id) {
		$this->db->where('id<',$announcement_id);
		$this->db->where('status',1);
		$this->db->order_by('id', 'DESC');
		$this->db->limit(HOME_PAGE_LIMIT);
        $query = $this->db->get('tbl_announcement');
        return $query->result_array();
	}

	public function get_limit_more($offset,$limit) {
		$this->db->where('status',1);
		$this->db->order_by('id', 'DESC');
		$this->db->limit($offset,$limit);
        $query = $this->db->get('tbl_announcement');
        return $query->result_array();
	}

	function get_single_announcement($id) {
        $options = array('id' => $id);
        $query = $this->db->get_where('tbl_announcement', $options, 1);
        return $query->row_array();
    }

    function get_all($table='', $order_by=array(),$limit='') {
        if($table == '')  {
            $table = $this->table;
        }
        $this->db->reset_query();
        foreach ($order_by as $key => $value) {
            $this->db->order_by($key, $value);
        }
        $this->db->limit($limit);
       	return $this->db->get($table)->result_array();
    }

}