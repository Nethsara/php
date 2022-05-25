<?php

$companyName = $_POST['companyName'];
$address = $_POST['address'];
$wayBillAddress = $_POST['wayBillAddress'];
$managerName = $_POST['managerName'];
$nic = $_POST['nic'];
$tele = $_POST['tele'];
$email = $_POST['email'];
$description = $_POST['description'];
$bankDetails = $_POST['bankDetails'];
$rates = $_POST['rates'];
$comments = $_POST['comments'];
$courierService = $_POST['courierService'];
$storeType = $_POST['storeType'];
$tier = $_POST['tier'];
$confirmation = $_POST['confirmation'];
$cod = $_POST['cod'];




$subject = "New Response on Ezip";



$recipient = "nethsarasiyum2@gmail.com";
$body = "Name: $companyName\n Address: $address\n Way Bill Address: $wayBillAddress\n Manager Name: $managerName\n NIC: $nic\n TelePhone:$tele \n Email: $email\n Product Description: $description \n Bank Details : $bankDetails\n Rates : $rates \n Courier Service Selection: $courierService\n Store Type: $storeType \n Tier: $tier \n Confirmation : $confirmation \n COD Rules : $cod \n Comments : $comments \n\n\nEmail Sent From ezip";
$sender = "From: me@siyum.com";


mail($recipient, $subject, $body, $sender) or die($msg = 'Error!');

$isSuccess = true;
$msg = 'Form submitted';

?>