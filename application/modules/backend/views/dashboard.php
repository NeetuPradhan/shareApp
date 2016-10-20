<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href="<?=base_url();?>assets/backend/css/style.css" rel="stylesheet">

<!-- Default box -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?//=$title?></h3>
    </div>

    <div class="box-body">
        <div id="pcont" class="container-fluid">
            <div class="stats_bar">
                <div class="butpro butstyle">
                    <div class="sub"><h2>Site Settings</h2></div>
                    <div class="stat"><a href="<?=base_url().'backend/settings';?>"><img src="<?=base_url()?>images/site_setting.png"></a> </div>
                </div>

                <div class="butpro butstyle">
                    <div class="sub"><h2>Email Setting</h2></div>
                    <div class="stat"><a href="<?=base_url().'backend/settings/email_settings';?>"><img src="<?=base_url()?>images/email_settings2.png"></a> </div>
                </div>

                <div class="butpro butstyle">
                    <div class="sub"><h2>Contact Info</h2></div>
                    <div class="stat"><a href="<?=base_url().'backend/contact';?>"><img src="<?=base_url()?>images/search_index.png"></a> </div>
                </div>

                <div class="butpro butstyle">
                    <div class="sub"><h2>Change password</h2></div>
                    <div class="stat"><a href="<?=base_url().'backend/settings/change_password';?>"><img src="<?=base_url()?>images/change_password.png"></a> </div>
                </div>

                <div class="butpro butstyle">
                    <div class="sub"><h2>Content Mgmt.</h2></div>
                    <div class="stat"><a href="<?=base_url().'backend/cms';?>"><img src="<?=base_url()?>images/cms.png"></a> </div>
                </div>

                <div class="butpro butstyle">
                    <div class="sub"><h2>Messages</h2></div>
                    <div class="stat"><a href="<?=base_url().'backend/message';?>"><img src="<?=base_url()?>images/email_settings2.png"></a> </div>
                </div>

                <div class="butpro butstyle">
                    <div class="sub"><h2>Banner Images</h2></div>
                    <div class="stat"><a href="<?=base_url().'backend/banner';?>"><img src="<?=base_url()?>images/photo_gallery.png"></a> </div>
                </div>     
            </div>
        </div>
    </div>
</div>