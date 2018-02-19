<?php 
/*
 Simple and easy for modification, PHP script for SMS sending through HTTP / HTTPS and delivery reports. 
 You just have to type your account information on www.proovl.com and upload file on server.
 
 https://www.facebook.com/2WaySMSGateway
 https://www.twitter.com/2waysms
 
 Video Instruction:  https://www.youtube.com/watch?v=SAcQafaW7ek
 
 Istruction:
 
  Find 3 parameters in <body> and type your account information on PROOVL
 
1. $user = "*************"; // Change ********, and put your Proovl user ID
2. $token = "***************"; // Change ********, and put your Proovl authentication token
3. $from = "***************"; // Change ********, phone number under your Proovl account
 
*/
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP SMS script</title>
<meta name="description" content="PHP script for SMS sending. Send SMS with API connection.">
<style type="text/css">
body{
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
	font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
	margin:0 auto;
	width:250px;
	padding:14px;

}
/* ----------- stylized ----------- */
	#stylized{
		border:solid 2px #b7ddf2;
		background:#ebf4fb;
	}
	#stylized h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#stylized p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #b7ddf2;
		padding-bottom:10px;
	
}
	</style> 
	
	<script type="text/javascript">
	
//Edit the counter/limiter value as your wish
var count = "160";   //Example: var count = "175";
function limiter(){
var tex = document.myform.text.value;
var len = tex.length;
if(len > count){
        tex = tex.substring(0,count);
        document.myform.text.value =tex;
        return false;
}
document.myform.limit.value = count-len;
}

// +,- delete
var r={'special':/[\W]/g}
function valid(o,w)
{
  o.value = o.value.replace(r[w],'');
}

// phone number checker
function isNumeric()
{
  var elem=document.myform.to.value;
  var nalt=document.getElementById('phno1');
 if(elem!="")
 {
    var numericExpression = /^[0-9]+$/;
	  if(elem.match(numericExpression))
    {
         nalt.innerHTML="";
         return true;
       }
    
    else{
		
    nalt.innerHTML="<font size=1 > Numbers Only</font>";
		  document.myform.to.focus();
	 	  document.myform.to.value="";
       return false;
	  }
  }
  else if(elem.length==0)  {
    nalt.innerHTML="<font size=1 > Enter Numbers</font>";
     document.myform.to.focus();;
   return false;
    }
}
</script> 
	
</head>
<body>
<?php

//  Video Instruction:  https://www.youtube.com/watch?v=SAcQafaW7ek


$user = "********"; // Change ********, and put your Proovl user ID
$token = "********"; // Change ********, and put your Proovl authentication token
$from = "********"; // Change ********, phone number under your Proovl account
 
$option = $_REQUEST["option"];
$text = $_REQUEST["text"];
$to = $_REQUEST["to"];


	switch ($option) {
	

	case sendsms:
		if ($text == "") { echo 
	"<center><br>Error!<br><b>Text not entered<b><br><a href=\"javascript:history.back(-1)\"><b>Go Back<b></a><br></center>"; 
die; } else { }
		
		if ($to == "") { echo "<center><br>Error!<br><b>Number not entered<b><br><a href=\"javascript:history.back(-1)\"><b>Go Back<b></a><br></center>";
 die; } else { }
 

		$url = "http://www.proovl.com/api/send.php";

	$postfields = array(
		'user' => "$user",
		'token' => "$token",
		'route' => "$route",
		'from' => "$from",
		'to' => "$to",
		'text' => "$text"
	);

if (!$curld = curl_init()) {
		exit;
	}

	curl_setopt($curld, CURLOPT_POST, true);
	curl_setopt($curld, CURLOPT_POSTFIELDS, $postfields);
	curl_setopt($curld, CURLOPT_URL,$url);
	curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);

	$output = curl_exec($curld);

	curl_close ($curld);
	
	$created = date('Y-m-d H:i:s');
	
	$result = explode(';',$output);

	if ($result[0] == "Error") {
			echo "<center>Error message:<b> $result[1] </b><br><br>script setup video instruction:<br>  <a href=\"https://www.youtube.com/watch?v=SAcQafaW7ek\" target=\"_blank\">https://www.youtube.com/watch?v=SAcQafaW7ek</a><br><br><a href=\"smser_multi.php\" ><b>Go Back</b></a></center>";

	} else {
		echo "<center>Date: $created <br>";
			echo "To: $to <br>";
			echo "Message ID: $result[1] <br>";
			echo "Message Status: $result[0] <br>";
			echo "<br><a href=\"smser.php\"><b>Send New SMS Message</b></a></center>";
	}
		
	break;

	default:
		
	echo
	
	 "<div id=\"stylized\" class=\"myform\">"
	 ."Proovl Api Demo"
	   ."<form name=\"myform\" method=post action=\"$PHP_SELF?option=sendsms\">"
	   ."<table border=\"0\">"
	   ."<tr>"
		 ."<td>Number</td>"
		 ."<td><input style=\"border: 1px solid #523f6d;width:85%;height:30px;\" maxlength=17 placeholder=\" xxx xxxxxxxxx\" type=\"text\" size=26 name=\"to\" id=\"to\" onKeyup=\"isNumeric()\"><span id=phno1></span></td>"
	   ."</tr>"
	   ."<tr>"
		 ."<td>Message</td>"
		 ."<td><textarea style=\"resize: none;width:85%;border: 1px solid #523f6d;outline:none;\" name=text wrap=physical rows=4 cols=25 onkeyup=limiter()></textarea></td><br>"
     ."</tr>"
	   ."<tr>"
	   ."<td></td>"
      ."<td>Character left: <script type=\"text/javascript\">"
       ."document.write(\"<input type=text name=limit size=4 readonly value=\"+count+\">\");"
       ."</script><br></td>"
	   ."</tr>"
	   ."<tr>"
		 ."<td>&nbsp;</td>"
		 ."<td><input style=\"width:8em;font-size:10px;\" type=submit name=submit value=Send>"
		 ."<div class=\"spacer\"></div></td>"
	   ."</tr>"
	   ."</table>"
	   ."</form>"
	   ."<a href=https://www.proovl.com/sms-api>Proovl Api</a>"
	."</div><br>";
	}
	
?>
</center>
</body>
</html>