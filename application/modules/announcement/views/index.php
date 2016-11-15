<div class="row" id="ctl00_ContentPlaceHolder1_divLatestAnnouncements">
    <div class="col-lg-12">
        <h4 class="page-header">
            <span>Announcements</span>
            <a class="pull-right" href="<?php echo getAnnouncementUrl()?>">More</a>
        </h4>
        <div class="row">
            <div class="col-lg-12">
                <div class="announcement-list">
                    <?php 
                        if(count($announcement)>0){
                            foreach ($announcement as $key => $value) {
                    ?>
                    <div class="media">
                        <div class="pull-left text-center">
                            <small style="width: 120px;" class="text-muted"><?php echo formatDateTime($value['added_date'],'M d,Y');?></small>
                            <br>
                            <a href="<?php echo getAnnouncementUrl().'detail/'.$value['id'];?>" target="_blank">
                                <span class="icon-stack icon-1x">
                                    <i class="icon-stack-base icon-circle icon-1x text-primary"></i>
                                    <i class="icon-file icon-1x icon-light"></i>
                                </span>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="<?php echo getAnnouncementUrl().'detail/'.$value['id'];?>" target="_blank">
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