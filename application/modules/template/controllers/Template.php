<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	
	}

	
	public function render_html($data=array()) {
			$this->load->view('render_html', $data);
	}


	public function load_css($data=array()) {
			$this->load->view('load_css', $data);
	}


	public function load_js($data=array()) {
			$this->load->view('load_js', $data);
	}


	public function topnav($data=array()) {
			$this->load->view('topnav', $data);
	}


	public function content($data=array()) {
			$this->load->view('content', $data);
	}


	public function footer($data=array()) {
		$this->load->view('footer', $data);
	}
	

}
