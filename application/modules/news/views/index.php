<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">
            <span>Company News</span>
            <a class="pull-right" href="<?php echo getNewsUrl()?>">More</a>
        </h4>
    </div>
</div>
<div class="row">
    <div class="row">
        <div class="col-lg-12">
            <?php 
                if(count($news)>0){
                    foreach ($news as $key => $value) {
            ?>
            <div>
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
            </div>
            <?php }
                } else {
                    echo "No records found.";
                }
            ?>
        </div>
    </div>
</div>
