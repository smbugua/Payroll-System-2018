<?php
include('connect.php');
session_start();
if($_GET['action']=="signin"){
$email=SanitizeString($_REQUEST['email']);
$pass=SanitizeString($_REQUEST['token']);
$query="select username from users where email='$email' and password='$pass'";
$result=queryMysql($query);
$query2="select account_type AS typer from users where email='$email'";
$result1=mysql_query($query2);
$num = mysql_num_rows($result);
if (mysql_num_rows($result)!=0)
{


for ($j = 0 ; $j < $num ; ++$j)
 {
    $row = mysql_fetch_row($result);
    $user=$row[0];
 }
//saveUser($usersName);
 //session_start();
 $_SESSION['user'] = $user;
 $_SESSION['loggedIn']='TRUE';

 
     
echo <<<Home
<script type="text/javascript">
location.replace("index.php");
</script>
Home;


}
else
{
    echo "<script type='text/javascript'>alert('No such user was found')</script>";
    $_SESSION['loggedIn']=FALSE;
 echo <<<Home
<script type="text/javascript">
location.replace("../login.php");

</script>
Home;
}



}
    
?>