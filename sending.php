<?php

/*$to="anshukumar7677@gmail.com";
$sub="hello";

$name="anket";
$email="anshukumar7677@gmail.com";
$msg="how are u";
$headers ="from: $email";*/
$mail=mail('anshukumar7677@gmail.com','hai','hello','From: Deohomeservices.com');

if($mail)
{
echo"sent";
}
else
{
	echo "failed";
}

?>