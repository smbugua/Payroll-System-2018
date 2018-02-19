<?php
include('header.php');
$str="0";
$result=mysql_query("SELECT bankcode,id from staff where bankcode='01'");
while ($row=mysql_fetch_array($result)) {
	$bcode=$row['bankcode'];
	$newcode=$str.$bcode;
	$id=$row['id'];
	// "<script>alert('$newcode')</script>";
	mysql_query("UPDATE staff SET bankcode='$newcode' WHERE id='$id'");
}

?>