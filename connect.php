<?php
	$con = mysqli_connect("us-cdbr-east-05.cleardb.net","bc49f1ed20ea78","73cc4abb");
	date_default_timezone_set ("Asia/Colombo");
	mysqli_select_db($con,"heroku_d87e205df202950");
	if(!$con){
			die("Failed to connect");
			}

?>
