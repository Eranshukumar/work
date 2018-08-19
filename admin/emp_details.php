
 
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">



 <div class="row">
          <div class="col-lg-12">
            <!--Project Activity start-->
            <section class="panel">
              <div class="panel-body progress-panel">
                <div class="row">
                  <div class="col-lg-8 task-progress pull-left">
                    <h1>Complains</h1>
                  </div>
                  <div class="col-lg-4">
                    
                  </div>
                </div>
              </div>
              <table class="table table-hover personal-task">
			  <thead>
                    <tr>
                      
					  <th>Employee Id</th>
                     
					  <th>Name</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>State</th>
					  
					  <th>Email</th>
                      <th>Mobile No.</th>
					  <th>Work Field</th>
                      <th>UserName</th>
					  <th>Password</th>
					  
                    </tr>
                  </thead>
                <tbody>
                  <tr>
				  				  <?php 
 include "connection.php";
 if(isset($_POST["btn"]))
 {
	$id=$_POST["jobid"]; 
 $sql="SELECT `EmployerId`, `Employee Name`, `Address`, `City`, `State`, `Email`, `Mobile`, `Area_Work`, `UserName`, `Password` FROM `employer_reg` WHERE EmployerId=$id ";
  $result1=mysqli_query($con, $sql);
 if($result1->num_rows>0)
 {
	 while($row=mysqli_fetch_assoc($result1))
	 {
			echo "<td>".$row["EmployerId"]."</td>";
			echo "<td>".$row["Employee Name"]."</td>";
			echo "<td>".$row["Address"]."</td>";
			echo "<td>" .$row["City"]."</td>";
			echo "<td>" .$row["State"]."</td>";
		
			echo "<td>" .$row["Email"]."</td>";
			echo "<td>" .$row["Mobile"]."</td>";
			echo "<td>" .$row["Area_Work"]."</td>";
			echo "<td>" .$row["UserName"]."</td>";
			echo "<td>" .$row["Password"]."</td></tr>";
	 }
 }	 
 }
 ?>
                  
                </tbody>
              </table>
            </section>
            <!--Project Activity end-->
          </div>
        </div> 
