<?php
if ($_GET['action']=="overtime") {
	$period=$_POST['period'];
	echo "<script>location.replace('overtime.php?period=$period')</script>";
}

?>