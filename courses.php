<?php
ini_set('session.gc_maxlifetime', 60);
session_set_cookie_params(60);
session_start();
if($_SESSION['authenticated']){


	$conn= mysqli_connect('localhost','root','','signup');
	$stmt = $conn->prepare("SELECT*FROM users");
	$ssql="SET CHARACTER SET UTF8";
	mysqli_query($conn,$ssql);
	$data=mysqli_query($conn,"SELECT * FROM users");
	$darr=mysqli_fetch_array($data);
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
								<li class="has-dropdown active">
									<a href="courses.php" style="font-size: 18px;">Courses</a>
									<ul class="dropdown">
										<li><a href="installwindows.php">Solve slow windows problem</a></li>
										<li><a href="componants.php">Computer Components</a></li>
										<li><a href="prestart.php">Problem Restarting device</a></li>
										<li><a href="pdata.php">The problem of not appearing data</a></li>
										<li><a href="spy.php">Detecting spyware</a></li>
									</ul>
								</li>
								
								<li><a href="about.php" style="font-size: 18px; ">About</a></li>
								<li><a href="contact.php" style="font-size: 18px;">Contact</a></li>
								<li class="btn-cta"><a href="logout.php"  style="font-size: 16px; "><span>Log Out</span></a></li>
								<li><div style="width:100px;float:right;margin-left:5px;font-weight:bold;font-family:'Comic Sans MS';" action="login.php"></div></li>
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
				   					<h1>Courses</h1>
				   					<h2><span><a href="index.php">Home</a> | Courses</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		  <!----- lessons----->

		<div class="colorlib-classes colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Our Classes</h2>
						<p>WE OFFER BETTER EDUCATION FOR A BETTER WORLD</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/base-board-chips.jpg);"></div>
							<div class="desc">
								<h3><a href="#">Introduction to maintenance</a></h3>
								<p>Definition of computer maintenance and computer maintenance methods</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/l2.jpg);"></div>

							<div class="desc">
								<h3><a href="prestart.php">Problem restarting device</a></h3>
								<p>Problem restarting device the Reason: High temperature sensor ,...</p>
								<p><a href="prestart.php" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/1.jpeg);"></div>

							<div class="desc">
								<h3><a href="componants.php">computer components</a></h3>
								<p>What are the Physical components,Moral components,...</p>
								<p><a href="componants.php" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/windows.jpg);"></div>

							<div class="desc">
								<h3><a href="InstallWindows.php">Solve slow windows problem</a></h3>
								<p>We will learn how to Solve slow windows problem...</p>
								<p><a href="InstallWindows.php" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/spying.jpg);"></div>

							<div class="desc">
								<h3><a href="spy.php">Detecting spyware</a></h3>
								<p>We will learn how to detect spyware by some steps...</p>
								<p><a href="spy.php" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/hqdefault.jpg);"></div>

							<div class="desc">
								<h3><a href="pdata.php">The problem of not appearing data</a></h3>
								<p>We will Solve the problem of not appearing on the screen...</p>
								<p><a href="pdata.php" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- subscribe-->
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
		<!--- footer --->
		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About EduSite</h4>
						<p>We offer a simplified explanation to learn how to maintain computer
                           by displaying images , videos and Written explanation through five distinct individuals</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>

							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> Home </a></li>

								<li><a href="#"><i class="icon-check"></i> About Us</a></li>

								<li><a href="#"><i class="icon-check"></i> Contact</a></li>

								
							</ul>
						</p>
					</div>



					<div class="col-md-3 colorlib-widget">
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

<?php } else {
	echo '<script type="text/javascript">';
      echo 'alert("Please Login First !");';
      echo 'window.location.href = "index.php";';
      echo '</script>';
}
?>
