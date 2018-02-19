<?php
include('header.php');
if ($_POST) {
	# code...
	$usr=$_SESSION['user'];
	$touser=sanitizeString($_POST['touser']);
	$msg=sanitizeString($_POST['msg']);
	$sub=sanitizeString($_POST['sub']);
	mysql_query("INSERT INTO messages(uname,touser,msgsub,msg,status)VALUES('$usr','$touser','$sub','$msg','0')");
	echo "<script>location.replace('mailbox.php')</script>";
}

?>