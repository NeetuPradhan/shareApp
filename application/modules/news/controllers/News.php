<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MX_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	$this->form_validation->CI =& $this;
	  	$this->load->library('form_validation');
	  	$this->load->model('news_model');
	  	
	}

    public function index() {
    	$data['title'] = 'News';
		$data['module'] = 'news';
		$data['view_file'] = 'list';
		$data["news"] = $this->news_model->get_news(HOME_PAGE_LIMIT);
		$data["news_total"] = $this->news_model->totalRecordnews();
		$data["gainers"] = $this->news_model->get_all('tbl_nepse_api_data',array('daily_stock_stats_percentage_change_in_price'=>'desc'),5);
		$data["losers"] = $this->news_model->get_all('tbl_nepse_api_data',array('daily_stock_stats_percentage_change_in_price'=>'asc'),5);
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
    }
  
    public function more_list() {
    	$news_id = $_POST['json_news_id'];
    	$getMoreCount = $_POST['more_count'];
    	$news_list = $this->news_model->get_remaining_news($news_id);
    	$more_count = HOME_PAGE_LIMIT +$getMoreCount;
    	$moreState['moreMsg'] = '';
		// $getLimitMore = $this->news_model->get_limit_more($more_count,HOME_PAGE_LIMIT);
		if(empty($news_list)) {
			$moreState['moreMsg'] = 'yes';
		} else {
			$moreState['moreMsg'] = 'no';
		}
		$moreState['more_btn'] = $more_count;

		$html='';
		$elementArr = array();
            foreach ($news_list as $element) {
                $elementArr['added_date'] = formatDateTime($element['added_date'],'M d,Y');
                $elementArr['title'] = $element['title'];
                $elementArr['id'] = $element['id'];

        		$html.= '<div class="media">
                            <div class="media-wrap media-left">
                                <a href="'.getAnnouncementUrl().'detail/'.$elementArr['id'].'"  target="_blank">
                                    <img class="lazy" alt="'.$elementArr["title"].'" src="'.base_url()."images/no-image.jpg".'" style="height:100px;width:100px">
                                </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-title">
                                        <a href="'.getNewsUrl().'detail/'.$elementArr['id'].'"  target="_blank">'.$elementArr["title"].'</a>
                                    </h4>
                                    <span class="media-label">'.formatDateTime($elementArr["added_date"],"M d,Y").'</span>
                                </div>
                                <div class="news_id" data-id="'.$elementArr["id"].'"></div>
                            </div>';
    		}
		echo json_encode(array('success'=>true,'moreState'=>$moreState,'html' => $html));
    }

    public function detail($id) {
    	$data['title'] = 'News';
		$data['module'] = 'news';
		$data['view_file'] = 'detail';
		$data["news_detail"] = $this->news_model->get_single_news($id);
		$data["gainers"] = $this->news_model->get_all('tbl_nepse_api_data',array('daily_stock_stats_percentage_change_in_price'=>'desc'),5);
		$data["losers"] = $this->news_model->get_all('tbl_nepse_api_data',array('daily_stock_stats_percentage_change_in_price'=>'asc'),5);
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
    }

}
