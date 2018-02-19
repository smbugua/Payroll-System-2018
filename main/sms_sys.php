<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
include('header.php');
require __DIR__ . '/twillio/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC113452ba4e043e9e6da9ad23748e2613';
$token = 'e8e3d4395fd9e5ac61e42aa8f5c3b63b';
$client = new Client($sid, $token);
//get values to be smsed
$fuel=mysql_fetch_array(mysql_query("SELECT * FROM fuellogs ORDER BY id DESC LIMIT 1"));
$veh=$fuel['vehicle'];
$date=$fuel['dateadded'];
$pur=$fuel['purchaser'];
$amnt=$fuel['totalprice'];
$pprice=$fuel['ppl'];
$loc=$fuel['location'];
$lit=$fuel['startfuel'];
// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+254728944815',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+13159391418',
        // the body of the text message you'd like to send
        'body' => "New Fuel Log Added for ".$veh." on ".$date." at ".$loc." amount ".$amnt." litre cost ".$pprice.".Total Litres ".$lit." recorded by ".$pur
    )
);
// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+254722856900',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+13159391418',
        // the body of the text message you'd like to send
        'body' => "New Fuel Log Added for ".$veh." on ".$date." at ".$loc." amount ".$amnt." litre cost ".$pprice.".Total Litres ".$lit." recorded by ".$pur
    )
);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+254724661481',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+13159391418',
        // the body of the text message you'd like to send
        'body' => "New Fuel Log Added for ".$veh." on ".$date." at ".$loc." amount ".$amnt." litre cost ".$pprice.".Total Litres ".$lit." recorded by ".$pur
    )
);
// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+254721888063',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+13159391418',
        // the body of the text message you'd like to send
        'body' => "New Fuel Log Added for ".$veh." on ".$date." at ".$loc." amount ".$amnt." litre cost ".$pprice.".Total Litres ".$lit." recorded by ".$pur
    )
);


echo "<script>window.location.replace('fuels.php')</script>";
?>
