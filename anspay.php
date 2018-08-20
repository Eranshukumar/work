 <?php require 'boot.php'?>
 
 <?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea{
    width: 40%;
    padding: 12px;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: center;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: ;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 10%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 40%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 200px) {
    .col-25, .col-75, input[type=submit] {
        width: 20%;
        margin-top: 0;
    }
}
</style>
</head>
<body>

<div style="border:2px solid gray;width:100%"><img src="images/instamojo.png"  width="225">

<strong style="color:white;font-size:36px"><i>.......................................-------------</i></strong>
<strong style="color:Green;font-size:36px"><i>Pay To Deo Home Services</i></strong>
</div>
<img src="images/logo.png" style="border:2px solid gray" width="200px">

<div class="container" >
  <form action="process.php" method="POST">
    <div class="row">
      <div class="col-25">
	   
        <label for="fname">Purpose</label>
      </div>
      <div class="col-75">
        <input type="text" name="purpose" value="Registration Fees" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" name="user" value="<?php echo $_SESSION['name']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>">
      </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for="lname">Mobile No</label>
      </div>
      <div class="col-75">
        <input type="text" name="phone" value="<?php echo $_SESSION['mobile']; ?>">
		
      </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for="lname">Amount</label>
      </div>
      <div class="col-75">
       <input type="text" name="amount" value="160">
      </div>
    </div>
 <br>
    
    <div class="row">
	<div class="col-25">
        
      </div>
	<div class="col-75">
      <input type="submit" value="Pay Amount 160">
	    </div>
    </div>
  </form>
</div>

<br><br><br>


<div style="border:2px solid gray;width:100%"><img src="images/insta.jpg" > </div>
</body>
</html>


















