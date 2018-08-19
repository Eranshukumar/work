<?php
include "connection.php";

if(isset($_POST['btn']))
{
	$id=$_POST['id'];
	
	
	//$status=$_POST['status'];
	
	
	

$sql="UPDATE `complain_reg` SET `status`='Done' WHERE comp_id='$id'" ;
  
  if ($con->query($sql) === TRUE) {
   echo '<script type="text/javascript">

        { alert("UPDATE SUCCESS"); }
		window.location = "profile.php";
		</script>';


}
 else {
   echo '<script type="text/javascript">

        { alert("UPDATE NOT SUCCESS");}
		window.location = "profile.php";
		
</script>';
}
	


}



?>