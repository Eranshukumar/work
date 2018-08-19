 <?php require 'boot.php';
 
 session_start();
 ?>
 
<?php

if (empty($_POST['user']))
{
header('location:\anspay.php');
}	

$data = [
    'purpose' => $_POST['purpose'] ,
    'amount' => $_POST['amount'] ,
    'phone' => $_POST['phone'] ,
    'buyer_name' => $_POST['user'] ,
    'redirect_url' => 'http://deohomeservices.com/success.php/',
    'send_email' =>true,
    'webhook' => 'http://deohomeservices.com/index.php/',
    'send_sms' => true,
    'email' => $_POST['email'],
    'allow_repeated_payments' => false
];
$paymentRequest=$instamojo->paymentRequestCreate($data);
$requestid=$paymentRequest['id'];
header("Location:" .$paymentRequest['longurl']);
?>
<?php
if (isset($_POST['user']))
{	
$_SESSION["name"] = "buyer_name";
$_SESSION["email"] = "email";
$_SESSION["mobile"] ="phone";
}
?>