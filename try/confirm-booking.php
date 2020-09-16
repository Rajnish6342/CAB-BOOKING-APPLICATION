<?php
session_start();
if(strlen($_SESSION['login'])==0)
  { 
header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themesjungle.net/html/prime-cab/confirm-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:08:26 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="description" content="City Taxi">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>City Taxi</title>

        <!-- Css Files Start -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/fontawesome-all.min.css" rel="stylesheet">
		<link href="css/icomoon.css" rel="stylesheet">
		<link id="switcher" href="css/color.css" rel="stylesheet">
		<link href="css/color-switcher.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
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
			
			<!--Style Switcher Section End-->
			<?php include 'menu.php';?>
			<!--Header Content End-->
			
			<!--Inner Banner Section Start-->
	    	<div class="tj-inner-banner">
	    		<div class="container">
	    			<h2>Confirm Booking</h2>
	    		</div>
	    	</div>
			<!--Inner Banner Section End-->
			
			<!--Breadcrumb Section Start-->
	    	<div class="tj-breadcrumb">
				<div class="container">
					<ul class="breadcrumb-list">
						<li><a href="index.php">Home</a></li>
						<li><a href="booking-form.html">Booking Form</a></li>
						<li class="active">Confirm Booking</li>
						<li><a href="payment.html">Payment</a></li>
					</ul>
				</div>
	    	</div>
			<!--Breadcrumb Section End-->	
			
			
			<!--Booking Form Section Start-->	
			<section class="tj-user-bfrm">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-12">
							<div class="tj-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#confirm_booking" data-toggle="tab">Confirm Booking</a></li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane active" id="confirm_booking">
								<?php
										
										include("conn.php");
										
										$email=$_SESSION['login'];
										$query= "select * from users where uemail='$email'";
										$result=mysqli_query($con,$query);
										foreach($result as $row)
										{
										?>
									<form class="cb-frm" method="POST" id="rider-info">
										<div class="col-md-12 col-sm-12">
											<div class="info-field">
												<label>Full Name</label>
												<span class="far fa-user"></span>
												<input type="text" id="username" placeholder="Enter Full Name" disabled value="<?php echo $row['uname'] ?>">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="info-field">
												<label>Phone</label>
												<span class="icon-phone icomoon"></span>
												<input type="tel" id="phone_num" placeholder="Enter Phone Number"value="<?php echo $row['uno'] ?>" >
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="info-field">
												<label>Email</label>
												<span class="far fa-envelope"></span>
												<input type="email" id="email_id" placeholder="Enter Email id" disabled value="<?php echo $row['uemail'] ?>">
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<a href="booking-form.php" class="back-btn"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Go Back</a>
											<button type="submit" class="book-btn" id="ride-bbtn">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
										</div>
									</form>
										<?php } ?>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="booking-summary">
								<h3>Booking Summary</h3>
								<ul class="booking-info">
									<li><span>Booking Reference: </span><div class="book-ref"></div></li>
									
								</ul>
								
								<ul class="service-info">
								<li><span>Carid: </span><div class="carid info-outer"></div></li>
								<li><span>Price Per Km: </span><div class="price info-outer"></div></li>
									<li><span>From: </span><div class="startup_loc info-outer">Enter Startup Location</div></li>
									<li><span>To: </span><div class="end_loc info-outer">Enter Destination</div></li>
									<li><span>Pickup Date: </span><div class="pick_date info-outer">Enter Pickup Date</div></li>
									<li><span>Pickup Time: </span><div class="pick_time info-outer">Enter Pickup Time</div></li>
									<li><span>Dropoff Date: </span><div class="drop_date info-outer">Enter Dropoff Date</div></li>
									<li><span>Dropoff Time: </span><div class="drop_time info-outer">Enter Dropoff Time</div></li>
								</ul>
								<div class="fare-box">
									<strong>Trip Estimation</strong>
									<span class="trip_est">Not Available</span>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!--Booking Form Section End-->	
			
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
		<script src="js/jquery.validate.min.js"></script> 
		<script src="js/migrate.js"></script>  
		<script src="js/color-switcher.js"></script>
		<script src="js/tweetie.js"></script> 
		<script src="js/custom.js"></script> 
		<!-- Js Files End --> 
	</body>

<!-- Mirrored from themesjungle.net/html/prime-cab/confirm-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:08:26 GMT -->
</html>