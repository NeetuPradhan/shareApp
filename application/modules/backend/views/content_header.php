<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="content-header">
      <h1>
        <?//=$title?>
        <small><?//=$subtitle?></small>
      </h1>
      <ol class="breadcrumb">Admin
        <?php 
          if($this->uri->segment(0)==''){
            echo ' > Dashboard';
          }
        ?>
        <?php if($this->uri->segment(2)!='' && !(is_numeric($this->uri->segment(2)))) echo ' > '.humanize_admin($this->uri->segment(2));?>
        <?php if($this->uri->segment(3)!='' && !(is_numeric($this->uri->segment(3)))) echo ' > '.humanize_admin($this->uri->segment(3));?>
        <?php if($this->uri->segment(4)!='' && !(is_numeric($this->uri->segment(4)))) echo ' > '.humanize_admin($this->uri->segment(4));?>
        <?php if($this->uri->segment(5)!='' && !(is_numeric($this->uri->segment(5)))) echo ' > '.humanize_admin($this->uri->segment(5));?>
        <div style="padding:3px 20px; float:right; width:80px;  color:#ABABAB; line-height:18px;">
          <a href="javascript:history.go(-1)" style="text-decoration:none;">
            <img width="18" height="18" align="right" src="<?=base_url()?>images/back.gif" alt="back" style="padding:0; margin:0; width:18px; height:18px;">
          </a>
        </div>
      </ol>
    </section>