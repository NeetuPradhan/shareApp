<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_stock extends MX_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	$this->form_validation->CI =& $this;
	  	$this->load->library('form_validation');
	  	$this->load->model('user_stock_model');
	  	if(!$this->helper_model->validate_user_session()) {
	  		redirect(getHomeUrl(), 'refresh');
	  	}
	}

	public function index() {
		$config['base_url'] = getMemberUrl().'portfolio/page';
		$data['title'] = 'My Portfolio';
		$data['module'] = 'member';
		$data['view_file'] = 'user_stock/main';
        $config['total_rows'] = $this->user_stock_model->count(array('user_id' => $this->session->userdata('user_id')));

        $config['per_page'] = '300';
        $offset = $this->uri->segment(4, 0);
        $config['uri_segment'] = '4';
        $this->pagination->initialize($config);

        $where = array('user_id' => $this->session->userdata('user_id'));
        // $data['stocks'] = $this->user_stock_model->get_with_limit($where, $config['per_page'], $offset);
        $data['stocks'] = $this->user_stock_model->get_user_stock_list($config['per_page'], $offset);
        // prePrint($data['stocks']);
        // $data['stock_status'] = $this->_stock_status($data['stocks']);
        $data['links'] = $this->pagination->create_links();
        $data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
        // prePrint($data);

        echo Modules::run('template/render_html', $data);
	}

	function add_stock() {
		$this->form_validation->set_rules('stock_type_id','Stock Type','required|xss_clean');
		$this->form_validation->set_rules('company_id','Company','required|xss_clean');
		$this->form_validation->set_rules('quantity','Quantity','integer|greater_than[0]|required|xss_clean');
		$this->form_validation->set_rules('rate','Rate','numeric|greater_than_equal_to[0]|required|xss_clean');
		$this->form_validation->set_rules('broker_id','Broker','xss_clean');
		$this->form_validation->set_rules('transaction_date','Transaction Date','xss_clean');
		$this->form_validation->set_rules('transaction_no','Transaction Number','xss_clean');

		if($this->form_validation->run()) {
			$data = array(
					'user_id' => $this->session->userdata('user_id'),
					'transaction_no' => $this->input->post('transaction_no'),
					'stock_type_id' => $this->input->post('stock_type_id'),
					'company_id' => $this->input->post('company_id'),
					'quantity' => $this->input->post('quantity'),
					'rate' => $this->input->post('rate'),
					'broker_id' => $this->input->post('broker_id'),
					'transaction_date' => $this->input->post('transaction_date'),
					'added_date' => date("Y-m-d H:i:s")
				);
			$this->user_stock_model->add($data);
			$this->session->set_userdata( 'user_flash_msg_type', "success" );
            $this->session->set_flashdata('user_flash_msg', 'Stocks Added Successfully');
			redirect(getMemberUrl().'portfolio');
		} else {
			$data['stock_types'] = $this->user_stock_model->get_select('id, type', array('status' => '1'), '', '', array(), 'tbl_stock_type');
			$data['brokers'] = $this->user_stock_model->get_select('id, name, code', array('status' => '1'), '', '', array(), 'tbl_broker');
			$data['companies'] = $this->user_stock_model->get_select('id, stock_name, stock_symbol', array('status' => '1'), '', '', array(), 'tbl_nepse_api_data');
			$data['title'] = 'Add New Stock';
			$data['module'] = 'member';
			$data['view_file'] = 'user_stock/add';
	        $data['scripts'] = array(
	        					base_url().'assets/common/datepicker/jquery-ui.min.js',
	        					base_url().'assets/admin/template/plugins/select2/select2.full.min.js'
	        				);
	        $data['stylesheets'] = array(
	        					base_url().'assets/admin/template/plugins/select2/select2.min.css',
	        					base_url().'assets/common/datepicker/jquery-ui.css',
								base_url().'assets/front/bundles/css/main2007a90.css', 
								base_url().'assets/front/bundles/css/site20563a4.css',
							);

	        echo Modules::run('template/render_html', $data);
		}
	}


	function edit_stock_info() {
		// $this->mystock;
	}

 	public function stock_list() {
 		die('sdfs');
 		/*$this->form_validation->set_rules('stock_type','Stock Type','required|xss_clean');
		$this->form_validation->set_rules('company','Company Name','required|xss_clean');
		$this->form_validation->set_rules('quantity','Quantity','integer|greater_than[0]|required|xss_clean');
		$this->form_validation->set_rules('rate','Rate','numeric|greater_than_equql_to[0]|required|xss_clean');
		$this->form_validation->set_rules('broker','Broker','xss_clean');
		$this->form_validation->set_rules('transaction_date','Transaction Date','xss_clean');*/


		$config['base_url'] = getMemberUrl().'/user_stock/page';

		$data['title'] = 'My Portfolio';
		$data['module'] = 'member';
		$data['view_file'] = 'user_stock/list';
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
 	}

 	public function update_stock() {
		$this->form_validation->set_rules('stock_type','Stock Type','required|xss_clean');
		$this->form_validation->set_rules('company','Company Name','required|xss_clean');
		$this->form_validation->set_rules('quantity','Quantity','integer|greater_than[0]|required|xss_clean');
		$this->form_validation->set_rules('rate','Rate','numeric|greater_than_equql_to[0]|required|xss_clean');
		$this->form_validation->set_rules('broker','Broker','xss_clean');
		$this->form_validation->set_rules('transaction_date','Transaction Date','xss_clean');

        if ($this->form_validation->run()) {
            $password = $this->helper_model->encrypt_me($this->input->post('new_password'));
            if($this->member_model->update_password($password)) {
                $this->session->set_userdata( 'user_flash_msg_type', "success" );
                $this->session->set_flashdata('user_flash_msg', 'Password Changed Successfully');
                redirect(getMemberUrl().'login');
            } else {
                $this->session->set_userdata( 'user_flash_msg_type', "danger" );
                $this->session->set_flashdata('user_flash_msg', 'Sorry, Unable to Change the Password');
            }
        }

        $data['title'] = 'Change Password';
		$data['module'] = 'member';
		$data['view_file'] = 'change_password';
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
	}

	

}
