<?php
include('header.php');

$bankcode=$_POST['bank'];
$branch=$_POST['branch'];
$code=$_POST['branchcode'];

mysql_query("INSERT INTO bankbranch(bankCode,bname,code) values($bankcode,$branch,$code)");

			echo "<script>alert('Branch added')</script>";
echo "<script>location.replace('addbranch.php')</script>";
?>