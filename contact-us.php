<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HomeServices</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <!-- =======================================================
    
  ======================================================= -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6372224633591084",
    enable_page_level_ads: true
  });
</script>


</head>

<body class="homepage">
  <header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
         <img src="images/logo1.png" width="50%"  ></img>
        </div>

        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="portfolio.php">Job Seeker</a></li>
            <li><a href="complain.php">complains Register</a></li>
            <li class="active"><a href="contact-us.php">Contact</a></li>
          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->

  </header>
  <!--/header-->

  <div >
   <img src="images/maps.png" width="100%"></img>
  </div>
<br><br>
  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Drop Your Message</h2>
        <p class="lead">Send To Deo Home Services.</p>
      </div>
      <div class="row contact-wrap">
        <div class="col-sm-8 col-sm-offset-2">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="contactInsert.php" method="POST" ">
            <div class="form-group">
              <input type="text" name="txtName" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="txtEmail" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="txtSubject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="txtMessage" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>

            <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->

   <section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Company</h3>
            <ul>
              <li><a href="#">About us</a></li>
              <li><a href="#">We are hiring</a></li>
              <li><a href="#">Meet the team</a></li>
              <li><a href="#">Copyright</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Support</h3>
            <ul>
              <li><a href="#">Contact No:</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#"></a>Other</li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Service</h3>
            <ul>
              <li><a href="#">Laptop Reparing</a></li>
              <li><a href="#">Computer Reparing</a></li>
              <li><a href="#">Software Installation</a></li>
              <li><a href="#">Others</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Our Partners</h3>
            <ul>
              <li><a href="#">----------</a></li>
              <li><a href="#">----------</a></li>
              <li><a href="#">..........</a></li>
              <li><a href="#">...........</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->
      </div>
    </div>
  </section>
  <!--/#bottom-->

  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="social">
            <ul class="social-share">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </div>
  <!--/.top-bar-->

  <footer id="footer" class="midnight-blue">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
         <center> &copy; DeoHomeServices. All Rights Reserved.</center>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Gp
            -->
           <center>Saguna More New Mainpura<br>Danapur Cantt Patna<br>Bihar 801503.</center>
          </div>
        </div>
        <div class="col-sm-6">
          <ul class="pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Other</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!--/#footer-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="js/main.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>