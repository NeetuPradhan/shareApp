<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcement extends MX_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	$this->form_validation->CI =& $this;
	  	$this->load->library('form_validation');
	  	$this->load->model('announcement_model');
	  	
	}

    public function index() {
    	$data['title'] = 'Announcements';
		$data['module'] = 'announcement';
		$data['view_file'] = 'list';
		$data["announcement"] = $this->announcement_model->get_announcement(HOME_PAGE_LIMIT);
		$data["announcement_total"] = $this->announcement_model->totalRecordAnnouncement();
		$data['scripts'] = array();
		$data['stylesheets'] = array(
							base_url().'/assets/front/bundles/css/main2007a90.css?v=sf09e7N2cOLRz3r2uJRde6mfJkm8AsWpErV9UgDduKs1', 
							base_url().'/assets/front/bundles/css/site20563a4.css?v=fjdWJPKvJckvR_S-NOATm8ROWjfIPYAWnHimvspxu4s1',
						);
		echo Modules::run('Template/render_html', $data);
    }
  
    public function more_list() {
    	$announcement_id = $_POST['json_announcement_id'];
    	$getMoreCount = $_POST['more_count'];
    	$announcement_list = $this->announcement_model->get_remaining_announcement($announcement_id);
    	$more_count = HOME_PAGE_LIMIT +$getMoreCount;
    	$moreState['moreMsg'] = '';
		// $getLimitMore = $this->announcement_model->get_limit_more($more_count,HOME_PAGE_LIMIT);
		if(empty($announcement_list)) {
			$moreState['moreMsg'] = 'yes';
		} else {
			$moreState['moreMsg'] = 'no';
		}
		$moreState['more_btn'] = $more_count;

		$html='';
		$elementArr = array();
            foreach ($announcement_list as $element) {
                $elementArr['added_date'] = formatDateTime($element['added_date'],'M d,Y');
                $elementArr['title'] = $element['title'];
                $elementArr['id'] = $element['id'];

        		$html.= '<div class="media">
        			<div class="pull-left text-center">
	            		<small style="width: 120px;" class="text-muted">'.formatDateTime($elementArr["added_date"],"M d,Y").'</small>
	            		<br>
			            <a href="/AnnouncementDetail.aspx?id=24334&amp;ntf=true">
			                <span class="icon-stack icon-1x">
			                    <i class="icon-stack-base icon-circle icon-1x text-primary"></i>
			                    <i class="icon-file icon-1x icon-light"></i>
			                </span>
			            </a>
        			</div>
        			<div class="announcement_id" data-id="'.$elementArr['id'].'"></div>
			        <div class="media-body">
			            <a href="/AnnouncementDetail.aspx?id=24334">
			                '.$elementArr["title"].'
			            </a>
			        </div>
    			</div>';
    		}
		
		echo json_encode(array('success'=>true,'moreState'=>$moreState,'html' => $html));
		
    }

}
