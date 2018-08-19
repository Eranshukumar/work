
<?php 
require 'connection.php';?>
<?php 

    $Name=$_POST['txtName'];
	$Email=$_POST['txtEmail'];
	$Subject=$_POST['txtSubject'];
	$Message=$_POST['txtMessage'];
	
	// Specify the query to Insert Record
	$sql = "INSERT INTO `message`(`name`, `email`, `subject`, `message`) VALUES ('".$Name."','".$Email."','".$Subject."','".$Message."')";
	
	if($con->query($sql)===TRUE)
	{
		echo '<script type="text/javascript">alert("Message Send To Deo Home Services Succesfully");window.location=\'index.php\';</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("Message Not Send Deo Home Services");window.location=\'contact-us.php\';</script>';
	}
	// Close The Connection
	mysqli_close ($con);
?>