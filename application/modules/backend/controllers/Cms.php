<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends MX_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('backend/cms_model');
        if(!$this->helper_model->validate_admin_session()){
          redirect(base_url() . 'backend');
        }
    }

    public function index() {
        $config['base_url'] = site_url(ADMIN_PATH . '/cms/page');
        $data['main'] = 'backend/cms/list';
        $query = $this->db->get('tbl_cms');
        $config['total_rows'] = $query->num_rows();

        $config['per_page'] = '300';
        $offset = $this->uri->segment(4, 0);
        $config['uri_segment'] = '4';
        $this->pagination->initialize($config);

        $data['cms'] = $this->cms_model->cms_list($config['per_page'], $offset);
        $data['links'] = $this->pagination->create_links();
        $data['title'] = 'Content Page';
        $data['subtitle'] = 'Manage your content pages here';

        $this->load->view('backend/admin', $data);
    }

    public function add() {
        $this->form_validation->set_rules('title', 'Title', 'required|xss_clean');
        $this->form_validation->set_rules('head_text', 'Heading', 'required|xss_clean');
        $this->form_validation->set_rules('content', 'Content', 'required|xss_clean');
        $this->form_validation->set_rules('meta_keywords', 'Meta Keywords', 'required|xss_clean');
        $this->form_validation->set_rules('status', 'Status', 'required|xss_clean');        
        $this->form_validation->set_rules('meta_description', 'Meta Description', 'required|xss_clean');

        editor();
        
        if ($this->form_validation->run() == FALSE) {
            $data['main'] = 'backend/cms/add';
            $data['title'] = 'Add New Content Page';
            $data['subtitle'] = 'Add your content pages here';
            $this->load->view('backend/admin', $data);
        } else {
            $this->cms_model->add_cms();
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'CMS Added Successfully');
            redirect(ADMIN_PATH . '/cms', 'refresh');
        }
    }

    public function edit($cms_id) {
        $this->form_validation->set_rules('title', 'Title', 'required|xss_clean');
        $this->form_validation->set_rules('head_text', 'Heading', 'required|xss_clean');
        $this->form_validation->set_rules('content', 'Content', 'required|xss_clean');
        $this->form_validation->set_rules('meta_keywords', 'Meta Keywords', 'required|xss_clean');
        $this->form_validation->set_rules('status', 'Status', 'required|xss_clean');        
        $this->form_validation->set_rules('meta_description', 'Meta Description', 'required|xss_clean');
        editor();
        
        if ($this->form_validation->run() == FALSE) {
            $data['info'] = $this->cms_model->get_cms($cms_id);
            $data['main'] = 'backend/cms/edit';
            $data['title'] = 'Edit CMS';
            $data['subtitle'] = 'Update your content pages here';
            $this->load->view('backend/admin', $data);
        } else {
            $this->cms_model->update_cms($cms_id);
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'CMS Updated Successfully');
            redirect(ADMIN_PATH . '/cms', 'refresh');
        }
    }

    public function delete($id) {
        if($this->cms_model->delete_cms($id)) {
            echo json_encode(array(
                    'status' => TRUE,
                    'message' => 'CMS deleted successfully'
            ));
        } else {
            echo json_encode(array(
                    'status' => FALSE,
                    'message' => 'Delete Failed'
            ));
        }
    }

    public function change_status($id) {
        if($this->cms_model->change_status($id)) {
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
            $this->cms_model->sort_data($sortArr[$key], $data);
        }
        echo json_encode(array(
            'status' => true
        ));
    }
}

