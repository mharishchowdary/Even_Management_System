<?php
	$name=$_POST['name'];
	$visitor_email=$_POST['email'];
	$message=$_POST['message'];

	$email_from="mharishchowdary16@gmail.com";
	$email_subject="Query submission";
	$email_body="User Name: $name.\n".
				"User Email: $visitor_email.\n".
				        "User Message: $message.\n";


	$to="mharishchowdary16@gmail.com";
	$headers="From: $email_from";
	//$headers .="Reply-To: $visitor_email \r\n";

	if (mail($to,$email_subject,$email_body,$headers)){
		echo "Thank you";
	}
	else{
		echo "Unable to send mail";
	}

	//header("Location:index.html");
?>