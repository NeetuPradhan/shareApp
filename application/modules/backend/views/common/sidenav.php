<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?=ADMIN_PATH?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Settings</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li>
                        <a href="<?=base_url().'backend/settings/site_settings';?>"><i class="fa fa-gears"></i> Site Settings</a>
                    </li>
            <li>
                        <a href="<?=base_url().'backend/settings/email_settings';?>"><i class="glyphicon glyphicon-cog"></i> Email Settings</a>
                    </li>
                    <li>
                        <a href="<?=base_url().'backend/settings/change_password';?>"><i class="fa fa-key"></i> Change Password</a>  
                    </li>
                    <li>
                        <a href="<?=base_url().'backend/error_log';?>"><i class="fa fa-edit fa-fw"></i>Recent Error Log</a>
                    <li>
          </ul>
        </li>

        <li>
                <a href="<?=base_url().'backend/message';?>">
                    <i class="fa fa-envelope fa-fw"></i>
                    <span>Message</span> <?php 
                                              $new_msg = $this->helper_model->count_admin_new_messages();
                                              if($new_msg>0):
                                          ?>
                          <small class="label pull-right bg-green"><?=$new_msg?> new</small>
                          <?php 
                            endif;
                          ?>
                </a>
            </li>

            <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i> <span>Country / Destination</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li>
                <a href="<?=base_url().'backend/country';?>">
                    <i class="fa fa-table fa-fw"></i><span> View Countries / Destinations</span>
                </a>
                <li>
                <a href="<?=base_url().'backend/country/add';?>"><i class="fa fa-plus"></i><span> Add New Country / Destination</span></a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i> <span>Place</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li>
                <a href="<?=base_url().'backend/place';?>">
                    <i class="fa fa-table fa-fw"></i><span> View Places</span>
                </a>
                <li>
                <a href="<?=base_url().'backend/place/add';?>"><i class="fa fa-plus"></i><span> Add New Place</span></a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i> <span>Activity</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li>
                <a href="<?=base_url().'backend/activity';?>">
                    <i class="fa fa-table fa-fw"></i><span> View Activities</span>
                </a>
                <li>
                <a href="<?=base_url().'backend/activity/add';?>"><i class="fa fa-plus"></i><span> Add New Activity</span></a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i> <span>Activity Place</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li>
                <a href="<?=base_url().'backend/activity_place';?>">
                    <i class="fa fa-table fa-fw"></i><span> View Activity Places</span>
                </a>
                <li>
                <a href="<?=base_url().'backend/activity_place/add';?>"><i class="fa fa-plus"></i><span> Add New Place for Activity</span></a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-map-marker" aria-hidden="true"></i> <span>Contact</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li>
                <a href="<?=base_url().'backend/contact';?>">
                    <i class="fa fa-table fa-fw"></i><span> View Contact Addresses</span>
                </a>
                <li>
                <a href="<?=base_url().'backend/contact/add';?>"><i class="fa fa-plus"></i><span> Add New Contact Address</span></a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-comments" aria-hidden="true"></i> <span> Testimonial</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li>
                <a href="<?=base_url().'backend/testimonial';?>">
                    <i class="fa fa-table fa-fw"></i><span> View Testimonials</span>
                </a>
            </li>
            <li>
                <a href="<?=base_url().'backend/testimonial/add';?>"><i class="fa fa-plus"></i><span> Add New Testimonial</span></a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i> <span> Manage Page Contents</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li>
                <a href="<?=base_url().'backend/cms';?>">
                    <i class="fa fa-table fa-fw"></i><span> View Pages</span>
                </a>
            </li>
            <li>
                <a href="<?=base_url().'backend/cms/add';?>"><i class="fa fa-plus"></i><span> Add New Page</span></a>
            </li>
            <li>
                <a href="<?=base_url().'backend/about';?>">
                    <i class="fa fa-edit fa-fw"></i><span> Edit About Page</span>
                </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-photo"></i> <span> Banner</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li>
                <a href="<?=base_url().'backend/banner';?>">
                    <i class="fa fa-table fa-fw"></i><span> View Banner Images</span>
                </a>
            </li>
            <li>
                <a href="<?=base_url().'backend/banner/add';?>"><i class="fa fa-plus"></i><span> Add New Banner</span></a>
            </li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>