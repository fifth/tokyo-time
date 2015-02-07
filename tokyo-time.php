<?php
	if ($_REQUEST['timezone']) {
		$timezone=$_REQUEST['timezone'];
	} else {
		$timezone="Asia/Tokyo";
	}
	date_default_timezone_set($timezone);
	print_r(json_encode(getdate()));
?>	
