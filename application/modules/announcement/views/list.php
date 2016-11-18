<div class="container">
    <div class="col-sm-8">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">
                    <span>Announcements</span>
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
                                <div class="announcement_id" data-id="<?php echo $value['id'];?>"></div>
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
                        <input type="hidden" value="3" class="more_count"/>
                        <hr>
                        <?php if($announcement_total>HOME_PAGE_LIMIT) { ?>
                            <div class="more-items">
                                    <a href="" class="btn btn-primary btn-block" id="btn_more">Load More</a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <?php $this->load->view('home/_layouts/indices');?>
        <?php $this->load->view('home/_layouts/gainers/gainers_list');?>
        <?php $this->load->view('home/_layouts/losers/losers_list');?>
    </div>
</div>
<script>
    $(document).ready(function(e) {
        $('body').on('click','#btn_more',function(e) {
            e.preventDefault();
            var lastVal = $('.announcement_id').last().data('id'),
            more_count = $('.more_count').val(),
            jsonData = {
                'json_announcement_id': lastVal,
                'more_count': more_count
            };
            
            $.ajax({
                type: "POST",
                url: baseUrl + 'announcement/more_list',
                data: jsonData,
                dataType: 'json',
                success: function(response) {
                    if(response.success){
                        $('.media').last().append(response.html);
                        $('.more_count').val(response.moreState.more_btn);
                        if (response.moreState.moreMsg == 'yes') {
                            $('.more-items').remove();
                        }
                    }
                }
            });
        });
    });
</script>