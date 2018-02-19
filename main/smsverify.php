<?php
include('header.php');
$id=$_REQUEST['id'];
$db=$_POST['db'];
if ($db=="1") {
	echo "<script>location.replace('sendsmsclass.php?id=$id')</script>";
}elseif ($db=="0") {
	echo "<script>location.replace('sendsmstestclass.php?id=$id')</script>";
}

?>