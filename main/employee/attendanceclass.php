<?php
include('header.php');
if ($_GET['action']=="requestovertime") {
$empid=$_SESSION['user'];
$datefrom=$_POST['datefrom'];
$dateto=$_POST['dateto'];
$timefrom=$_POST['timefrom'];
$timeto=$_POST['timeto'];
$period=date('Y-m');
$hrdiff=round((strtotime($timeto) - strtotime($timefrom))/3600, 1);
//CALCULATE OVERTIME RATE
if ($hrdiff>1.4) {
	$rate=300;
	$newhr=round($hrdiff,0);
	//first hr is 200
	$hr2=$newhr-1;
	$tot1=$hr2*$rate;
	//add rate for first hr
	$tot=$tot1+200;
}elseif ($hrdiff<=1.4) {
	$rate=200;
	$newhr=round($hrdiff,0);
	$tot=$newhr*$rate;
}

mysql_query("INSERT empvsovertime(empid,datefrom,dateto,timefrom,timeto,period,hrs,rate,totalamount)VALUES('$empid','$datefrom','$dateto','$timefrom','$timeto','$period','$hrdiff','$rate','$tot') ");
echo "<script>location.replace('overtime.php?period=all')</script>";
}
?>