<?php
// SEND REQUEST CODE FOR EDITS

include('header.php');
$id=$_REQUEST['id'];
	
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twillio/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC113452ba4e043e9e6da9ad23748e2613';
$token = 'e8e3d4395fd9e5ac61e42aa8f5c3b63b';
$client = new Client($sid, $token);
	
	
	//GENERATE CODE FOR EDIT REQUESTS
	$code=rand(1000,9999);
	$date=date('Y-m-d');
	mysql_query("INSERT INTO requests(code,expiry)VALUES('$code','$date')");
	// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+254722856900',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+254856900',
        // the body of the text message you'd like to send
        'body' => "Hello Doc...Fuellog Entry Edit AUTHTOKEN: ".$code." .Gen by Wealthsmith Fleet Manager"
    )
);
	// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+254724661481',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+254856900',
        // the body of the text message you'd like to send
        'body' => "Hello Bosco...Fuellog Entry Edit AUTHTOKEN: ".$code." .Gen by Wealthsmith Fleet Manager"
    )
);
// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+254728944815',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+254856900',
        // the body of the text message you'd like to send
        'body' => "Hello Techcube...Fuellog Entry Edit AUTHTOKEN: ".$code." .Gen by Wealthsmith Fleet Manager"
    )
);
	echo "<script>location.replace('verify.php?id=$id')</script>";

?>