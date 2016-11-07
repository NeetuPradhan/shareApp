<script type='text/javascript' src="<?php echo base_url().'assets/front/scripts/jquery/jquery-1.11.0.min.js'?>"></script>
<script type='text/javascript' src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<?php
	if(isset($scripts)) {
		foreach ($scripts as $script) {
			echo "<script type='text/javascript' src='".$script."'></script>";
		}
	}
?>
