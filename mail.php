<?php
if(isset( $_POST['submit'])){
	$name = $_POST['name'];
	$emailFrom = $_POST['email'];
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	
	$mailTo = "ghadeer.abbadi122@gmail.com";
	$mailheader = "From: $emailFrom \r\n";
	$content="From: $name \nEmail: $emailFrom \nMessage: $message";

mail($mailTo, $subject, $content, $mailheader);
	header("Location: index.html?mailsend");
}

?>