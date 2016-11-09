<div class="row" id="ctl00_ContentPlaceHolder1_divLatestAnnouncements">
    <div class="col-lg-12">
        <h4 class="page-header">
            <span>Announcements</span>
            <a class="pull-right" href="/AnnouncementList.aspx">More</a>
        </h4>
        <div class="row">
            <div class="col-lg-12">
                <div class="announcement-list">
                    <?php 
                        if(count($announcement)>0){
                            foreach ($announcement as $key => $value) {
                    ?>
                    <div class="media" id="ctl00_ContentPlaceHolder1_rptLatestAnnouncement_ctl00_LatestAnnouncement_divAnnoucement">
                        <div class="pull-left text-center">
                        <?php //echo date('l, F j',strtotime($key));?>
                            <small style="width: 120px;" class="text-muted"><?php echo formatDateTime($value['added_date'],'M d,Y');?></small>
                            <br>
                            <a href="/AnnouncementDetail.aspx?id=24334&amp;ntf=true">
                                <span class="icon-stack icon-1x">
                                    <i class="icon-stack-base icon-circle icon-1x text-primary"></i>
                                    <i class="icon-file icon-1x icon-light"></i>
                                </span>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="/AnnouncementDetail.aspx?id=24334">
                                <?php echo $value['title'];?>
                            </a>
                        </div>
                    </div>
                    <?php }
                        } else {
                            echo "No records found.";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>