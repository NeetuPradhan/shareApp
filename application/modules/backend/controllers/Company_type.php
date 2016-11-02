<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_type extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('backend/company_type_model');
        $this->load->library('form_validation');
        if(!$this->helper_model->validate_admin_session()){
          redirect(base_url() . 'backend');
        }
    }

    public function index() {
        $config['base_url'] = site_url(ADMIN_PATH . '/company_type/page');
        $data['main'] = 'backend/company_type/list';
        $query = $this->db->get('tbl_company_type');
        $config['total_rows'] = $query->num_rows();

        $config['per_page'] = '300';
        $offset = $this->uri->segment(4, 0);
        $config['uri_segment'] = '4';
        $this->pagination->initialize($config);

        $data['company_type'] = $this->company_type_model->company_type_list($config['per_page'], $offset);
        $data['links'] = $this->pagination->create_links();
        $data['title'] = 'Company Type';
        $data['subtitle'] = 'Manage your company type images here.';

        $this->load->view('backend/admin', $data);
    }

    public function add() {
        $this->form_validation->set_rules('type', 'Type', 'xss_clean|required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['main'] = 'backend/company_type/add';
            $data['title'] = 'Add Company Type';
            $data['subtitle'] = 'Add new company type here';
            $this->load->view('backend/admin', $data);
        } else {
            $this->company_type_model->add_company_type();
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'Company Type Added Successfully');
            redirect(ADMIN_PATH . '/company_type', 'refresh');
        }
    }

    public function edit($company_type_id) {
        $this->form_validation->set_rules('type', 'Type', 'xss_clean|required');
        
        if ($this->form_validation->run() == FALSE) {
            $data['info'] = $this->company_type_model->get_company_type($company_type_id);
            $data['main'] = 'backend/company_type/edit';
            $data['title'] = 'Edit Company Type';
            $data['subtitle'] = 'Update company type here';
            $this->load->view('backend/admin', $data);
        } else {
            $this->company_type_model->update_company_type($company_type_id);
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'Company Type Updated Successfully');
            redirect(ADMIN_PATH . '/company_type', 'refresh');
        }
    }

    public function delete($id) {
        if($this->company_type_model->delete_company_type($id)) {
            echo json_encode(array(
                    'status' => TRUE,
                    'message' => 'company_type deleted successfully'
            ));
        } else {
            echo json_encode(array(
                    'status' => FALSE,
                    'message' => 'Delete Failed'
            ));
        }
    }

    public function change_status($id) {
        if($this->company_type_model->change_status($id)) {
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

