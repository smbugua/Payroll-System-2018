<?php
include('header.php');
$period=$_POST['period'];
$r=$_POST['report'];
if ($r=="1") {
echo "<script>location.replace('remmitance.php?period=$period')</script>";
}elseif ($r=="2") {
echo "<script>location.replace('nssf.php?period=$period')</script>";
}elseif ($r=="3") {
echo "<script>location.replace('nhif.php?period=$period')</script>";
}elseif ($r=="4") {
echo "<script>location.replace('paye.php?period=$period')</script>";
}

?>