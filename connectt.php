<?php
	$con = mysqli_connect("us-cdbr-east-05.cleardb.net","bc49f1ed20ea78","73cc4abb");
	date_default_timezone_set ("Asia/Colombo");
	mysqli_select_db($con,"heroku_d87e205df202950");
	if(!$con){
			die("Failed to connect");
			}

?>
<?php
define ("HOSTNAME","us-cdbr-east-05.cleardb.net");
define ("USERNAME","bc49f1ed20ea78");
define ("PASSWORD","73cc4abb");
define ("DATABASE","heroku_d87e205df202950");

$dbhandle=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("unable to connect to database");

if($dbhandle->connect_error){
	die("connect Failed".$dbhandle->connect_error);
}
?>