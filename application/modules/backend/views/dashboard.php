<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Default box -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?=$title?></h3>
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
                    <div class="stat"><a href="<?=base_url().'backend/settings/email_settings';?>"><img src="<?=base_url()?>images/email_settings.png"></a> </div>
                </div>

                <div class="butpro butstyle">
                        <div class="sub"><h2>Mail Templates</h2></div>
                        <div class="stat"><a href="<?=base_url().'backend/settings/email_templates';?>"><img src="<?=base_url()?>images/email_settings2.png" /></a> </div>
                    </div>

                <div class="butpro butstyle">
                    <div class="sub"><h2>Contact Info</h2></div>
                    <div class="stat"><a href="<?=base_url().'backend/settings/contact_details';?>"><img src="<?=base_url()?>images/contact.png"></a> </div>
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
                    <div class="stat"><a href="<?=base_url().'backend/messages';?>"><img src="<?=base_url()?>images/message.png"></a> </div>
                </div>

                <div class="butpro butstyle">
                    <div class="sub"><h2>Banner Images</h2></div>
                    <div class="stat"><a href="<?=base_url().'backend/banner';?>"><img src="<?=base_url()?>images/photo_gallery.png"></a> </div>
                </div>
                <div class="butpro butstyle">
                    <div class="sub"><h2>News</h2></div>
                    <div class="stat"><a href="<?=base_url().'backend/news';?>"><img src="<?=base_url()?>images/news.png"></a> </div>
                </div> 
                <div class="butpro butstyle">
                    <div class="sub"><h2>Company Type</h2></div>
                    <div class="stat"><a href="<?=base_url().'backend/company_type';?>"><img src="<?=base_url()?>images/services.png"></a> </div>
                </div>
                <div class="butpro butstyle">
                    <div class="sub"><h2>User Management</h2></div>
                    <div class="stat"><a href="<?=base_url().'backend/user';?>"><img src="<?=base_url()?>images/board_member.png"></a> </div>
                </div>    
                <div class="butpro butstyle">
                    <div class="sub"><h2>Company Management</h2></div>
                    <div class="stat"><a href="<?=base_url().'backend/company';?>"><img src="<?=base_url()?>images/add.png"></a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
