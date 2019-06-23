<?php

ini_set('session.gc_maxlifetime', 60);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(60);
 session_start();//at the v
 //if ( $_SESSION['username'])
 //{$_SESSION['authenticated']=true;};
// $_SESSION['authenticated']=false?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Education Template</title>
    <link rel="shortcut icon" type="image/png" href="images/icon.png">
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
								<div id="colorlib-logo"><a href="index.php"style= "font-size: 30px;"><span class="logo" style= "font-size: 30px;">Edu</span>Site</a></div>
							</div>
							<div class="col-md-10 text-right menu-1">
								<ul   style="padding: 9px 15px;">
									<li class="active"><a href="index.php" style="font-size: 18px;">Home</a></li>
									<li><a href="courses.php" style="font-size: 18px ; ">Courses</a></li>
									<li><a href="about.php" style="font-size: 18px ;">About</a></li>

									<li><a href="contact.php" style="font-size: 18px; ">Contact</a></li>
                                    
                                    <li class="btn-cta"><a href="login.php" style="font-size: 16px; "><span>Login</span></a></li>

								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</nav>

		<!-- Slider -->
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Online Free Course</h1>
				   					<p><a href="register.php" class="btn btn-primary btn-lg btn-learn">Sign Up Now</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/8.jpeg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Best Online Learning System</h1>
				   					<p><a href="register.php" class="btn btn-primary btn-lg btn-learn">Sign Up Now</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/11.jpeg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Education is a Key to Success</h1>
				   					<p><a href="register.php" class="btn btn-primary btn-lg btn-learn">Sign Up Now</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/7.jpeg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Best Online Learning Center</h1>
				   					<p><a href="register.php" class="btn btn-primary btn-lg btn-learn">Sign Up Now</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<!-- End Slider -->
		<!--- intro to site --->
	<div id="colorlib-intro">
					<div class="container">
						<div class="row">
							<div class="col-md-4 intro-wrap">
								<div class="intro-flex">
									<div class="one-third color-1 animate-box">
										<span class="icon"><i class="flaticon-open-book"></i></span>
										<div class="desc">
										  <a href="https://computerstepbystep.com/computer-maintanence.html">
										  	<h3>Learn Lessons Online</h3>
                                          </a>
										</div>
									</div>
									<div class="one-third color-2 animate-box">
										<span class="icon"><i class="flaticon-market"></i></span>
										<div class="desc">
										 <a href="https://www.youtube.com/watch?v=z3YtfmIkMho&feature=youtu.be&fbclid=IwAR2RwhAy23Uy_UIzX_IbD2VRP8CrwCgRkvWl12vgZJs2buG9a5QU9iq0tR4">
											<h3>Watch Videos Online</h3>
                                         </a>
										</div>
									</div>
								</div>
							</div>


							<div class="col-md-8">
								<div class="about-desc animate-box">
									<h2>Welcome to EduSite</h2>
							    	<p>We are a team in the Faculty of specific Education </p><p> we do a site in which we explain some of the topics of computer maintenance</p>
									<div class="fancy-collapse-panel">
								 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								 <div class="panel panel-default">
									 <div class="panel-heading" role="tab" id="headingOne">
										 <h4 class="panel-title">
											 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why choose us?
											 </a>
										 </h4>
									 </div>
									 <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										 <div class="panel-body">
											 <div class="row">
														<div class="col-md-6">
															<p>Because we are distinct , understand student requirements and we offer the course In a simple and fun way </p>
														</div>
														
												</div>
										 </div>
									 </div>
								 </div>
								 <div class="panel panel-default">
									 <div class="panel-heading" role="tab" id="headingTwo">
										 <h4 class="panel-title">
											 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What we do?
											 </a>
										 </h4>
									 </div>
									 <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										 <div class="panel-body">
											 <p>We offer a simplified explanation to learn how to maintain computer</p>
														<ul>
															<li>by displaying images</li>
															<li> videos and Written explanation through five distinct individuals</li>
														</ul>
										 </div>
									 </div>
								 </div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

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
								<h3><a href="#">Problem restarting device</a></h3>
								<p>Problem restarting device the Reason: High temperature sensor ,...</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/1.jpeg);"></div>

							<div class="desc">
								<h3><a href="#">computer components</a></h3>
								<p>What are the Physical components,Moral components,...</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/windows.jpg);"></div>

							<div class="desc">
								<h3><a href="InstallWindows.php">Solve slow windows problem</a></h3>
								<p>We will learn how to Solve slow windows problem...</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/spying.jpg);"></div>

							<div class="desc">
								<h3><a href="#">Detecting spyware</a></h3>
								<p>We will learn how to detect spyware by some steps...</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="classes">
							<div class="classes-img" style="background-image: url(images/hqdefault.jpg);"></div>

							<div class="desc">
								<h3><a href="#">The problem of not appearing data</a></h3>
								<p>We will Solve the problem of not appearing on the screen...</p>
								<p><a href="#" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


           <!----comments------->
		<div id="colorlib-testimony" class="testimony-img" style="background-image: url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>What Are The Students Says</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="row animate-box">
							<div class="owl-carousel1">
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>Sophia </span>
												<p>explanation is beautiful and simple</p>
											</blockquote>
											<div class="figure-img" style="background-image: url(images/person1.jpg);"></div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>John </span>
												<p>we are very gratful for helping us easily</p>
											</blockquote>
											<div class="figure-img" style="background-image: url(images/person2.jpg);"></div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>Adam </span>
												<p>your site is very useful , thanks alot.</p>
											</blockquote>
											<div class="figure-img" style="background-image: url(images/person3.jpg);"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!----End comments---->




		
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

								<li><a href="#"><i class="icon-check"></i> Contact</a></li>
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
	</div>
</body>
</html>
