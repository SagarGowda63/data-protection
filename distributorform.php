<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BizPage Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/table.css" type="text/css"/>
  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">BizPage</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Home</a></li>
          <li><a href="#about">File</a></li>
          <li><a href="#" onclick="myFunction()">Agent Details</a></li>
          <li><a href="#portfolio">ChangePassword</a></li>
          <li><a href="logout.php">Logout</a></li>
         
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background">
			<!<img src="img/intro-carousel/123.jpeg" alt=""> ></div>
            <div class="carousel-container">
              <div class="carousel-content">
			  
               <form id="form_id" method="post" name="myform" >
   </br></br> 
<center>
<center><b><font size=24>Agent Details</font></b></center>
<div class="CSSTableGenerator" style="width:1300px;height:150px;">   
    <center><font>     
<?php
   // mysql_connect("localhost","root","");
	//mysql_select_db("myproject");
	    require('db.php');
	    $query    = "select LoginId, UserId, FName, LName, CellNumber, EmailAddress, rollId, city, pincode, agenttype from agentinfo";
        $result   = mysqli_query($con, $query);
	
	//$rid=mysql_query("select LoginId, UserId, FName, LName, CellNumber, EmailAddress, rollId, city, pincode, agenttype from agentinfo") or die(mysql_error());
	print "<table><tr><td>LoginId</td><td>UserId</td><td>FName</td><td>LName</td><td>CellNumber</td><td>EmailAddress</td><td>rollId</td><td>city</td><td>pincode</td><td>agenttype</td></tr>";
	
	While($row=mysqli_fetch_row($result))
	{
        print "</tr><td>$row[0]</td>";
		print "<td>$row[1]</td>";
		print "<td>$row[2]</td>";
		print "<td>$row[3]</td>";
        print "<td>$row[4]</td>";
        print "<td>$row[5]</td>";
		print "<td>$row[6]</td>";
        print "<td>$row[7]</td>";
        print "<td>$row[8]</td>";
		print "<td>$row[9]</td>";
		
	}
	print "</table>";
	
?>
</font></center>
</div>
<br><br>
<center><a href="distributorform.html">	<img src="images/back.jpeg" ></a></center>
</form>

              </div>
            </div>
          </div>

          </div>
		  
		  </div>
    </div>
  </section><!-- #intro -->
  
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
<script> 
            function myFunction() { 
                document.getElementById("form_id").submit(); 
            } 
        </script> 
</body>
</html>
