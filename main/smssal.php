<?php
include('header.php');
// Be sure to include the file you've just downloaded
require_once('AfricasTalkingGateway.php');
$smssettings=mysql_fetch_array(mysql_query("SELECT username , senderid,api from smssettings ; "));
$id=$_REQUEST['payrollid'];
$period=$_REQUEST['period'];
// Specify your login credentials
$username   = $smssettings['username'];
$apikey     = $smssettings['api'];
// NOTE: If connecting to the sandbox, please use your sandbox login credentials
// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
//$recipients = "+254722856900,+254728944815,+254724661481,+254716671496";
$q=mysql_query("SELECT pt.sname as name, s.staff_telno as tel , pt.daterun as payrolldate, s.id as staffid  FROM payroll_tbl  pt inner join staff s on s.id=pt.staffid where pt.payrollrun='$period' and pt.id='$id' and pt.status='1'  ");
while($query=mysql_fetch_array($q)){
$phone=$query['tel'];
$name=$query['name'];
$staffid=$query['staffid'];
$recipients=$phone;
// And of course we want our recipients to know what we really do
$message    ="Hello ".$name." Payroll for the month ".$period." has been run.Barletta Limited Thanks you for your service!.";
$user=$_SESSION['user'];
mysql_query("INSERT iNTO  messages(staffid,msg,tel,sender)values('$staffid','$message','$phone','$user')");
$from = $smssettings['senderid'];
// Create a new instance of our awesome gateway class
$gateway    = new AfricasTalkingGateway($username, $apikey);
// NOTE: If connecting to the sandbox, please add the sandbox flag to the constructor:
/*************************************************************************************
             ****SANDBOX****
$gateway    = new AfricasTalkingGateway($username, $apiKey, "sandbox");
**************************************************************************************/
// Any gateway error will be captured by our custom Exception class below, 
// so wrap the call in a try-catch block
try 
{ 
  // Thats it, hit send and we'll take care of the rest. 
  $results = $gateway->sendMessage($recipients, $message,$from);
            
  foreach($results as $result) {
    // status is either "Success" or "error message"
    echo " Number: " .$result->number;
    echo " Status: " .$result->status;
    echo " MessageId: " .$result->messageId;
    echo " Cost: "   .$result->cost."\n";
  }
}
catch ( AfricasTalkingGatewayException $e )
{
  echo "Encountered an error while sending: ".$e->getMessage();
}
}
  echo "<script>alert('SMS Sent!')</script>";
 echo "<script>location.replace('remmitance.php?period=$period')</script>";
// DONE!!! 
?>