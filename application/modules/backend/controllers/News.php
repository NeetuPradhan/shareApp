<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MX_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->form_validation->CI =& $this;
        $this->load->model('backend/news_model');
        if(!$this->helper_model->validate_admin_session()){
          redirect(base_url() . 'backend');
        }
    }

    public function index() {
        $config['base_url'] = site_url(ADMIN_PATH . '/news/page');
        $data['main'] = 'backend/news/list';
        $query = $this->db->get('tbl_news');
        $config['total_rows'] = $query->num_rows();

        $config['per_page'] = '300';
        $offset = $this->uri->segment(4, 0);
        $config['uri_segment'] = '4';
        $this->pagination->initialize($config);

        $data['news'] = $this->news_model->news_list($config['per_page'], $offset);
        $data['links'] = $this->pagination->create_links();
        $data['title'] = 'News';
        $data['subtitle'] = 'Manage your news images here.';

        $this->load->view('backend/admin', $data);
    }

    public function add() {
        $this->form_validation->set_rules('title', 'Title', 'xss_clean|required');
        $this->form_validation->set_rules('description', 'Description', 'xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            $data['main'] = 'backend/news/add';
            $data['title'] = 'Add news';
            $data['subtitle'] = 'Add new news here';
            $this->load->view('backend/admin', $data);
        } else {
            $this->news_model->add_news();
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'News Added Successfully');
            redirect(ADMIN_PATH . '/news', 'refresh');
        }
    }

    public function edit($news_id) {
        $this->form_validation->set_rules('title', 'Title', 'xss_clean|required');
        $this->form_validation->set_rules('description', 'Description', 'xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            $data['info'] = $this->news_model->get_news($news_id);
            $data['main'] = 'backend/news/edit';
            $data['title'] = 'Edit newss';
            $data['subtitle'] = 'Update news here';
            $this->load->view('backend/admin', $data);
        } else {
            $this->news_model->update_news($news_id);
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'News Updated Successfully');
            redirect(ADMIN_PATH . '/news', 'refresh');
        }
    }

    public function delete($id) {
        if($this->news_model->delete_news($id)) {
            echo json_encode(array(
                    'status' => TRUE,
                    'message' => 'News deleted successfully'
            ));
        } else {
            echo json_encode(array(
                    'status' => FALSE,
                    'message' => 'Delete Failed'
            ));
        }
    }

    public function change_status($id) {
        if($this->news_model->change_status($id)) {
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
            $this->news_model->sort_data($sortArr[$key], $data);
        }
        echo json_encode(array(
            'status' => true
        ));
    }

}

