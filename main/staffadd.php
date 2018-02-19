<?php
include('header.php');
if ($_POST) {
	# code...
		$std1=sanitizeString($_POST['sname']);
		$bcode1=sanitizeString($_POST['sidno']);
		$sch1=sanitizeString($_POST['semail']);
		$pname1=sanitizeString($_POST['stel']);
		$pid1=sanitizeString($_POST['sstatus']);
		$amnt1=sanitizeString($_POST['stype']);
		$datea1=sanitizeString($_POST['datea']);
		$nssfno=sanitizeString($_POST['nssf']);
		$nhifno=sanitizeString($_POST['nhif']);
		$pinno=sanitizeString($_POST['pinno']);
		$pno="PO-BARLETTAH-".$bcode1;
		$query="INSERT INTO staff(staff_name,national_id,staff_email,staff_telno,status,staff_type,dateadded,nhifno,nssfno,pinno,payrollno)VALUES
		('$std1','$bcode1','$sch1','$pname1','$pid1','$amnt1','$datea1','$nhifno','$nssfno','$pinno','$pno')";
		mysql_query($query);
		echo "<script>location.replace('staffdetails.php')</script>";
}
?>