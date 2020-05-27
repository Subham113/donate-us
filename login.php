<?php
 // Starting Session
include('session.php');
$error ='';
//if session exit, user nither need to signin nor need to signup
if(isset($_SESSION['login_id'])){
  header("location: index.php"); // Redirecting To Profile Page
}

$profile = '<div class="nav-item active"><li class="nav-item submenu dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account</a><br>
<ul class="dropdown-menu">
<li class="nav-item"><a class="nav-link" href="login.php">Login</a>
<li class="nav-item"><a class="nav-link" href="register.php">Register</a></ul></li>
</div>';
//Login progess start, if user press the signin button
if (isset($_POST['signIn'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Email & Password Field should not be empty";
}
else
{

$email = $_POST['email'];
$password = $_POST['password'];

// Make a connection with MySQL server.
include('config.php');


$sQuery = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($conn,$sQuery);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $email and $password, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_id'] = $email;
         header("location: index.php");
      }else {
         $error = "Your Entered Email or Password is invalid";
      }    
    
    }
	
}?>


<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login | DonateUs</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <!-- External Links CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
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
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Login Page</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->
    
    <br>
<center>
<strong style = "font-size:22px; color:#ff9800"><p>Sign in to continue</p></strong>
<div class="rlform">
  <div class="rlform rlform-wrapper">
   <div class="rlform-box">
    <div class="rlform-box-inner">
   <form method="post">
    
    <div style = "font-size:22px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
    <div class="rlform-group">
     <label>Email</label>
     <input type="email" name="email" class="rlform-input" required>
    </div>

    <div class="rlform-group password-group">
     <label>Password</label>
     <input type="password" name="password" class="rlform-input" required>
    </div>

    <button type="submit" class="rlform-btn" name="signIn">Sign In
    </button>

    <div class="text-foot">
    Don't have an account? <a href="register.php">Register</a>
    </div>
   </form>
  </div>
   </div>
     </div>
 </div>
        
</center>
    <br>                
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

    </body>
</html>
