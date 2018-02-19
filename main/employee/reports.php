<?php
include('header.php');
$period=$_POST['period'];
$r=$_POST['report'];
if ($r=="1") {
echo "<script>location.replace('myloans.php?period=$period')</script>";
}elseif ($r=="2") {
echo "<script>location.replace('overtime.php?period=$period')</script>";
}elseif ($r=="3") {
echo "<script>location.replace('leaves.php?period=$period')</script>";
}elseif ($r=="4") {
echo "<script>location.replace('advances.php?period=$period')</script>";

}

?>