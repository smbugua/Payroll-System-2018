<?php
include('header.php');
if ($_POST) {

$dept=$_POST['dept'];

mysql_query("INSERT INTO dept(name)VALUES('$dept')");
echo "<script>alert('Department added successfully')</script>";
echo "<script>location.replace('adddepartment.php')</script>";

}

?>