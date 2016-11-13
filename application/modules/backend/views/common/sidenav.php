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
                <a href="<?php echo base_url().'backend';?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-cog"></i> <span>Settings</span>
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
                        <a href="<?=base_url().'backend/settings/email_templates';?>"><i class="fa fa-pencil"></i> Email Templates</a>  
                    </li>
                    <li>
                        <a href="<?=base_url().'backend/error_log';?>"><i class="fa fa-edit fa-fw"></i>Recent Error Log</a>
                    <li>
                </ul>
            </li>
            <li>
                <a href="<?=base_url().'backend/messages';?>">
                    <i class="fa fa-envelope fa-fw"></i>
                    <span>Message</span>
                    <?php 
                        $new_msg = $this->helper_model->count_admin_new_messages();
                        if($new_msg>0):
                    ?> 
                    <small class="label pull-right bg-green"><?=$new_msg?> new</small>
                    <?php 
                        endif;
                    ?>
                </a>
            </li>
            <li>
                <a href="<?=base_url().'backend/settings/contact_details';?>">
                    <i class="fa fa-map-marker"></i> <span>Contact</span>
                </a>
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
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-file"></i> <span> News</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li>
                        <a href="<?=base_url().'backend/news';?>">
                            <i class="fa fa-table fa-fw"></i><span> View News</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url().'backend/news/add';?>"><i class="fa fa-plus"></i><span> Add New News</span></a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-briefcase"></i> <span> Company Type</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li>
                        <a href="<?=base_url().'backend/company_type';?>">
                            <i class="fa fa-table fa-fw"></i><span> View Company Type</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url().'backend/company_type/add';?>"><i class="fa fa-plus"></i><span> Add New Company Type</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?=base_url().'backend/user';?>">
                    <i class="glyphicon glyphicon-user"></i> <span>User Management</span>
                </a>
            </li>
            <li>
                <a href="<?=base_url().'backend/company';?>">
                    <i class="glyphicon glyphicon-user"></i> <span>Company Management</span>
                </a>
            </li>
        </ul>
    </section>
</aside>