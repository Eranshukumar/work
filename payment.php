<?php
use Illuminate\Http\Request;
class payment extends Controller
{

public function complain()
{
return view('complain');
}


   public function createReuest(request $request)
    {
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_c78aedc79b09aefcbd8e6da1151",
                  "X-Auth-Token:test_b1638e10d4042b313c9074c7633"));
	$payload = Array(
  	  'purpose' => $request->purpose,
  	  'amount' =>  $request->amount,
   	 'phone' =>  $request->phone,
   	 'buyer_name' =>  $request->user,
  	  'redirect_url' => 'http://deohomeservices.com/success.php/',
  	  'send_email' => false,
  	  'webhook' => '',
  	  'send_sms' => false,
   	 'email' =>  $request->email,
   	 'allow_repeated_payments' => false
	);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
	$response = curl_exec($ch);
	curl_close($ch); 
	$json_decode=json_decode($response ,true);
	$long_url=$json_decode['payment_request']['longurl'];
	header ('Location:'.$long_url);

}

}
?>