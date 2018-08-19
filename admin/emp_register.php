 <?php 
 include "connection.php";
 if(isset($_POST["register"]))
 {
	$name=$_POST["name"]; 
	$add=$_POST["add"]; 
	$city=$_POST["city"];
	$state=$_POST["state"]; 
	$mob=$_POST["mob"]; 
	$email=$_POST["email"]; 
	$user=$_POST["user"]; 
	$pass=$_POST["pass"]; 
	$work=$_POST["work"]; 
	 
		
 $sql="INSERT INTO `employer_reg`(`Employee Name`, `Address`, `City`, `State`, `Email`, `Mobile`, `Area_Work`, `UserName`, `Password`) VALUES ('".$name."','".$add."','".$city."','".$state."','".$email."','".$mob."','".$work."','".$user."','".$pass."')";
 
if ($con->query($sql) === TRUE) {
    echo '<script type="text/javascript">

        { alert("INSERT SUCCESS"); }
		window.location = "emp_reg.php";
		</script>';
} else {
  echo '<script type="text/javascript">

        { alert("INSERT NOT SUCCESS"); }</script>';
}
 }
  ?>