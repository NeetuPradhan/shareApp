<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_stock_model extends CI_Model {
	var $table = 'tbl_user_stock';
		
	function __construct()
    {
       parent::__construct();
    }


    function get_all($table='', $order_by=array()) {
        if($table == '')  {
            $table = $this->table;
        }
        $this->db->reset_query();
        foreach ($order_by as $key => $value) {
            $this->db->order_by($key, $value);
        }
       return $this->db->get($this->table)->result_array();
    }


    function get_where_single($where=array(), $table='') {
        if($table == '') {
            $table = $this->table;
        } 
        $this->db->reset_query();
        return $this->db->get_where($table, $where, 1)->row_array();
    }


    function get_where_many($where=array(), $order_by=array(), $table='') {
        if($table == '') {
            $table = $this->table;
        }
        $this->db->reset_query();
        foreach ($order_by as $key => $value) {
            $this->db->order_by($key, $value);
        }
        return $this->db->get_where($table, $where)->result_array();
    }


    function get_with_limit($where=array(), $limit='', $offset='', $order_by=array(), $table='') {
        if($table == '') {
            $table = $this->table;
        }
        $this->db->reset_query();
        $this->db->where($where);
        if($limit != '' && $offset != ''){
        	$this->db->limit($limit, $offset);
        } elseif($limit != '') {
        	$this->db->limit($limit);
        }
        foreach ($order_by as $key => $value) {
            $this->db->order_by($key, $value);
        }
        return $this->db->get($table)->result_array();
    }


    function count($where=array(), $table='') {
        if($table == '') {
            $table = $this->table;
        }
        $this->db->reset_query();
        $this->db->where($where);
        return $this->db->count_all_results($table);
        /*$this->db->count_all_results($table);
        echo $this->db->last_query(); exit;*/
    }


    function delete($where=array(), $table='') {
        if($table == '') {
            $table = $this->table;
        }
        $this->db->reset_query();
        $this->db->where($where);
        $this->db->delete($table);
        if($this->db->affected_rows() > 0) {
        	return TRUE;
        } else {
        	return FALSE;
        }
    }


    function add($data, $table='') {
        if($table == '') {
            $table = $this->table;
        }
        $this->db->reset_query();
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }


    function update($data, $where=array(), $table='') {
        if($table == '') {
            $table = $this->table;
        }
        $this->db->reset_query();
        $this->db->where($where);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }


    function get_max($column_name, $table='') {
        if($table == '') {
            $table = $this->table;
        }
        $this->db->reset_query();
        $this->db->select_max($column_name);
        return $this->db->get($this->table)->row_array();
    }


    function get_select($select='', $where=array(), $limit='', $offset='', $order_by=array(), $table='') {
        if($table == '')  {
            $table = $this->table;
        }
        if($select == ''){
            $select = '*';
        }
        $this->db->select($select);
        return $this->db->get($table)->result_array();
    }


    public function get_user_stock_list($limit, $offset) {
        $this->db->select('us.*');
        $this->db->select('nad.stock_name, nad.stock_symbol');
        $this->db->from('tbl_user_stock us');
        $this->db->join('tbl_nepse_api_data nad', 'us.company_id = nad.id','left');
        $this->db->where('us.id', $this->session->userdata('user_id'));
        $this->db->limit($limit, $offset);
        return $this->db->get()->result_array();
    }


}