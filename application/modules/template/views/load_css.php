<!-- <link rel='stylesheet' type='text/css' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'> -->
<link rel='stylesheet' type='text/css' href="<?=base_url().'assets/admin/css/bootstrap.min.css'?>">

<?php
	if(isset($stylesheets)) {
		foreach ($stylesheets as $stylesheet) {
			echo "<link rel='stylesheet' type='text/css' href='".$stylesheet."'>";
		}
	}
?>