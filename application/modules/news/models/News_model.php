<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

	public function get_news($limit=false) {
		$this->db->order_by('id', 'DESC');
		$this->db->where('status',1);
		$this->db->where('del_flag',0);
        $this->db->limit($limit);
        $query = $this->db->get('tbl_news');
        return $query->result_array();
	}

	public function totalRecordNews() {
		$this->db->where('status',1);
		$this->db->where('del_flag',0);
		$query = $this->db->get('tbl_news');
		$records = $query->result_array();
		return count($records);
	}

	public function get_remaining_news($news_id) {
		$this->db->where('id<',$news_id);
		$this->db->where('status',1);
		$this->db->where('del_flag',0);
		$this->db->order_by('id', 'DESC');
		$this->db->limit(HOME_PAGE_LIMIT);
        $query = $this->db->get('tbl_news');
        return $query->result_array();
	}

	public function get_limit_more($offset,$limit) {
		$this->db->where('status',1);
		$this->db->where('del_flag',0);
		$this->db->order_by('id', 'DESC');
		$this->db->limit($offset,$limit);
        $query = $this->db->get('tbl_news');
        return $query->result_array();
	}

}