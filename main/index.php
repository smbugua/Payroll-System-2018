<?php
require_once('connect.php');
session_start();
if(($_SESSION['loggedIn'])==true)
{
$user=$_SESSION['user'];
$year=date('Y');
  $query=mysql_query("select account_type as usr from users where username='$user'");
      $row = mysql_fetch_assoc($query);
    if ($row['usr']=='0') {
    echo "<script>location.replace('dash.php')</script>";
    }elseif ($row['user']!='0') {
        echo "<script>location.replace('mydash.php')</script>";
    }
   }elseif ($_SESSION['loggedIn']==false) {
   	
        echo "<script>location.replace('../index.php')</script>";
   } 

?>