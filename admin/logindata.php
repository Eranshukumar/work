<?php
 include "connection.php";
session_start();
 if(isset($_POST["login"]))
 {
	$user=$_POST["user"]; 
	$pass=$_POST["pass"]; 
	
	 $sql="SELECT `id`, `userName`, `password` FROM `admin`";
  $result1=mysqli_query($con, $sql);
 if($result1->num_rows>0)
 {
	 while($row=mysqli_fetch_assoc($result1))
	 {
			$username=$row["userName"];
			$password=$row["password"];
	 }
 }
// echo $username;
 //echo $user;
 if($user==$userName || $pass==$password)
 {
	echo '<script type="text/javascript">

        { alert("Login SUCCESS"); }
		window.location = "index.php";
		</script>'; 
	 
 }
 else
 {
	 echo '<script type="text/javascript">

        { alert("Login UNSUCCESS"); }
		window.location = "login.php";
		</script>';
 }
 }
 session_cache_expire();
?>