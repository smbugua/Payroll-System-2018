<?php
include('connect.php');
if ($_GET['action']=="requestovertime") {
$empid=$_SESSION['user'];
$datefrom=$_POST['datefrom'];
$dateto=$_POST['dateto'];
$timefrom=$_POST['timefrom'];
$timeto=$_POST['timeto'];
$period=date('Y-m');
mysql_query("INSERT empvsovertime(empid,datefrom,dateto,timefrom,timeto,period)VALUES('$empid','$datefrom','$dateto','$timefrom','$timeto','$period') ");
echo "<script>location.replace('overtime.php?period=all')</script>";
}elseif ($_GET['action']=="approveovertime") {
$id=$_REQUEST['id'];
mysql_query("UPDATE empvsovertime SET status='1' WHERE id='$id'");
echo "<script>location.replace('approvedovertime.php?period=all')</script>";
}elseif ($_GET['action']=="voidovertime") {
$id=$_REQUEST['id'];
mysql_query("UPDATE empvsovertime SET status='2' WHERE id='$id'");
echo "<script>location.replace('rejectedovertime.php?period=all')</script>";
}elseif ($_GET['action']=="addleave") {
$sid=$_POST['sid'];
$lid=$_POST['leave'];
$datefrom=$_POST['datefrom'];
$dateto=$_POST['dateto'];
$period=date('Y-m');
$hrdiff=round((strtotime($dateto) - strtotime($datefrom))/86400, 0);

}
?>