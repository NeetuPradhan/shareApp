<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	    <title>
		    <?php 
		    	if(isset($title)) {
		    		echo $title." | ";
		    	}
		    ?>
		    <?=$this->config->item('site_name')?>
		    <?php 
		    	if(!isset($title)) {
		    		echo " | ".$this->config->item('site_slogan');
		    	}
		    ?>
	    </title>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <!-- Tell the browser to be responsive to screen width -->
	    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	    <link rel="sortcut icon" type="image/x-icon" href="<?=base_url().LOGO_DIR.$this->config->item('logo')?>">
	    <?php echo Modules::run('Template/load_css'); ?>
    </head>
    <body>
    	<?php echo Modules::run('Template/topnav'); ?>
    	<?php echo Modules::run('Template/content'); ?>
    	<?php echo Modules::run('Template/footer'); ?>
    	<?php echo Modules::run('Template/load_js'); ?>
    </body>
    </html>
