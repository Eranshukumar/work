 <?php 
 include "..\connection.php";
 $sql="SELECT `JobSeekId`, `JobSeekerName`, `Address`, `City`, `State`, `Email`, `Mobile`, `UserName`, `Password` FROM `jobseeker_reg`";
 $result=mysqli_query($con, $sql);
 if($result->num_rows>0)
 {
	 while($row=mysqli_fetch_assoc($result))
	 {
		 echo $row["JobSeekId"].$row["JobSeekerName"].$row["Address"].$row["City"].$row["State"]
		 .$row["Email"].$row["Mobile"].$row["UserName"].$row["Password"];
	 }
	 
 }
 ?>