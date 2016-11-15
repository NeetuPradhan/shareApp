<div class="container">
    <div class="col-sm-8">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">
                    <span><?php echo $title;?></span>
                </h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="news-list">
                            <?php 
                                if(count($news)>0){
                                    foreach ($news as $key => $value) {
                            ?>
                            <div class="media">
                                <div class="media-wrap media-left">
                                    <a href="<?php echo getNewsUrl().'detail/'.$value['id'];?>" target="_blank">
                                        <img class="lazy" data-original="Uploads/Repository\636137833453565653.png" alt="<?php echo $value['title'];?>" src="<?php echo base_url().'images/no-image.jpg';?>" style="height:100px;width:100px">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-title">
                                        <a href="<?php echo getNewsUrl().'detail/'.$value['id'];?>" target="_blank"><?php echo $value['title'];?></a>
                                    </h4>
                                    <span class="media-label"><?php echo formatDateTime($value['added_date'],'M d,Y');?></span>
                                </div>
                                <div class="news_id" data-id="<?php echo $value['id'];?>"></div>
                            </div>
                            <?php }
                                } else {
                                    echo "No records found.";
                                }
                            ?>
                        </div>
                        <input type="hidden" value="3" class="more_count"/>
                        <hr>
                        <?php if($news_total>HOME_PAGE_LIMIT) { ?>
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
        <?php $this->load->view('home/_layouts/gainers');?>
        <?php $this->load->view('home/_layouts/losers');?>
    </div>
</div>
<script>
    $(document).ready(function(e) {
        $('body').on('click','#btn_more',function(e) {
            e.preventDefault();
            var lastVal = $('.news_id').last().data('id'),
            more_count = $('.more_count').val(),
            jsonData = {
                'json_news_id': lastVal,
                'more_count': more_count
            };
            
            $.ajax({
                type: "POST",
                url: baseUrl + 'news/more_list',
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