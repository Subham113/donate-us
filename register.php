<?php
// Starting Session
$error ='';
//if session exit, user nither need to signin nor need to signup
if(isset($_SESSION['login_id'])){
  header("location: index.php"); // Redirecting To Profile Page
}
include('session.php');
$profile = '<div class="nav-item active"><li class="nav-item submenu dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account</a><br>
<ul class="dropdown-menu">
<li class="nav-item"><a class="nav-link" href="login.php">Login</a>
<li class="nav-item"><a class="nav-link" href="register.php">Register</a></ul></li>
</div>';
//Register progess start, if user press the signup button
if (isset($_POST['signUp'])) {
if (empty($_POST['fullName']) || empty($_POST['email']) || empty($_POST['newPassword'])) {
$error= "Please fill up all the required field.";
}
else
{

$fullName = $_POST['fullName'];
$email = $_POST['email'];
$password = $_POST['newPassword'];
$mnumber = $_POST['mnumber'];
$gender = $_POST['gender'];
$bday = $_POST['bday'];
$address = $_POST['address'];

// Make a connection with MySQL server.
include('config.php');
$sQuery = "SELECT id from users where email=? LIMIT 1";
$iQuery = "INSERT Into users (fullName, email, password, mnumber, gender, dob, address) values(?, ?, ?, ?, ?, ?, ?)";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($sQuery);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($id);
$stmt->store_result();
$rnum = $stmt->num_rows;

if($rnum==0) { //if true, insert new data
          $stmt->close();
          
          $stmt = $conn->prepare($iQuery);
    	  $stmt->bind_param("sssssss", $fullName, $email, $password, $mnumber, $gender, $bday, $address);
          if($stmt->execute()) {
        $error = 'Register successfully, Please <a href="login.php">Login</a> with your login details';}
        } else { 
        $error = 'Someone already register with this email address.';
     }
$stmt->close();
$conn->close(); // Closing database Connection
}
}

?> 

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Register | DonateUs</title>
        <link rel="stylesheet" href="css/auth.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    
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
						<a href="index.php"><font size="6" color="white">DonateUs |<sub> Donate for a Life</sub></font></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li> 
								<li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Donate</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="donation-page.php">Blood</a>
										<li class="nav-item"><a class="nav-link" href="donation-page.php">For Flood Victims</a>
										<li class="nav-item"><a class="nav-link" href="donation-page.php">Disaster Relif</a></li>
                                        <li class="nav-item"><a class="nav-link" href="donation-page.php">Orphanage</a></li>
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
                    <h2>Registration Page</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->
    
    <br>
<center>
<strong style = "font-size:29px; color:#ff9800"><p>Let's create your account</p></strong>
<div class="rlform">
  <div class="rlform rlform-wrapper">
   <div class="rlform-box">
	<div class="rlform-box-inner">
	 <form method="post" oninput='validatePassword()'>
         
    <div style = "font-size:22px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
     <div class="rlform-group">
	  <br><label>Full Name</label>
	  <input type="text" name="fullName" class="rlform-input" required>
	 </div>
		
	 <div class="rlform-group">					
	  <label>Email</label>
	  <input type="email" name="email" class="rlform-input" required>
	 </div>
		
	 <div class="rlform-group">					
	  <label>Password</label>
	  <input type="password" name="newPassword" id="newPass" class="rlform-input" required>
     </div>

     <div class="rlform-group">
	  <label>Conform password</label>
	  <input type="password" name="conformpassword" id="conformPass" class="rlform-input" required>
     </div>
     
     <div class="rlform-group">
	  <label>Phone Number</label>
	  <input type="number" name="mnumber" id="mnumber" class="rlform-input">
     </div>
         <!-- Radio Button of Gender -->
     <input type="radio" name="gender" value="male" checked><strong style = "font-size:22px; color:#ff9800"> Male</strong> 
     <input type="radio" name="gender" value="female"><strong style = "font-size:22px; color:#ff9800"> Female</strong>
     <input type="radio" name="gender" value="other"><strong style = "font-size:22px; color:#ff9800"> Others</strong> 
         <!-- End of Radio Button of Gender -->
         <br><br><strong style = "font-size:22px; color:#ff9800"> Birthday:  </strong>
     <br> <input type="date" name="bday" class="rlform-input"><br><br>
      <div class="rlform-group">
	  <label>Address </label>
	  <input type="text" name="address" class="rlform-input" required>
	 </div>   
	  <button class="rlform-btn" name="signUp">Sign Up
	  </button>

	  <div class="text-foot">
	   Already have an account? <a href="login.php">Login</a>
	  </div>
	 </form>
	</div>
   </div>
  </div>
 </div>

	<script>
		function validatePassword(){
  if(newPass.value != conformPass.value) {
    conformPass.setCustomValidity('Passwords do not match.');
  } else {
    conformPass.setCustomValidity('');
  }
}
	</script>
        
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
