<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url()?>" target="_blank" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img height="50" width="50" title="Click to open the site home page in a new tab." src="<?=base_url().LOGO_DIR.$this->config->item('logo')?>" alt="<?=$this->config->item('site_name')." - logo"?>"></span>
        <!-- logo for regular state and mobile devices -->
        <span title="Click to open the site home page in a new tab." class="logo-lg"><?=$this->config->item('site_name')?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                            <?php 
                                $new_msg = $this->helper_model->count_admin_new_messages();
                                if($new_msg>0){
                            ?>
                                <span class="label label-success">
                                    <?php echo $new_msg; ?>
                                </span>
                                <?php 
                                    }
                                ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have
                            <?php 
                                if($new_msg>0)
                                    echo $new_msg;
                                else
                                    echo 'no';
                            ?> new message
                            <?php 
                                if($new_msg>1)
                                     echo 's';
                            ?>
                        </li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <?php
                                    $messages = $this->helper_model->get_messages(10);
                                    foreach ($messages as $message) {
                                ?>
                                <li><!-- start message -->
                                    <a title="<?=$message['message']?>" href="<?= base_url().'backend/messages/details/'.$message['id']?>">
                                        <h4 class="mini-menu">
                                            <?=$message['name']?>
                                            <small><i class="fa fa-clock-o"></i> <?php echo calculate_age_with_unit($message['received_date_time'])?></small>
                                        </h4>
                                        <p class="mini-menu"><?=$message['message']?></p>
                                    </a>
                                </li>
                                <?php 
                                    }
                                ?>
                            </ul>
                        </li>
                        <li class="footer"><a href="<?=ADMIN_PATH.'message'?>">See All Messages</a></li>
                    </ul>
                </li>
                  <!-- Notifications: style can be found in dropdown.less -->
                  <?php if(false) { ?>
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <?php 
                            $new_enquiries = $this->helper_model->count_new_enquiries();
                            if($new_enquiries>0) {
                        ?>
                        <span class="label label-warning">
                            <?=$new_enquiries?>
                        </span>
                        <?php 
                            }
                        ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have
                            <?php 
                                if($new_enquiries>0)
                                  echo $new_enquiries;
                                else
                                  echo " no ";
                            ?> new product 
                            <?php 
                                if($new_enquiries>1)
                                  echo 'enquiries';
                                else 
                                  echo 'enquiry';
                            ?>
                        </li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <?php 
                                    $enquiries = $this->helper_model->get_enquiries(10);
                                    foreach ($enquiries as $enquiry) {
                                ?>
                                <li>
                                    <a title="<?=$enquiry['name'] . " enquired for " . $enquiry['product_name']?>" href="<?=ADMIN_PATH.'product_enquiry/details/'.$enquiry['id']?>">
                                      <i class="fa fa-shopping-cart text-yellow"></i> <?="<b>" . $enquiry['name'] . "</b> enquired for <b>" . $enquiry['product_name'] . "</b>"?>
                                    </a>
                                </li>
                                  <?php 
                                    }
                                  ?>
                            </ul>
                        </li>
                        <li class="footer"><a href="<?=ADMIN_PATH.'product_enquiry'?>">View all</a></li>
                    </ul>
                </li>
                <?php } ?>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?=base_url().LOGO_DIR.$this->config->item('logo')?>" class="user-image" alt="<?=$this->config->item('site_name')?> - logo">
                        <span class="hidden-xs"><?=$this->config->item('site_name')?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?=base_url().LOGO_DIR.$this->config->item('logo')?>" class="img-circle" alt="<?=$this->config->item('site_name')?> - logo">
                            <p>
                              <?=$this->config->item('site_name')?> - Admin
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="<?=base_url().'backend/admin/logout'?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>