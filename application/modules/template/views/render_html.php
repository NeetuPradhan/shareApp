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
	    <?php echo Modules::run('template/load_css'); ?>

	    <script type="text/javascript">
            var baseUrl = "<?php echo base_url();?>";
        </script>

    </head>
    <body>
    	<?php echo Modules::run('template/topnav'); ?>
    	<?php echo Modules::run('template/alert'); ?>
    	<?php echo Modules::run('template/load_js'); ?>
    	<?php $this->load->view($module.'/'.$view_file) ?>
    	<?php echo Modules::run('template/footer'); ?>
    </body>
</html>
