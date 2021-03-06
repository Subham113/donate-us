<?php
include('session.php');
$_SESSION['pageStore'] = "index.php";
if(!isset($_SESSION['login_id'])){
$profile = '<div class="nav-item active"><li class="nav-item submenu dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account</a><br>
<ul class="dropdown-menu">
<li class="nav-item"><a class="nav-link" href="login.php">Login</a>
<li class="nav-item"><a class="nav-link" href="register.php">Register</a></ul></li>
</div>';
    
}
else {
    $profile = '<div class="nav-item active"><li class="nav-item submenu dropdown"><a href="#" class="nav-link active dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, </a>
'
. $session_fullName
. '<br>
<ul class="dropdown-menu">
<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></ul></li>
</div>';
}
?>

<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
             <title>DonateUs | Donate for a Life</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        
        
    </head>
<body>
        
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<font size="6" color="white">DonateUs |<sub> Donate for a Life</sub></font>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li> 
								<li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Donate</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="#blood">Blood</a>
										<li class="nav-item"><a class="nav-link" href="#flood">For Flood Victims</a>
										<li class="nav-item"><a class="nav-link" href="#disaster">Disaster Relif</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#orphanage">Orphanage</a></li>
									</ul>
								</li> 
								
                                 <?php echo $profile ?>
                                  
				
							</ul>
						</div> 
					</div>
				</nav>
			</div>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->
	
	<!--================ Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="banner_content">
					<p class="upper_text">Give a hand</p>
					<h2>to make the better world</h2>
					<p>
						The value of life is not in its duration, but in its donation. You are not important because of how long you live, you are important because of how effective you live.
					</p>
					<a class="primary_btn mr-20" href="#blood">Donate Now</a>
					</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->
    <!--================ Start Features Cause section =================-->
	<br><section class="features_causes">
		<div class="container">
			<div class="main_title">
				<h2>Donate Now</h2>
				
			</div>

			<div class="row">
				<div id="blood" class="col-lg-6 col-md-6">
					<div class="card">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="img/blood.jpeg" alt="Card image cap">
							</figure>
							<div class="card_inner_body">
								<h4 class="card-title">Blood Donation</h4>
								<p class="card-text">
									Donate your blood for a reason, let the reason to be life.
								</p>
								<br><div class="d-flex justify-content-between donation align-items-center">
								<a class="primary_btn mr-20" href="donation-page.php">Donate Now</a>
                                <p><span class="lnr lnr-heart"></span> 90+ Peoples Donated</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="flood" class="col-lg-6 col-md-6">
					<div class="card">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="img/flood.jpeg" alt="Card image cap">
							</figure>
							<div class="card_inner_body">
								<h4 class="card-title">Donate for Flood Victims</h4>
								<p class="card-text">
									We can do no great things, only small things with great love.
								</p>
								<br><div class="d-flex justify-content-between donation align-items-center">
								<a class="primary_btn mr-20" href="donation-page.php">Donate Now</a>
                                <p><span class="lnr lnr-heart"></span> 100+ Peoples Donated</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="disaster" class="col-lg-6 col-md-6">
					<div class="card">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="img/disaster.jpeg" alt="Card image cap">
							</figure>
							<div class="card_inner_body">
								<h4 class="card-title">Donate for Disaster Relief</h4>
								<p class="card-text">
									You haven't seen the power of a cyclone till you've seen the calm at the eye.
								</p>
								<br>
								<div class="d-flex justify-content-between donation align-items-center">
								<a class="primary_btn mr-20" href="donation-page.php">Donate Now</a>	
                                    
									<p><span class="lnr lnr-heart"></span> 90+ Peoples Donated</p>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div id="orphanage"  class="col-lg-6 col-md-6">
					<div class="card">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="img/orphanage.jpeg" alt="Card image cap">
							</figure>
							<div class="card_inner_body">
								<h4 class="card-title">Donate For Orphanage</h4>
								<p class="card-text">
									Alone we can do so little, together we can do so much.
								</p>
								<br>
								<div class="d-flex justify-content-between donation align-items-center">
								<a class="primary_btn mr-20" href="donation-page.php">Donate Now</a>
                                    <p><span class="lnr lnr-heart"></span> 80+ Peoples Donated</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
   <center>
	<!--================ End Features Cause section =================-->

	<!--================ Start CTA Area =================-->
	<div class="cta-area section_gap overlay">
		<div class="container">
		<h1>Reviews</h1>
	<div class="row text-center">										
					<div class="col-sm-6 col-md-4">																		
						<div class="testimonial-box">							
							
							<div class="ratings-icons">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							</div>
							<h4>Aanchal Kumar</h4>
							<p>DonateUs is the conception of a brilliant idea that introduces more transparency in donations and better equips both parties in giving and receiving aid in a more effective manner.</p>									 							
							
						</div>					
					</div> <!-- End Col -->								
					
					<div class="col-sm-6 col-md-4">																		
						<div class="testimonial-box">							
						
							<div class="ratings-icons">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							</div>
							<h4>Srivyal Vuyyuri</h4>
							<p>It has been a privilege to be associated with DonateUs from their initial days of establishment. Our donors are very happy that they can now send donations in-kind to our children. We look forward to growing deeper and stronger relationship with DonateUs.</p>									 							
							
						</div>					
					</div> <!-- End Col -->								
					
					<div class="col-sm-6 col-md-4">																		
						<div class="testimonial-box">
							
							<div class="ratings-icons">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							</div>
							<h4>Hari Repala</h4>
							<p>I wanted to help the people in my hometown. I was reluctant to donate money. DonateUs allowed me to donate different products and ensured that it got to the needy in my hometown. Being away from the country, this platform made it possible to make the donation with utmost ease.</p>							</div>					
					</div> <!-- End Col -->								
									
				
				</div>
</div>
	</div>
	<!--================ End CTA Area =================-->

	<!--================ Start footer Area  =================-->	
	<footer>
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-5 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Our Mission</h4>
							<p>
								We are India's first 100% transparent online donation platform for charities, where people can directly donate products needed instead of cash. Our vision is to bring more transparency to online donations, so that we provide an opportunity for every Indian & NRI to give back to the society confidently. We delivered more than 5 Million products worth 10 crores from 75000+ donors to 800+ NGOs across India. Join DonateUs in Delivering Happiness. 
							</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Quick Links</h4>
							<ul class="list">
								<li><a href="index.php">Home</a></li>
								<li><a href="about-us.html">About Us</a></li>
								<li><a href="contact-us.html">Contact Us</a></li>
								<li><a href="privacy-policy.html">Privacy Policy</a></li>
								<li><a href="disclaimer.html">Disclaimer</a></li>
								<li><a href="terms-condition.html">Terms & Conditions</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
							</ul>
						</div>
					</div>
					
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact Us</h4>
							<div class="ml-40">
								<p class="sm-head">
									
									Office
								</p>
								<p>Kaziranga University, Jorhat</p>
	
								<p class="sm-head">
									
									Phone Number
								</p>
								<p>
									+91 700 206 2141
								</p>
	
								<p class="sm-head">
									
									Email
								</p>
								<p>
									subhamparida104@gmail.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;  2019 All rights reserved | <a href="#" target="_blank">DonateUs</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->
	
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/countdown.js"></script>
    
</body>
</html>