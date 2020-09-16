<?php

session_start();
?>
<?php
include("conn.php");
 $query= "select * from cont";
 $result=mysqli_query($con,$query);
 foreach($result as $row)
 {
?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themesjungle.net/html/prime-cab/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:08:28 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="description" content="City Taxi">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>City Taxi</title>

        <!-- Css Files Start -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/fontawesome-all.min.css" rel="stylesheet">
		<link id="switcher" href="css/color.css" rel="stylesheet">
		<link href="css/color-switcher.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/icomoon.css" rel="stylesheet">
		<!-- Css Files End -->
		
		<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

    </head>
	<body>
		<!--Wrapper Content Start-->
		<div class="tj-wrapper">
			
			<!--Style Switcher Section Start-->
			
			<?php include 'menu.php';?>
			<!--Header Content End-->
			
			<!--Inner Banner Section Start-->
	    	
			<!--Inner Banner Section End-->
			
			<!--Breadcrumb Section Start-->
	    	<div class="tj-breadcrumb">
				<div class="container">
					<ul class="breadcrumb-list">
						<li><a href="index.php">Home</a></li>
						<li class="active">Contactus</li>
					</ul>
				</div>
	    	</div>
			<!--Breadcrumb Section End-->	
			
			<!--Map Content Start-->
				
			<!--Map Content End-->
			<!--Contact Section Start-->	
			<section class="tj-contact-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="tj-heading-style">
								<h3>Contact Us</h3>
								<p>Lorem Ipsum passages, and more recently with desktop publishing software like aldus pageMaker including versions of all the Lorem Ipsum generators</p>
							</div>
						</div>
						<div class="col-md-8 col-sm-8">
							<div class="form-holder">
								<form method="POST" class="tj-contact-form" id="contact-form">
									<div class="row">
										<div class="col-md-6 col-sm-6">
											<!--Inner Holder Start-->
											<div class="inner-holder">
												<label for="name">Name</label>
												<input placeholder="Enter Your Name" name="name" type="text" id="name" required>
											</div>
											<!--Inner Holder End-->
										</div>
										<div class="col-md-6 col-sm-6 no-pad">
											<!--Inner Holder Start-->
											<div class="inner-holder">
												<label for="email">Email</label>
												<input placeholder="Enter Your Email" name="email" type="email" id="email">
											</div>
											<!--Inner Holder End-->
										</div>
										<div class="col-md-12 col-sm-12">
											<!--Inner Holder Start-->
											<div class="inner-holder">
												<label for="subject">Subject</label>
												<input placeholder="Your Subject" name="subject" type="text" id="subject">
											</div>
											<!--Inner Holder End-->
										</div>
										<div class="col-md-12 col-sm-12">
											<!--Inner Holder Start-->
											<div class="inner-holder">
												<label for="message">Message</label>
												<textarea name="message" placeholder="Your Message" id="message"></textarea>
											</div>
											<!--Inner Holder End-->
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="inner-holder">
												<button class="btn-submit" type="submit" id="frm_submit_btn">Send Message <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="address-box">
								<div class="add-info">
									<span class="icon-map icomoon"></span>
									<p><?php echo $row['addr'] ?></p>
								</div>
								<div class="add-info">
									<span class="icon-phone icomoon"></span>
									<p>
										<a href="tel:<?php echo $row['mno'] ?>"><?php echo $row['mno'] ?></a>
										
									</p>
								</div>
								<div class="add-info">
									<span class="icon-mail-envelope-open icomoon"></span>
									<p>
										<a href="mailto:<?php echo $row['email'] ?>">
										<?php echo $row['email'] ?></a>
										
									</p>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</section>
			<!--Contact Section End-->	
			<!--Call To Action Content Start-->
			<section class="tj-cal-to-action">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<div class="cta-box">
								<img src="images/cta-icon1.png" alt=""/>
								<div class="cta-text">
									<strong>Best Price Guaranteed</strong>
									<p>A more recently with desktop softy  like aldus page maker.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="cta-box">
								<img src="images/cta-icon2.png" alt=""/>
								<div class="cta-text">
									<strong>24/7 Customer Care</strong>
									<p>A more recently with desktop softy  like aldus page maker.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="cta-box">
								<img src="images/cta-icon3.png" alt=""/>
								<div class="cta-text">
									<strong>Easy Bookings</strong>
									<p>A more recently with desktop softy  like aldus page maker.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Call To Action Content End-->
			<!--Footer Content Start-->
			<?php include 'footer.php';?>
			<!--Footer Copyright End-->
		</div>
		<!--Wrapper Content End-->
		
		<!-- Js Files Start --> 
		<script src="js/jquery-1.12.5.min.js"></script>
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/migrate.js"></script>  
		<script src="js/map.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6jA7zgSOl8PDIEhtHL4nmOvGCLezPYn4"></script>
		<script src="js/tweetie.js"></script> 
		<script src="js/jquery.validate.min.js"></script> 
		<script src="js/custom.js"></script> 
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<!-- Js Files End --> 
		
	</body>

<!-- Mirrored from themesjungle.net/html/prime-cab/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:08:28 GMT -->
</html>