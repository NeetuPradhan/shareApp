<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script type='text/javascript' src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<?php
	if(isset($scripts)) {
		foreach ($scripts as $script) {
			echo "<script type='text/javascript' src='".$script."'></script>";
		}
	}
?>
