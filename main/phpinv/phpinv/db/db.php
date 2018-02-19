<?php 
$con = mysql_connect('localhost','root','') or die('can not connect to server');
if($con)
{
	mysql_select_db('phpinv',$con) or die('can not select database');
}
