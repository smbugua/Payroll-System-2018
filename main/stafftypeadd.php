<?php
include('header.php');
if ($_POST) {
	# code...
	$wcode1=sanitizeString($_POST['stypename']);
	$dept=sanitizeString($_POST['dept']);


	
	$query="INSERT INTO stafftype(type_name,deptid)Values('$wcode1','$dept')";
	mysql_query($query);
	echo "<script>alert('Job Description $wcode1 is Added')</script>";
	echo "<script>location.replace('addstafftype.php')</script>";
}

?>