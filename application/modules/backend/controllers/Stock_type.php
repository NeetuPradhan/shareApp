<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_type extends MX_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->form_validation->CI =& $this;
        $this->load->model('backend/stock_type_model');
        if(!$this->helper_model->validate_admin_session()){
          redirect(base_url() . 'backend');
        }
    }

    public function index() {
        $config['base_url'] = site_url(ADMIN_PATH . '/stock_type/page');
        $data['main'] = 'backend/stock_type/list';
        $config['total_rows'] = $this->stock_type_model->count();

        $config['per_page'] = '300';
        $offset = $this->uri->segment(4, 0);
        $config['uri_segment'] = '4';
        $this->pagination->initialize($config);

        $data['stock_type'] = $this->stock_type_model->get_with_limit(array(), $config['per_page'], $offset);
        $data['links'] = $this->pagination->create_links();
        $data['title'] = 'Stock Type';
        $data['subtitle'] = 'Manage your stock type here.';

        $this->load->view('backend/admin', $data);
    }

    public function add() {
        $this->form_validation->set_rules('type', 'Type', 'xss_clean|required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['main'] = 'backend/stock_type/add';
            $data['title'] = 'Add Stock Type';
            $data['subtitle'] = 'Add new stock type here';
            $this->load->view('backend/admin', $data);
        } else {
            $data = array(
                    'type' =>   $this->input->post('type'),
                    'status' => $this->input->post('status'),
                    'added_date' => date("Y-m-d H:i:s"),
                    'updated_date' => NULL
                );
            $this->stock_type_model->add($data);
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'Stock Type Added Successfully');
            redirect(ADMIN_PATH . '/stock_type', 'refresh');
        }
    }

    public function edit($id) {
        $this->form_validation->set_rules('type', 'Type', 'xss_clean|required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['info'] = $this->stock_type_model->get_where_single(array('id' => $id));
            $data['main'] = 'backend/stock_type/edit';
            $data['title'] = 'Edit Stock Type';
            $data['subtitle'] = 'Update stock type here';
            $this->load->view('backend/admin', $data);
        } else {
            $data = array(
                        'type' => $this->input->post('type'),
                        'status' => $this->input->post('status')
                    );
            $this->stock_type_model->update($data, array('id' => $id));
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'Stock Type Updated Successfully');
            redirect(ADMIN_PATH . '/stock_type', 'refresh');
        }
    }

    public function delete($id) {
        if($this->stock_type_model->delete(array('id' => $id))) {
            echo json_encode(array(
                    'status' => TRUE,
                    'message' => 'Stock type deleted successfully'
            ));
        } else {
            echo json_encode(array(
                    'status' => FALSE,
                    'message' => 'Delete Failed'
            ));
        }
    }

    public function change_status($id) {
        $type = $this->stock_type_model->get_where_single(array('id' => $id));
        if($type['status']) {
            $data = array('status' => 0);
        } else {
            $data = array('status' => 1);
        }
        if($this->stock_type_model->update($data, array('id' => $id)) > 0) {
            echo json_encode(array(
                    'status' => TRUE,
                    'message' => 'Status changed successfully'
            ));
        } else {
            echo json_encode(array(
                    'status' => FALSE,
                    'message' => 'Status change Failed'
            ));
        }
    }

    function sort() {
        $sortArr = array();
        $sortArr =  explode(" ",trim($this->input->post('order')));
        $count = count($sortArr);

        foreach ($sortArr as $key => $value) {
            $displayOrderNew = $count-$key;
            $data = array('display_order' => $displayOrderNew);
            $this->company_type_model->sort_data($sortArr[$key], $data);
        }
        echo json_encode(array(
            'status' => true
        ));
    }

}

