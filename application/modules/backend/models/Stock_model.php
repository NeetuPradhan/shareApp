<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_model extends CI_Model {
	var $table = 'tbl_stock';
		
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

    function add($data, $table='') {
        if($table == '') {
            $table = $this->table;
        }
        $this->db->reset_query();
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    function delete($where=array(), $table='') {
        if($table == '') {
            $table = $this->table;
        }
        $this->db->reset_query();
        // $this->db->where($where);
        // $this->db->delete($table);
        $this->db->truncate($table);
        if($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}