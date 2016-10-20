<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="alert_parent">
<?php
	if ($this->session->flashdata('flash_msg')) {
	    if ($this->session->userdata('flash_msg_type')) {
	        $flash_class = $this->session->userdata('flash_msg_type');
	        $this->session->unset_userdata('flash_msg_type');
	    } else {
	        $flash_class = "info";
	    }
	    if($flash_class=='danger') {
	    	$mark = 'ban';
	    } elseif($flash_class=='success') {
	    	$mark = 'check';
	    } else {
	    	$mark = 'info';
	    }
?>
<div class="alert alert-<?=$flash_class?> alert-dismissible">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <h4><i class="icon fa fa-<?=$mark?>"></i> Alert!</h4>
    <?=$this->session->flashdata('flash_msg')?>
</div>
<?php 
	}
?>
</div>