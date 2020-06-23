<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Message = $_POST['message'];


/*$email_from = $email;
$email_subject = "New form submission";
$email_body = "User NAme: $name. \n"."User Email: $email. \n"."Phone: $phone. \n". "User message: $message. \n";

$to = "ghadeer.abbadi122@gmail.com";
$headers = "From: $email_from \n";
$headers = "Replay to: $email \n";

mail($to, $email_subject, $email_body, $headers);
header("Location: Al-Farra.html");
echo"done";*/
$to = "ghadeer.abbadi122@gmail.com";
mail($to, $Name, $Email, $Phone, $Message);
	echo"done";
}
?>