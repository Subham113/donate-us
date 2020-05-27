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
										<li class="nav-item"><a class="nav-link" href="file:///C:/Users/newuser/Desktop/DonateUs/index.html#blood">Blood</a>
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
                    <h2>Payment Page</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->
    
                    <br><center><h2>Review</h2>
<p>Please Review Your Entered Data and Pay the Amount</p>

<div class="container">
  <label for="fname"><b>First Name :</b> <?php echo $_POST['fname']; ?></label><br>
  <label for="fname"><b>Last Name :</b> <?php echo $_POST['Surname']; ?></label><br>
  <label for="fname"><b>Your Address :</b> <?php echo $_POST['Address']; ?></label><br>
    <label for="fname"><b>Your Gender :</b> <?php echo $_POST['gender']; ?></label><br>
    <label for="fname"><b>Your Age :</b> <?php echo $_POST['Age']; ?></label><br>
    <label for="fname"><b>Donation Type :</b> <?php echo $_POST['dtype']; ?></label><br>
    <label for="fname"><b>Donation Amount :</b> <?php echo $_POST['Amount']; ?></label><br>
    <label for="fname"><b>Your Mobile Number :</b> <?php echo $_POST['MobileNumber']; ?></label><br>
    <label for="fname"><b>Your Email :</b> <?php echo $_POST['Email']; ?></label><br>
    
 <button id="myBtn">Donate Now</button>

                                <!-- The Modal -->
                                <div id="myModal" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <h4>Scan This QR Code To Pay</h4><br><img src="img/qr.jpeg">
                                    </div>
                                </div>
                                <script>
                                    // Get the modal
                                    var modal = document.getElementById("myModal");

                                    // Get the button that opens the modal
                                    var btn = document.getElementById("myBtn");

                                    // Get the <span> element that closes the modal
                                    var span = document.getElementsByClassName("close")[0];

                                    // When the user clicks the button, open the modal 
                                    btn.onclick = function() {
                                        modal.style.display = "block";
                                    }

                                    // When the user clicks on <span> (x), close the modal
                                    span.onclick = function() {
                                        modal.style.display = "none";
                                    }

                                    // When the user clicks anywhere outside of the modal, close it
                                    window.onclick = function(event) {
                                        if (event.target == modal) {
                                            modal.style.display = "none";
                                            }
                                    }
                                </script> <br>
</div></center>
 
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

<?php
                        $conn = new mysqli("localhost","root","","donateus");

                       if (!$conn)
                        {
                           die('Could not connect: ' . mysql_error());
                        }

                        $FirstName=$_POST['fname']; 
                        $Surname=$_POST['Surname'];
                        $Age=$_POST['Age'];
                        $Gender1=$_POST['gender'];
                        $UAddress1=$_POST['Address'];
                        $DType=$_POST['dtype'];
                        $Amount=$_POST['Amount'];
                        $MobileNumber=$_POST['MobileNumber'];
                        $Email=$_POST['Email'];
                        $result="INSERT INTO donors (fname,lname,age,Genders,address,amount,DonationTypes,mnumber,email) VALUES ('$FirstName','$Surname','$Age','$Gender1','$UAddress1','$Amount','$DType','$MobileNumber','$Email')";

                        if($conn->query($result))
                        {
                           echo "worked";
                           
                        }else{
                           echo "Error: " .$result ."<br>". $conn->error;
                        }

?>
