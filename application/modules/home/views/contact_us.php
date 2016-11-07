<style>
    #map_canvas {
        position: relative;
        padding: 2px;
        height: 400px;
        color:#309;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header">
                <span>Contact Us</span>
            </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-5">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <b class="secondary3">
                        Address:
                    </b>
                    <address>
                        <?=$contact_details['address']?><br />
                        <abbr title="Telephone">Tel:</abbr> <?=$contact_details['phone']?><br />
                        <abbr title="Fax">Fax:</abbr> <?=$contact_details['fax']?><br />
                        <abbr title="E-mail address">E-mail:</abbr> <?=$contact_details['email']?>
                    </address>
                    <b class="secondary3">
                        Office Hours:
                    </b>
                    <address>
                        <abbr title="Weekdays">Weekdays:</abbr> <?=$contact_details['weekday_start_time']?> a.m - <?=$contact_details['weekday_end_time']?> p.m<br/>
                        <abbr title="Weekend">Weekend:</abbr> <?=$contact_details['weekend_start_time']?> a.m - <?=$contact_details['weekend_end_time']?> p.m
                    </address>
                    <div class="map_canvas" id="map_canvas">
                        <!--Map Here-->
                    </div><br>
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="panel panel-default">
                <form method="post" id="contact_form" action="<?=getHomeUrl().'contact_us'?>">
                    <div id="divContactUsForm" class="panel-body">

                        <?php if(!$this->helper_model->validate_user_session()): ?>
                        <div class="form-group">
                            <label>Full Name *</label>
                            <input name="name" type='text' class="form-control" placeholder="Enter your full name" value="<?=set_value('name')?>">
                            <?=form_error('name')?>
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input name="email" type='email' class="form-control" placeholder="Enter your email" value="<?=set_value('email')?>">
                            <?=form_error('email')?>
                        </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label>Subject *</label>
                            <input name="subject" type='text' class="form-control" placeholder="Enter your subject" value="<?=set_value('subject')?>">
                            <?=form_error('subject')?>
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea class="form-control" rows="10" name="message" placeholder="Enter your questions or message here..." ><?=set_value('message');?></textarea>
                            <?=form_error('message')?>
                        </div>
                        <?php if(!$this->helper_model->validate_user_session()): ?>
                        <div class="form-group">
                            <label>Captcha</label><br>
                            <img id="image_captcha" src="<?=base_url().'captcha/'.$captcha['filename']?>" alt="captcha here">

                            <label>Can't read the letters shown? Click <a id="captcha_refresh" href="javascript:void(0)">here</a> to refresh</label>
                            <input name="captcha" type='text' size="20" class="form-control" placeholder="Enter characters seen above" value="">
                            <?=form_error('captcha').'<br>'?>
                        </div>
                        <?php endif; ?>
                        <input type="submit" name="Submit" class="btn btn-primary">
                        <input type="reset" title="Reset"  class="btn btn-default">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).on('click', '#captcha_refresh', function(){
        $.ajax({
            url: "<?=getHomeUrl().'home/refresh_captcha'; ?>",
            dataType: 'json',
            beforeSend: function(){
                $("#image_captcha").attr("src", "<?php echo base_url('assets/ajax/images/ajax-loader_round.gif');?>");
            },
            success: function (data) {
                if(data['status']) {
                    $("#image_captcha").attr("src", "<?=base_url().'captcha/'?>" + data["src"]);
                } else{
                    alert("Can't refresh captcha at the moment. Please try again later.")
                }
            },
            error: function(data) {
                alert("An unknown error occured. Please try again later");
            }
        });
    });


    function initialize() {
        var lat = <?php echo $contact_details["lat"] ?>;
        var lon = <?php echo $contact_details["lon"] ?>;
        var pos_acc = <?php if($contact_details['pos_acc']>0)echo $contact_details['pos_acc']; else echo 2000; ?>;

        var center = new google.maps.LatLng(lat, lon);

        if(pos_acc<=2000){
            var zoomlevel=15;
        }
        else if(pos_acc<50000){
            var zoomlevel=13;
        }
        else if(pos_acc>100000){
            var zoomlevel=11;
        }
        else{
            var zoomlevel=12;
        }

        var map = new google.maps.Map(document.getElementById('map_canvas'), {
          zoom: zoomlevel,
          center: center,
          mapTypeId: google.maps.MapTypeId.HYBRID
        });
    
      
        var address = "<?php echo $contact_details['address'];?>";
        // init markers
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(lat, lon),
            map: map,
            title: "<?='JobPortal'?>"
        });

        (function(marker) {
            // add click event
            var name = "<?='JobPortal'?>";
            var phone = "<?=$contact_details['phone']?>";
            var fax = "<?php echo $contact_details['fax']?>";
            var email = "<?=$contact_details['email']?>";
            
            infowindow = new google.maps.InfoWindow({
                content: '<img src="<?=base_url().LOGO_DIR.$this->config->item('logo')?>"/><br>' + address + "<br>" + "Phone: " 
                + phone + " Fax: " + fax 
                + "<br>Email: " + email
            });
            infowindow.open(map, marker);
            var status = 1;
            google.maps.event.addListener(marker, 'click', function() {
                if(status==1){
                    infowindow.close(map, marker);
                    status = 0;
                } else {
                    infowindow.open(map, marker);
                    status = 1;
                }
            });
        })(marker);
        //i++;
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>