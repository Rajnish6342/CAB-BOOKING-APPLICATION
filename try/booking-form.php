<?php
session_start();
if(strlen($_SESSION['login'])==0)
  { 
header('location:login.php');
}
?>





<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themesjungle.net/html/prime-cab/booking-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:08:17 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="description" content="City Taxi">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>City Taxi</title>

        <!-- Css Files Start -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
		<link href="css/fontawesome-all.min.css" rel="stylesheet">
		<link id="switcher" href="css/color.css" rel="stylesheet">
		<link href="css/color-switcher.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<!-- Css Files End -->
		
		<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbPvIwaEogX5LlKgBduBGQuUEmh2AUsfQ&libraries=places"></script>
		<script>
		
			var searchInput1 = 'point_start_loc';
		
		$(document).ready(function () {
			
			
			var autocomplete;
			autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput1)), {
				componentRestrictions: {
				country: "IN"
			}
		
				
			});
			
		   
		});
		var searchInput = 'point_end_loc';
		
		$(document).ready(function () {
			
			
			var autocomplete;
			autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
				componentRestrictions: {
				country: "IN"
			}
		
				
			});
			
		   
		});
				</script>
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
	    			<h2>Booking Form</h2>
	    		</div>
	    	</div>
			<!--Inner Banner Section End-->
			
			<!--Breadcrumb Section Start-->
	    	<div class="tj-breadcrumb">
				<div class="container">
					<ul class="breadcrumb-list">
						<li><a href="index.php">Home</a></li>
						<li class="active">Booking Form</li>
					</ul>
				</div>
	    	</div>
			<!--Breadcrumb Section End-->	
			
		<!--Booking Form Section Start-->	
		
			<section class="tj-booking-frm">
				<div class="container">
					<div class="row">
					
						<div class="col-md-8 col-sm-12">
							<div class="tj-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#point" data-toggle="tab">Point to Point</a></li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane active" id="point">
									<form class="booking-frm" method="POST" id="ride-bform">
									<input type="hidden" name="carid" id="carid" value="<?php echo $_REQUEST['carid'];?>">
									<input type="hidden" name="price" id="price" value="<?php echo $_REQUEST['price'];?>">
									
										<div class="col-md-12 col-sm-12">
											<strong>Picking Up</strong>
											<div class="field-holder">
												<span class="fas fa-map-marker-alt"></span>
												<input id="point_start_loc" type="text" name="pickup_loc" placeholder="Pickup Location">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="field-holder">
												<span class="fas fa-calendar-alt"></span>
												<input type="text" name="pickup_date" placeholder="Select your Date" id="pickup_date">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="field-holder">
												<span class="far fa-clock"></span>
												<input type="text" name="pickup_time" placeholder="Select Timings" id="pickup_time">
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<strong>Dropoff</strong>
											<div class="field-holder">
												<span class="fas fa-map-marker-alt"></span>
												<input type="text" id="point_end_loc" name="dropoff_loc" placeholder="Pickup Location">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="field-holder">
												<span class="fas fa-calendar-alt"></span>
												<input type="text" name="dropoff_date" id="dropoff_date" placeholder="Select your Date">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="field-holder">
												<span class="far fa-clock"></span>
												<input type="text" name="dropoff_time" placeholder="Select Timings" id="dropoff_time" >
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<p class="ride-terms">I understand and agree with the <a href="policy.html">Terms</a> of Service and Cancellation </p>
											<label for="book_terms">
												<input name="book_terms" id="book_terms" type="checkbox" checked>
											</label>
										</div>
										<div class="col-md-12 col-sm-12">
											<button type="submit" name="submit" class="book-btn">Next Step <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
										</div>
									</form>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-12">
							<div class="booking-summary">
								<h3>Booking Summary</h3>
								<ul class="booking-info">
									<li><span>Booking Reference: </span><div class="book-ref"></div></li></ul>
									<ul class="service-info">
									<li><span>Carid: </span><div class="carid info-outer">/div></li>
									<li><span>Price Per Km: </span><div class="price info-outer"></div></li>
									<li><span>From: </span><div class="startup_loc info-outer">Enter Startup Location</div></li>
									<li><span>To: </span><div class="end_loc info-outer">Enter Destination</div></li>
									<li><span>Pickup Date: </span><div class="pick_date info-outer">Enter Pickup Date</div></li>
									<li><span>Pickup Time: </span><div class="pick_time info-outer">Enter Pickup Time</div></li>
									<li><span>Dropoff Date: </span><div class="drop_date info-outer">Enter Dropoff Date</div></li>
									<li><span>Dropoff Time: </span><div class="drop_time info-outer">Enter Dropoff Time</div></li>
								</ul>
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
		<script src="js/moment.js"></script> 
		<script src="js/bootstrap-datetimepicker.min.js"></script> 
		<script src="js/jquery.validate.min.js"></script> 
		<script src="js/migrate.js"></script>  
		<script src="js/color-switcher.js"></script>
		<script src="js/tweetie.js"></script> 
		<script src="js/custom.js"></script> 
		<!-- Js Files End --> 
	</body>

<!-- Mirrored from themesjungle.net/html/prime-cab/booking-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:08:26 GMT -->
</html>