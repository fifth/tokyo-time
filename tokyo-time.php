<?php
	$timezone=$_GET['timezone'];
	date_default_timezone_set($timezone);
	print_r(json_encode(getdate()));
?>	