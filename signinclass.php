<?php
if ($_GET['role']=="admin") {
	$email=$_POST['email'];
	$token=md5($_POST['password']);
		echo "<script>location.replace('main/signin.php?action=signin&&email=$email&&token=$token')</script>";
	
}elseif ($_GET['role']=="employee") {
	$email=$_POST['email'];
	$token=$_POST['password'];
		echo "<script>location.replace('main/employeesignin.php?action=signin&&email=$email&&token=$token')</script>";

	
}

?>