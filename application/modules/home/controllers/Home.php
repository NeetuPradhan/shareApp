<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	$this->form_validation->CI =& $this;
	  	$this->load->library('form_validation');
	  	$this->load->model('home_model');
	  	$this->load->model('announcement/announcement_model');
	  	$this->load->model('news/news_model');
	  	
	}

	public function index() {
		$data['title'] = 'Home';
		$data['module'] = 'home';
		$data['view_file'] = 'home';
		$data["announcement"] = $this->announcement_model->get_announcement(HOME_PAGE_LIMIT);
		$data["news"] = $this->news_model->get_news(HOME_PAGE_LIMIT);
		$data["gainers"] = $this->home_model->get_all('tbl_nepse_api_data',array('daily_stock_stats_percentage_change_in_price'=>'desc'),5);
		$data["losers"] = $this->home_model->get_all('tbl_nepse_api_data',array('daily_stock_stats_percentage_change_in_price'=>'asc'),5);
		$data["turnovers"] = $this->home_model->get_all('tbl_nepse_api_data',array('daily_stock_stats_percentage_change_in_price'=>'desc'),5);
		$data["total_turnovers"] = $this->home_model->get_all('tbl_nepse_api_data',array('daily_stock_stats_percentage_change_in_price','asc'),5);
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('template/render_html', $data);
	}

	public function contact_us(){
        $this->session->set_userdata('referred_from', current_url());
        $this->form_validation->set_rules('subject', 'Subject', 'required|trim|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'required|xss_clean|trim');
        if(!$this->helper_model->validate_user_session()) {
            $this->form_validation->set_rules('captcha', 'Captcha', 'required|xss_clean|trim|callback_validate_captcha');
            $this->form_validation->set_rules('name', 'Name', 'required|xss_clean|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|valid_email');
        }

		if($this->form_validation->run()){
			if($this->home_model->insert_contact_message()){
				$this->session->set_userdata( 'user_flash_msg_type', "success" );
	            $this->session->set_flashdata('user_flash_msg', "Thanks for contacting. We will get back to you as soon as we can.");
	            redirect(base_url() . 'contact_us', 'refresh');
			} else {
				$this->session->set_userdata( 'user_flash_msg_type', "failure" );
	            $this->session->set_flashdata('user_flash_msg', "Your message can't be sent now. Please try again later.");
	            redirect(base_url() . 'contact_us', 'refresh');
			}
		}
		$data['title'] = 'Contact Us';
		$data['module'] = 'home';
		$data['view_file'] = 'contact_us';
		$data["captcha"] = generate_captcha();
		$data["contact_details"] = $this->home_model->get_contact_details();
		$data['scripts'] = array(
							"https://maps.googleapis.com/maps/api/js?key=AIzaSyAmZW6nhwlAXb9kwV6_nq7cRRkDaJEVUVE",
						);
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
    }


    public function refresh_captcha(){
    	$data = generate_captcha(true);
    	echo json_encode(array(
                'status' => true,
                'src' => $data["filename"]
            ));
    }


    public function validate_captcha($captcha){
    	if(strcmp($this->session->userdata('captchaWord'), $captcha) != 0){
    		$this->form_validation->set_message('validate_captcha', 'Please type the characters shown in the image correctly.');
    		return false;
    	} else {
    		return true;
    	}
    }

    public function footer_contents($title){
        $this->session->set_userdata('referred_from', current_url());
		$data["cms_contents"] = $this->home_model->get_footer_contents($title);
		$data['title'] = 'Home';
		$data['module'] = 'home';
		$data['view_file'] = $title;
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
    }

    function gainers_more() {
    	$data["gainers"] = $this->home_model->get_all('tbl_nepse_api_data',array('daily_stock_stats_percentage_change_in_price'=>'desc'),15);
		$data['title'] = 'Home';
		$data['module'] = 'home';
		$data['view_file'] = '_layouts/gainers/gainers_more';
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
    }

    function losers_more() {
    	$data["losers"] = $this->home_model->get_all('tbl_nepse_api_data',array('daily_stock_stats_percentage_change_in_price'=>'asc'),15);
		$data['title'] = 'Home';
		$data['module'] = 'home';
		$data['view_file'] = '_layouts/losers/losers_more';
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
    }

}
