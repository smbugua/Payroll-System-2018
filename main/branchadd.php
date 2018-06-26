<?php
include('header.php');

if ($_POST) {

$bankcode= mysql_escape_string($_POST['bank']);
$branch=mysql_escape_string($_POST['branch']);
$code=mysql_escape_string($_POST['branchcode']);

mysql_query("INSERT INTO bankbranch(bankCode,bname,code)values('$bankcode','$branch','$code')");

echo "<script>alert('Branch added')</script>";
echo "<script>location.replace('addbranch.php')</script>";
}
?>