<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin | <?=$this->config->item('site_name')?></title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!--<link rel="sortcut icon" type="image/x-icon" href="<?//=base_url().'uploads/admin/images/logo/'.$this->config->item('fav_icon')?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url().'assets/admin/template/'?>bootstrap/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url().'assets/admin/template/'?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url().'assets/admin/css/'?>style.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url().'assets/admin/template/'?>dist/css/skins/skin-blue.min.css">
  <!--Alertify CSS-->
  <link rel="stylesheet" href="<?=base_url()?>assets/common/css/alertifyjs/css/alertify.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/common/css/alertifyjs/css/themes/default.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?=base_url().'assets/admin/css/'?>custom.css">
  <style type="text/css">
    .mini-menu{
      margin-left:0 !important;
    }
  </style>

  <!-- jQuery 2.2.0 -->
  <script src="<?=base_url().'assets/admin/template/'?>plugins/jQuery/jQuery-2.2.0.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?=base_url().'assets/admin/template/'?>bootstrap/js/bootstrap.min.js"></script>
  <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  
  <!-- AdminLTE App -->
  <script src="<?=base_url().'assets/admin/template/'?>dist/js/app.min.js"></script>

  <!-- Alertify -->
  <script src="<?=base_url();?>assets/common/js/alertify.js"></script>
  <script type="text/javascript">
     var adminURL = "<?=base_url() . 'backend/'?>";
    var baseURL = "<?=base_url()?>"
    var loading_img = baseURL+'images/ajax-loader_dark.gif';
  </script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('backend/common/topnav')?>
		<?php $this->load->view('backend/common/sidenav')?>
		<div class="content-wrapper" style="min-height: 1126px;">
			<?php $this->load->view('backend/content_header')?>
      <section class="content">
			 <?php $this->load->view($main)?>
      </section>
		</div>
		<?php $this->load->view('backend/common/footer')?>
	</div>

</body>
</html>