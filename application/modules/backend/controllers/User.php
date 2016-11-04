<?php

class User extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('backend/user_model');
        $this->load->library('form_validation');
        if(!$this->helper_model->validate_admin_session()){
          redirect(base_url() . 'admin');
        }

    }

    public function index() {
        $this->cms_user();
    }

    function cms_user() {
        $config['base_url'] = site_url(ADMIN_PATH . '/user/page');
        $data['main'] = 'backend/user/list';
        $query = $this->db->get('tbl_users');
        $config['total_rows'] = $query->num_rows();

        $config['per_page'] = '300';
        $offset = $this->uri->segment(4, 0);
        $config['uri_segment'] = '4';
        $this->pagination->initialize($config);

        $data['user_list'] = $this->user_model->user_list($config['per_page'], $offset);
        $data['links'] = $this->pagination->create_links();
        $data['title'] = 'User Management';
        $data['subtitle'] = 'Manage users here';

        $this->load->view('backend/admin', $data);
    }

    function edit($id) {
        $this->form_validation->set_rules('verification_status', 'Status', 'required|xss_clean|trim|integer|greater_than[-1]|less_than[3]');
        $this->form_validation->set_rules('account_status', 'Status', 'required|xss_clean|trim|integer|greater_than[-1]|less_than[4]');
        
        if ($this->form_validation->run() == FALSE) {
            $data['info'] = $this->user_model->get_user($id);
            $data['main'] = 'backend/user/edit';
            $data['title'] = 'Edit user';
            $data['subtitle'] = 'Update user here';
            $this->load->view('backend/admin', $data);
        } else {
            $this->user_model->update_user($id);
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'User Updated Successfully');
            redirect(ADMIN_PATH . '/user', 'refresh');
        }
    }
}
