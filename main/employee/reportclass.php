<?php
include('header.php');
$period=$_POST['period'];
$r=$_POST['report'];
if ($r=="1") {
echo "<script>location.replace('myremmitance.php?period=$period')</script>";
}elseif ($r=="2") {
echo "<script>location.replace('mynssf.php?period=$period')</script>";
}elseif ($r=="3") {
echo "<script>location.replace('mynhif.php?period=$period')</script>";
}elseif ($r=="4") {
echo "<script>location.replace('mypaye.php?period=$period')</script>";

}

?>