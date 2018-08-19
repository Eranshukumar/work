 <?php require 'boot.php'?>
 
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
    'send_email' =>false,
    'webhook' => '',
    'send_sms' => false,
    'email' => $_POST['email'],
    'allow_repeated_payments' => false
];
$paymentRequest=$instamojo->paymentRequestCreate($data);
$requestid=$paymentRequest['id'];
header("location:".$paymentRequest['longurl']);
?>