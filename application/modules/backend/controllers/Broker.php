<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Broker extends MX_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->form_validation->CI =& $this;
        $this->load->model('backend/broker_model');
        if(!$this->helper_model->validate_admin_session()){
          redirect(base_url() . 'backend');
        }
    }

    public function index() {
        $config['base_url'] = site_url(ADMIN_PATH . '/broker/page');
        $data['main'] = 'backend/broker/list';
        $config['total_rows'] = $this->broker_model->count();

        $config['per_page'] = '300';
        $offset = $this->uri->segment(4, 0);
        $config['uri_segment'] = '4';
        $this->pagination->initialize($config);

        $data['brokers'] = $this->broker_model->get_with_limit(array(), $config['per_page'], $offset);
        $data['links'] = $this->pagination->create_links();
        $data['title'] = 'Stock Brokers';
        $data['subtitle'] = 'Manage Stock Brokers here.';

        $this->load->view('backend/admin', $data);
    }

    public function add() {
        $this->form_validation->set_rules('name', 'Name', 'xss_clean|required');
        $this->form_validation->set_rules('code', 'Code', 'xss_clean|required');
        $this->form_validation->set_rules('phone', 'Phone', 'xss_clean');
        $this->form_validation->set_rules('address', 'Address', 'xss_clean');
        $this->form_validation->set_rules('status', 'Address', 'xss_clean|required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['main'] = 'backend/broker/add';
            $data['title'] = 'Add Stock Broker';
            $data['subtitle'] = 'Add new stock broker here';
            $this->load->view('backend/admin', $data);
        } else {
            $data = array(
                    'name' =>   $this->input->post('name'),
                    'code' => $this->input->post('code'),
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address'),
                    'status' => $this->input->post('status'),
                    'added_date' => date("Y-m-d H:i:s"),
                    'updated_date' => NULL
                );
            $this->broker_model->add($data);
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'Broker Added Successfully');
            redirect(ADMIN_PATH . '/broker', 'refresh');
        }
    }

    public function edit($id) {
        $this->form_validation->set_rules('name', 'Name', 'xss_clean|required');
        $this->form_validation->set_rules('code', 'Code', 'xss_clean|required');
        $this->form_validation->set_rules('phone', 'Phone', 'xss_clean');
        $this->form_validation->set_rules('address', 'Address', 'xss_clean');
        $this->form_validation->set_rules('status', 'Address', 'xss_clean|required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['info'] = $this->broker_model->get_where_single(array('id' => $id));
            $data['main'] = 'backend/broker/edit';
            $data['title'] = 'Edit Stock Broker';
            $data['subtitle'] = 'Update broker info here';
            $this->load->view('backend/admin', $data);
        } else {
            $data = array(
                    'name' =>   $this->input->post('name'),
                    'code' => $this->input->post('code'),
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address'),
                    'status' => $this->input->post('status'),
                    'updated_date' => date("Y-m-d H:i:s")
                );
            $this->broker_model->update($data, array('id' => $id));
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'Broker Info Updated Successfully');
            redirect(ADMIN_PATH . '/broker', 'refresh');
        }
    }

    public function delete($id) {
        if($this->broker_model->delete(array('id' => $id))) {
            echo json_encode(array(
                    'status' => TRUE,
                    'message' => 'Broker deleted successfully'
            ));
        } else {
            echo json_encode(array(
                    'status' => FALSE,
                    'message' => 'Delete Failed'
            ));
        }
    }

    public function change_status($id) {
        $type = $this->broker_model->get_where_single(array('id' => $id));
        if($type['status']) {
            $data = array('status' => 0);
        } else {
            $data = array('status' => 1);
        }
        if($this->broker_model->update($data, array('id' => $id)) > 0) {
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

    function _sort() {
        $sortArr = array();
        $sortArr =  explode(" ",trim($this->input->post('order')));
        $count = count($sortArr);

        foreach ($sortArr as $key => $value) {
            $displayOrderNew = $count-$key;
            $data = array('display_order' => $displayOrderNew);
            $this->broker_model->sort_data($sortArr[$key], $data);
        }
        echo json_encode(array(
            'status' => true
        ));
    }

}

