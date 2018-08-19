<?php

$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:50a832d07e45dc62e44068fe6d0556ac",
                  "X-Auth-Token:27abf46f6139dcfcb2c05a6ddc2d47c0"));
$payload = Array(
    'purpose' => 'FIFA',
    'amount' => '10',
    'phone' => '9852066008',
    'buyer_name' => 'deo home services',
    'redirect_url' => 'http://deohomeservices.com/success.php/',
    'send_email' =>false,
    'webhook' => '',
    'send_sms' => false,
    'email' => '',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$json_decode=json_decode($response ,true);
$long_url=$json_decode['payment_request']['longurl'];
header ('Location:'.$long_url);

?>