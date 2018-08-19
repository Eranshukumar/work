 <?php require 'boot.php'?>
 
 <?php
 
 $name=$_POST['txtName'];
 $mobile=$_POST['txtMobile'];
 $email=$_POST['txtEmail'];

 

 ?>
  <form action="process.php" method="POST">
        <input type="text" name="purpose" value="Registration Fees" >
		
        <input type="text" name="user" value="<?php $name  ?>">
		
        <input type="text" name="email" value="<?php $email  ?>">
		
        <input type="text" name="phone" value="<?php $mobile  ?>">
		
       <input type="text" name="amount" value="160">
	   
      <input type="submit" value="Pay Amount 160">
	  </form>