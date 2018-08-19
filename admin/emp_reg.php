<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Deo Home Services</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />


</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                           
                            <span class="username"></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              
             
              <li>
                <a href="login.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
             
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
         
         

          <li class="sub-menu ">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Admin Work</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="profile.php">Profile</a></li>
              <li><a class="" href="signup.php"><span>Sinup</span></a></li>
              <li><a class="active" href="emp_reg.php">Emplyee Reg.</a></li>
              
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> Admin</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-bars"></i>Admin</li>
              <li><i class="fa fa-square-o"></i>Admin Work</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        
		
		 <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                           <div class="text">
						   <b><h3>Job Seeker Details:Search</h3></b>
                            <p class="attribution">
							<form action="emp_reg.php" method="post"> 
							<center><table><tr>
							<td>Enter JobSeeker Id:</td><td> <input type="text" name="jobid" id="jobid"></td><tr>
							<td></td><td><input type="submit" name="btn1" value="Update Status"></td></table> </center></form></p>
                          </div>
                        </div>
                      </div>
		
		<form action="emp_register.php" method="post"> 
              <table class="table table-hover personal-task">
			  <thead>
                    <tr>
                   
                <tbody>
                  <tr>
				  				  
	
		 <?php 
 include "connection.php";
 if(isset($_POST["btn1"]))
 {
	$id=$_POST["jobid"]; 
 $sql="SELECT `JobSeekId`, `JobSeekerName`, `Address`, `City`, `State`, `Email`, `Mobile`, `UserName`, `Password` FROM `jobseeker_reg` where JobSeekId=$id ";
 $result=mysqli_query($con, $sql);
 if($result->num_rows>0)
 {
	 while($row=mysqli_fetch_assoc($result))
	 {
			echo "<th>JobSeekId</th><th><input type='text' name='id' value=".$row['JobSeekId']."></th><tr>";
			
			echo " <th>Name</th><th><input type='text' name='name'value=".$row["JobSeekerName"]."></th> <tr>";
			echo " <th>Address</th><th><input type='text' name='add'value=".$row['Address']."></th><tr>";
			echo " <th>City</th><th><input type='text' name='city'value=" .$row["City"]."></th><tr>";
			echo " <th>State</th><th><input type='text' name='state'value=".$row["State"]."></th><tr>";
			
			echo " <th>Email</th><th><input type='text' name='email'value=" .$row["Email"]."></th><tr>";
			echo " <th>Mobile</th><th><input type='text' name='mob'value=".$row["Mobile"]."></th><tr>";
			echo " <th>UserName</th><th><input type='text' name='user'value=" .$row["UserName"]."></th><tr>";
			echo " <th>Password</th><th><input type='text' name='pass'value=" .$row["Password"]."></th><tr>";
			echo " <th>Work Field</th><th><input type='text' name='work'</th><tr>";
			
              echo "<input type='submit' name='register' value='Employee Register'> ";
	 }
 }	 
 }
 $con->close();
 ?>
                </tbody>
              </table>
          	
		</form>
		
		
		
		
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
