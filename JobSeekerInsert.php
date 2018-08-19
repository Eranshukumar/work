<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php 
	session_start();
require 'connection.php';

?>
<?php

	$Name=$_POST['txtName'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['txtCity'];
	$State=$_POST['cmbState'];
	$Pincode=$_POST['txtPin'];
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];	
	$Qualification=$_POST['cmbQual'];
	$Gender=$_POST['cmbGender'];	
	$BirthDate=$_POST['txtBirthDate'];
	$AdharNo=$_POST['txtAdhar'];
	$path1 = $_FILES["txtFile"]["name"];
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$Question=$_POST['cmbQue'];
	$Answer=$_POST['txtAnswer'];
	$UserType="JobSeeker";
	if ($Qualification=="Other")
	{
		$Qualification=$_POST['txtOther'];
	}
	  move_uploaded_file($_FILES["txtFile"]["tmp_name"],"upload/"  .$_FILES["txtFile"]["name"]);
	// Establish Connection with MYSQL
		
	
	// Specify the query to Insert Record
	$sql = "INSERT INTO `jobseeker_reg`(`JobSeekerName`, `Address`, `City`, `State`, `Pincode`, `Email`, `Mobile`, `Qualification`, `Gender`, `BirthDate`, `AdharNo`, `Resume`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES('".$Name."','".$Address."','".$City."','".$State."','".$Pincode."','".$Email."',".$Mobile.",'".$Qualification."','".$Gender."','".$BirthDate."','".$AdharNo."','".$path1."','".$Status."','".$UserName."','".$Password."','".$Question."','".$Answer."')";
	// execute query
	if($con->query($sql)===TRUE)
	{
		
		echo '<script type="text/javascript">alert("Registration Completed Successfully");window.location=\'http://localhost/services/anspay.php\';</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("Registration UnSuccesfully");window.location=\'\';</script>';
	}
	
if($sql){
$_SESSION["name"] = $Name;
$_SESSION["email"] = $Email;
$_SESSION["mobile"] =$Mobile;
 
}
	// Close The Connection
	mysqli_close ($con);
	
	// Storing session data

?>


</body>
</html>
