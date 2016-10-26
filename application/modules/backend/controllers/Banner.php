<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('backend/banner_model');
        $this->load->library('form_validation');
        $this->load->helper('file');
        if(!$this->helper_model->validate_admin_session()){
          redirect(base_url() . 'backend');
        }
    }

    public function index() {
        $config['base_url'] = site_url(ADMIN_PATH . '/banner/page');
        $data['main'] = 'backend/banner/list';
        $query = $this->db->get('tbl_banner');
        $config['total_rows'] = $query->num_rows();

        $config['per_page'] = '300';
        $offset = $this->uri->segment(4, 0);
        $config['uri_segment'] = '4';
        $this->pagination->initialize($config);

        $data['banner'] = $this->banner_model->banner_list($config['per_page'], $offset);
        $data['links'] = $this->pagination->create_links();
        $data['title'] = 'Banner';
        $data['subtitle'] = 'Manage your banner images here.';

        $this->load->view('backend/admin', $data);
    }

    public function add() {
        $this->form_validation->set_rules('image', 'Image', 'xss_clean|callback__validate_logo');
        $this->form_validation->set_rules('title', 'Title', 'xss_clean|required');
        $this->form_validation->set_rules('description', 'Description', 'xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            if(isset($_POST['post_image'])){
                if (file_exists(BANNER_DIR . $_POST['post_image'])){
                    @unlink(BANNER_DIR . $_POST['post_image']);
                }
            }
            $data['main'] = 'backend/banner/add';
            $data['title'] = 'Add Banners';
            $data['subtitle'] = 'Add new banner here';
            $this->load->view('backend/admin', $data);
        } else {
            if(!isset($_POST['post_image'])){
                $_POST['post_image']='';
            }
            $this->banner_model->add_banners($_POST['post_image']);
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'Banner Added Successfully');
            redirect(ADMIN_PATH . '/banner', 'refresh');
        }
    }

    public function edit($banner_id) {
        $this->form_validation->set_rules('image', 'Image', 'xss_clean|callback__validate_logo['.true.']');
        $this->form_validation->set_rules('title', 'Title', 'xss_clean|required');
        $this->form_validation->set_rules('description', 'Description', 'xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            if(isset($_POST['post_image'])){
                if (file_exists(BANNER_DIR . $_POST['post_image'])){
                    @unlink(BANNER_DIR . $_POST['post_image']);
                }
            }
            $data['info'] = $this->banner_model->get_banner($banner_id);
            $data['main'] = 'backend/banner/edit';
            $data['title'] = 'Edit Banners';
            $data['subtitle'] = 'Update banner here';
            $this->load->view('backend/admin', $data);
        } else {
            if (isset($_POST['post_image'])) {
                $image = $_POST['post_image'];
                if (file_exists(BANNER_DIR . $this->input->post('prev_image'))){
                    @unlink(BANNER_DIR. $this->input->post('prev_image'));
                }
            } else {
                $image = $this->input->post('prev_image');
            }

            $this->banner_model->update_banner($image,$banner_id);
            $this->session->set_userdata( 'flash_msg_type', "success" );
            $this->session->set_flashdata('flash_msg', 'Banner Updated Successfully');
            redirect(ADMIN_PATH . '/banner', 'refresh');
        }
    }

    public function delete($id) {
        if($this->banner_model->delete_banner($id)) {
            echo json_encode(array(
                    'status' => TRUE,
                    'message' => 'Banner deleted successfully'
            ));
        } else {
            echo json_encode(array(
                    'status' => FALSE,
                    'message' => 'Delete Failed'
            ));
        }
    }

    public function change_status($id) {
        if($this->banner_model->change_status($id)) {
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


    function _validate_logo($image='', $edit=false) {
        if(isset($_FILES['image']) && !empty($_FILES['image']['name'])) {     //check if the field is empty or not
            $image = array(
                        'location' => BANNER_DIR,
                        'temp_location' => TEMP_DIR,
                        'width' => LOGO_W,
                        'height' => LOGO_H,
                        'image' => 'image'      //field name of the file in the form
                    );
            $this->load->helper('image_helper');
            $response = validate_image($image);
            if($response['status']) {
                return true;
            } else {
                $this->form_validation->set_message('_validate_logo', $response['msg']);
                return false;
            }
        } elseif(!$edit) {
            $this->form_validation->set_message('_validate_logo', 'Please select an image for logo.');
            return false;
        } else {
            return true;
        }
    }

}

