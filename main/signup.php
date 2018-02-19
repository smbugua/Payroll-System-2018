<?php
include('connect.php');
if ($_POST) {
	# code...
	$username=sanitizeString($_POST['username']);
	$fname=sanitizeString($_POST['fname']);
	$email=sanitizeString($_POST['email']);
	$password=md5(sanitizeString($_POST['password']));

	$query="INSERT INTO users (username,fullname,email,password)VALUES('$username','$fname','$email','$password');";
	mysql_query($query);
	if (mysql_error()) {
		# code...
		echo "<script>alert('Error signing up')</script>";
		echo "<script>location.replace('register.php')</script>";
	}
	echo "<script>location.replace('login.php')</script>";
}
?>