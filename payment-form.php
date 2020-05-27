<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  
  font-size: 20px;
}

input[type=submit] {
  background-color: #4CAF50;
  font-size: 20px;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}
        
.container {
  border-radius: 5px;
  
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<body>
        
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a href="index.html"><font size="6" color="white">DonateUs |<sub> Donate for a Life</sub></font></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li> 
								<li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Donate</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="payment-form.php">Blood</a>
										<li class="nav-item"><a class="nav-link" href="file:///C:/Users/newuser/Desktop/DonateUs/index.html#flood">For Flood Victims</a>
										<li class="nav-item"><a class="nav-link" href="file:///C:/Users/newuser/Desktop/DonateUs/index.html#disaster">Disaster Relif</a></li>
                                        <li class="nav-item"><a class="nav-link" href="file:///C:/Users/newuser/Desktop/DonateUs/index.html#orphanage">Orphanage</a></li>
									</ul>
								</li> 
								
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
                    <h2>Donation Page</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->
    
                    <br><center><h2>Your Details</h2>
<p>Please Fill the form and Pay the Amount</p>

<div class="container">
  <form action="/DonateUs/payment.php" method="post">
  <div class="row">
    <div class="col-25">
      <label for="fname"><b>First Name</b></label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="fname" placeholder="Your name.." required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname"><b>Last Name</b></label>
    </div>
    <div class="col-75">
      <input type="text" id="Surname" name="Surname" placeholder="Your last name.." required>
    </div>
  </div>
  <div class="row">      
      <div class="col-25">
      <label for="lname"><b>Your Address</b></label>
    </div>
    <div class="col-75">
      <input type="text" id="Address" name="Address" placeholder="Your Address" required>
    </div>
  </div>
  <div class="row">      
      <div class="col-25">
      <label for="lname"><b>Your Age</b></label>
    </div>
    <div class="col-75">
      <input type="number" id="Age" name="Age" placeholder="Your Age" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country"><b>Your Gender</b></label>
    </div>
    <div class="col-75">
      <select id="gender" name="gender" required>
        <option value="Gender">Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="DonationTypes"><b>Donation Type</b></label>
    </div>
    <div class="col-75">
      <select id="dtype" name="dtype" value="Select Type" required>
        <option value="Blood">Blood Donation</option>
        <option value="Flood">Flood Donation</option>
        <option value="Orphanage">Orphanage</option>
        <option value="Disaster">Disaster</option>
      </select>
    </div>
  </div>
  <div class="row">      
  <div class="col-25">
      <label for="amount"><b>Amount You want to Donate</b></label>
    </div>
    <div class="col-75">
      <input type="number" id="Amount" name="Amount" placeholder="Amount to Donate" required>
    </div>
  </div>
  <div class="row">
  <div class="col-25">
      <label for="lname"><b>Mobile Number</b></label>
    </div>
    <div class="col-75">
      <input type="number" id="MobileNumber" name="MobileNumber" placeholder="Your Mobile Number" required>
    </div>
  </div>
  <div class="row">
  <div class="col-25">
      <label for="lname"><b>Email</b></label>
    </div>
    <div class="col-75">
      <input type="text" id="Email" name="Email" placeholder="Your Email" required>
    </div>
  </div>
 <br> 
 <input type="submit" value="Submit">
 
  </form>
    
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
								<li><a href="index.html">Home</a></li>
								<li><a href="about-us.html">About Us</a></li>
								<li><a href="contact-us.html">Contact Us</a></li>
								<li><a href="privacy-policy.html">Privacy Policy</a></li>
								<li><a href="Disclaimer.html">Disclaimer</a></li>
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
