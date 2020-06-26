<?php


if(isset( $_POST["submit"])){

$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['subject'];
$Message = $_POST['message'];

$to = "ghadeer.abbadi122@gmail.com";
mail($to, $Name, $Email, $Phone, $Message);
	echo"done";
}



?>

