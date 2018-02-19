<?php
include('header.php');
if ($_GET['action']=="addsms") {
    $sms=$_POST['msg'];
    mysql_query("INSERT INTO sms(body)VALUES('$sms')");
    echo "<script>location.replace('smslist.php')</script>";
}elseif ($_GET['action']=="deletesms") {
    $id=$_REQUEST['id'];
    mysql_query("DELETE FROM sms WHERE id='$id' ");
    echo "<script>location.replace('smslist.php')</script>";
}

?>
