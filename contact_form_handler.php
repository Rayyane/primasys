<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$content = $_POST['message'];

	$toEmail = "info@primasys.co.id";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	
	if (mail($toEmail, $subject, $content, $mailHeaders)) {
		echo "Your message has been sent!";
	}
	else {
		echo "Error sending message";
	}
	
?>