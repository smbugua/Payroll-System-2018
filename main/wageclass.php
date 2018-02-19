<?php
include('header.php');
if ($_GET['action']=="postwages") {
//check if run already
$sdate=$_REQUEST['sdate'];
$edate=$_REQUEST['edate'];
$result=mysql_query("SELECT id  FROM wageruns");
$no=0;
$num=mysql_num_rows($result);
$no=$num+1;
$wageid="DDWG-WAGES-X9090-".$no;
$y=date('Y');
$m=date('m');
$period=$y."/".$m;
mysql_query("INSERT INTO wageruns(wageid,period)VALUES('$wageid','$period')");
$datea=date('Y-m-d');


		for($i=0;$i<count($_POST['id']);$i++){
				$id=$_POST['id'][$i];
				$name = $_POST['name'][$i];
				$mon = $_POST['mon'][$i];
				$tue = $_POST['tue'][$i];
				$wed = $_POST['wed'][$i];
				$thur = $_POST['thur'][$i];
				$fri = $_POST['fri'][$i];
				$sat = $_POST['sat'][$i];
				$sun = $_POST['sun'][$i];
				$tot = $_POST['tot'][$i];
				$nhif = $_POST['nhif'][$i];
				$nssf = $_POST['nssf'][$i];
mysql_query("INSERT INTO wages(wageid,name,idno,mon,tue,wed,thur,fri,sat,sun,nhif,nssf,tot,startdate,enddate,dateadded)       values('$wageid','$name','$id','$mon','$tue','$wed','$thur','$fri','$sat','$sun','$nhif','$nssf','$tot','$sdate','$edate','$datea')");}
			echo "<script>alert('Success Wages Posted')</script>";
				echo "<script>location.replace('wagesposted.php?wageid=$wageid&&sdate=$sdate&&edate=$edate')</script>";
}
?>