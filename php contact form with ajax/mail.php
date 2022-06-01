<?php

$name = $_POST['name'];
$address = $_POST['address'];
$tele = $_POST['tele'];
$email = $_POST['email'];


$subject = "New Response on from Website";



$recipient = "nethsarasiyum2@gmail.com";
$body = "Name: name\n Address: $address\n  TelePhone:$tele \n Email: $email ";
$sender = "From: me@siyum.com";


mail($recipient, $subject, $body, $sender) or die($msg = 'Error!');

$isSuccess = true;
$msg = 'Form submitted';

?>
