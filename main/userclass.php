<?php
include('connect.php');
if ($_GET['action']=="adduser") {
    if ($_POST) {
    # code...
    $username=sanitizeString($_POST['username']);
    $fname=sanitizeString($_POST['fname']);
    $email=sanitizeString($_POST['email']);
    $password=md5(sanitizeString($_POST['password']));
    $utype=sanitizeString($_POST['utype']);

    $query="INSERT INTO users (username,fullname,email,password,account_type)VALUES('$username','$fname','$email','$password','$utype');";
    mysql_query($query);
    if (mysql_error()) {
        # code...
        echo "<script>alert('Error adding account')</script>";
        echo "<script>location.replace('adduser.php')</script>";
    }
    echo "<script>location.replace('users.php')</script>";
}
}

//DELETE Users
if ($_GET['action']=="deleteuser") {
    $id=$_REQUEST['id'];
    mysql_query("DELETE FROM users WHERE id='$id'");
    echo "<script>location.replace('users.php')</script>";
}

?>