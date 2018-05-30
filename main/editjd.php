<?php
include('header.php'); 
$id=$_REQUEST['id'];
$sname=$_POST['sname'];
$dept=$_POST['dept'];
mysql_query("UPDATE stafftype set type_name='$sname',deptid='$dept' where id='$id'");
echo "<script>alert('Job Description Updated!!')</script>";
echo "<script>location.replace('addstafftype.php')</script>";

?>