<?php

class Company extends MX_Controller {

    function __construct()
    {
        parent::__construct();
        $this->form_validation->CI =& $this;
        $this->load->model('backend/company_model');
        if(!$this->helper_model->validate_admin_session()){
          redirect(base_url() . 'admin');
        }

    }

    function index() {
        $config['base_url'] = site_url(ADMIN_PATH . '/company/page');
        $data['main'] = 'backend/company/list';
        $query = $this->db->get('tbl_company');
        $config['total_rows'] = $query->num_rows();

        $config['per_page'] = '300';
        $offset = $this->uri->segment(4, 0);
        $config['uri_segment'] = '4';
        $this->pagination->initialize($config);

        $data['company_list'] = $this->company_model->company_list($config['per_page'], $offset);
        $data['links'] = $this->pagination->create_links();
        $data['title'] = 'Company Management';
        $data['subtitle'] = 'Manage company here';

        $this->load->view('backend/admin', $data);
    }

    function edit($id) {
        $this->form_validation->set_rules('verification_status', 'Status', 'required|xss_clean|trim|integer|greater_than[-1]|less_than[3]');
        $this->form_validation->set_rules('account_status', 'Status', 'required|xss_clean|trim|integer|greater_than[-1]|less_than[4]');
        
        if ($this->form_validation->run() == FALSE) {
            $data['info'] = $this->company_model->get_company($id);
            $data['main'] = 'backend/company/edit';
            $data['title'] = 'Edit Company';
            $data['subtitle'] = 'Update company here';
            $this->load->view('backend/admin', $data);
        } else {
            $this->company_model->update_company($id);
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'Company Updated Successfully');
            redirect(ADMIN_PATH . '/company', 'refresh');
        }
    }

    function show_announcement($company_id) {
        $data['title'] = 'Company Announcement';
        $data['subtitle'] = 'Company announcement here';
        $data['main'] = 'backend/company/announcement_detail';
        $data['company_announcement'] = $this->company_model->get_company_announcement($company_id);
        $this->load->view('backend/admin', $data);
    }

    function announcement_edit($id) {
        $this->form_validation->set_rules('status', 'Status', 'required|xss_clean|trim|integer|greater_than[-1]|less_than[3]');
        editor();
        if ($this->form_validation->run() == FALSE) {
            $data['info'] = $this->company_model->get_announcement_by_id($id);
            $data['main'] = 'backend/company/announcement_edit';
            $data['title'] = 'Announcement Update';
            $data['subtitle'] = 'Change status of announcement here.';
            $this->load->view('backend/admin', $data);
        } else {
            $this->company_model->update_announcement_status($id);
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'Announcement Status Updated Successfully');
            redirect(ADMIN_PATH . '/company', 'refresh');
        }
    }

}
