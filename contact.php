<?php
$dsn = 'mysql:host=localhost;dbname=signup'; //Data source name
            $user = 'root'; //the user to connect
            $pass = '';

                          try {
                            $conn = new PDO($dsn, $user, $pass); //Start a new connection with PDO class
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $conn->exec("SET CHARACTER SET UTF8");
                          }
                          catch(PDOException $e) {
                            echo 'Failed to connect' . $e->getMessage();
                          }
$conn= mysqli_connect('localhost','root','','signup');
$stmt = $conn->prepare("SELECT*FROM contacts");
$ssql="SET CHARACTER SET UTF8";
mysqli_query($conn,$ssql);
$data=mysqli_query($conn,"SELECT * FROM contacts  ");
$darr=mysqli_fetch_array($data);
 $rowcount=mysqli_num_rows($data);
?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Education Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

    <!-- fonts -->
  <link href="css.css" rel="stylesheet">
  <link href="css1.css" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- Flaticons  -->
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>

  <div class="colorlib-loader"></div>

  <div id="page">
    <nav class="colorlib-nav" role="navigation">

      <div class="top-menu">
        <div class="container">
          <div class="row">
              <div class="col-md-2">
              <div id="colorlib-logo"><a href="index.php" style="font-size: 30px; "><span class="logo" style="font-size: 30px; ">Edu</span>Site</a></div>
            </div>
            <div class="col-md-10 text-right menu-1">
              <ul style="padding: 9px 15px;">
                <li><a href="index.php" style="font-size: 18px;">Home</a></li>
                  <li ><a href="courses.php" style="font-size: 18px;padding: 12px 12px; ">Courses</a></li>
                
                <li><a href="about.php" style="font-size: 18px; ">About</a></li>
                <li class="active"><a href="contact.php" style="font-size: 18px;">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <aside id="colorlib-hero">
      <div class="flexslider">
        <ul class="slides">
          <li style="background-image: url(images/img_bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                  <div class="slider-text-inner text-center">
                    <h1>Contact Us</h1>
                    <h2><span><a href="index.php">Home</a> | Contact</span></h2>
                  </div>
                </div>
              </div>
            </div>
          </li>
          </ul>
        </div>
    </aside>

    <div id="colorlib-contact">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 animate-box">
            <h2>Contact Information</h2>
            <div class="row">
              <div class="col-md-12">
                <div class="contact-info-wrap-flex">
                  <div class="con-info">
                    <p><span><i class="icon-location-2"></i></span>Abu Rawash Industrial Zone, Giza, Egypt,1257</p>
                  </div>
                  <div class="con-info">
                    <p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 201030704184</a></p>
                  </div>
                  <div class="con-info">
                    <p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@gmail.com</a></p>
                  </div>
                  <div class="con-info">
                    <p><span><i class="icon-globe"></i></span> <a href="#">yourwebsite.com</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- contact form-->
          <div class="col-md-10 col-md-offset-1 animate-box">
            <h2>Message Us</h2>
            <form method="post" action="message.php">
              <div class="row form-group">
                <div class="col-md-6">
                  <!-- <label for="fname">First Name</label> -->
                  <input type="text" name="fname" id="fname" class="form-control" placeholder="Your firstname">
                </div>
                <div class="col-md-6">
                  <!-- <label for="lname">Last Name</label> -->
                  <input type="text" name="lname" id="lname" class="form-control" placeholder="Your lastname">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <!-- <label for="email">Email</label> -->
                  <input type="text" name="email" id="email" class="form-control" placeholder="Your email address">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <!-- <label for="subject">Subject</label> -->
                  <input type="text" name="subject" id="subject" class="form-control" placeholder="Your subject of this message">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <!-- <label for="message">Message</label> -->
                  <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<!-----subscribe--------->
    <div id="colorlib-subscribe" class="subs-img" style="background-image: url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
        <div class="container">
           <div class="row">
             <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
              <h2>Subscribe Newsletter</h2>
              <p>Subscribe our newsletter and get latest update</p>
             </div>
            </div>
        
                <div class="col-one-third">
                  <div class="form-group">
                  <center>
                  <input id="btn" type="button" value="subscribe now" onclick="window.btn.value='Subscribed Done'" class="btn btn-primary" >
                  </center> 
                  </div>
                </div>
              

              </div>
    </div>
       
  <!--==========================
        Footer
        ============================-->
    <footer id="colorlib-footer">
      <div class="container">
        <div class="row row-pb-md">
          <div class="col-md-4 colorlib-widget">
            <h4>About EduSite</h4>
            <p>We offer a simplified explanation <br>to learn how to maintain computer<br>
                          by displaying images , videos and<br> Written explanation through five distinct individuals</p>
            <p>
              <ul class="colorlib-social-icons">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-linkedin"></i></a></li>

              </ul>
            </p>
          </div>
          <div class="col-md-4 colorlib-widget">
            <h4>Quick Links</h4>
            <p>
              <ul class="colorlib-footer-links">
                <li><a href="#"><i class="icon-check"></i> About Us</a></li>

                <li><a href="#"><i class="icon-check"></i> Courses</a></li>

                <li><a href="#"><i class="icon-check"></i> Home</a></li>
              </ul>
            </p>
          </div>



          <div class="col-md-4 colorlib-widget">
            <h4>Contact Info</h4>
            <ul class="colorlib-footer-links">
              <li>Our headquarters are located in the <br>Abu Rawash Industrial Zone, Giza, Egypt</li>
                <li><a href="tel://1234567920"><i class="icon-phone"></i> +123456789</a></li>
                <li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@gmail.com</a></li>
                <li><a href="http://luxehotel.com"><i class="icon-location4"></i> yourwebsite.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
  </div>

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Stellar Parallax -->
  <script src="js/jquery.stellar.min.js"></script>
  <!-- Flexslider -->
  <script src="js/jquery.flexslider-min.js"></script>
  <!-- Owl carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <!-- Counters -->
  <script src="js/jquery.countTo.js"></script>
  <!-- Main -->
  <script src="js/main.js"></script>

  </body>
</html>
