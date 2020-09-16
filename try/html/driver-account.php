
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themesjungle.net/html/prime-cab/user-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:08:28 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="description" content="Prime Cab HTML5 Responsive Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prime Cab HTML5 Responsive Template</title>

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
	    			<h2>User Account</h2>
	    		</div>
	    	</div>
			<!--Inner Banner Section End-->
			
			<!--Breadcrumb Section Start-->
	    	<div class="tj-breadcrumb">
				<div class="container">
					<ul class="breadcrumb-list">
						<li><a href="home-1.html">Home</a></li>
						<li class="active">User Account</li>
					</ul>
				</div>
	    	</div>
			<!--Breadcrumb Section End-->
			
			
			<!--User Account Section Start-->	
			<section class="tj-account-frm">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="tj-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#user_account" data-toggle="tab"><i class="far fa-user"></i> My Account</a></li>
									<li ><a href="booking-history.php" ><i class="far fa-user"></i> Bookings</a></li>
									
									<li><a href="#payment_history" data-toggle="tab"><i class="far fa-credit-card"></i> Payment History</a></li>
									<li><a href="booking-cancel.php" ><i class="fas fa-times"></i> Cancel Booking</a></li>
									<li><a href="logout.php" ><i class="fas fa-sign-out-alt"></i> Logout</a></li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane active" id="confirm_booking">
									<form class="account-frm" method="POST">
									<?php
										
										include("conn.php");
										$email=$_SESSION['login'];
										$query= "select * from users where uemail='$email'";
										$result=mysqli_query($con,$query);
										foreach($result as $row)
										{
										?>
										<div class="col-md-6 col-sm-6">
											<div class="account-field">
												<label>Name</label>
												<span class="far fa-user"></span>
												<input type="text" name="fname" placeholder="Enter  Name" disabled value="<?php echo $row['uname'] ?>">
											</div>
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="account-field">
												<label>Phone</label>
												<span class="icon-phone icomoon"></span>
												<input type="tel" name="phone_num" placeholder="Enter Phone Number" value="<?php echo $row['uno'] ?>" disabled> 
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="account-field">
												<label>Email</label>
												<span class="far fa-envelope"></span>
												<input type="email" name="email_id" placeholder="Enter Email id" disabled value="<?php echo $row['uemail'] ?>">
											</div>
										</div>
										<?php } ?>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--User Account Section End-->	
			
			
			
	
			
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
		<script src="js/tweetie.js"></script> 
		<script src="js/color-switcher.js"></script>
		<script src="js/custom.js"></script> 
		<!-- Js Files End --> 
	</body>

<!-- Mirrored from themesjungle.net/html/prime-cab/user-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:08:28 GMT -->
</html>