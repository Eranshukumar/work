<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php require 'connection.php'?>
<body>
<?php

	$Date=$_POST['Date'];
	$Name=$_POST['txtName'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['txtCity'];
	$State=$_POST['cmbState'];
	$Pincode=$_POST['txtPin'];
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];	
	$Category=$_POST['cmbCat'];	
	$Complain=$_POST['txtComp'];	
	
	
	$message='Date :  '.$Date.  '  Address :  '.$Address. '    City :  '.$City.  '    State :  '.$State.'    '.$Pincode.  '   Mobile:   '.$Mobile.   '    Complains :  '.$Complain;
	
	
	 
	// Establish Connection with MYSQL
		
	
	// Specify the query to Insert Record
	$sql = "INSERT INTO `complain_reg`( `date`, `name`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `category`, `complain`) VALUES('".$Date."','".$Name."','".$Email."',".$Mobile.",'".$Address."','".$City."','".$State."','".$Pincode."','".$Category."','".$Complain."')";
	// execute query
	if($con->query($sql)===TRUE)
	{	$mail=mail('Support@deohomeservices.com','Complains',$message,$Name);
		if($mail){
		echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript">alert("Registration UnSuccesfully");window.location=\'complain.php\';</script>';
	}
	// Close The Connection
	mysqli_close ($con);
	
	

?>
</body>
</html>
