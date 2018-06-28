<?php
include('header.php');
$period=$_REQUEST['period'];
mysql_query("DELETE FROM payroll_tbl where payrollrun='$period'");
mysql_query("DELETE FROM payrollruns where period='$period'");
	echo "<script>alert('Payroll Reset Successful')</script>";
		echo "<script>location.replace('payroll.php')</script>";
