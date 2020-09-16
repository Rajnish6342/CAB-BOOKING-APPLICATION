<?php

session_start();
?>
<?php
include("conn.php");
$sql="select * from vehicle where v_status='0'";
$result=mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themesjungle.net/html/prime-cab/home-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:06:28 GMT -->
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
		<link href="css/owl.carousel.css" rel="stylesheet">
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
			
			
			<?php include 'menu.php';?>
			<!--Header Content End-->
			
			<!--Slider Section Start-->
			<div class="tj-slider">
				<div class="tj-cab-slider" id="cab-slider">
					<!--Slider Item Content Start-->
					<div class="slide-item">
						<img src="images/slider_img1.jpg" alt=""/>
						<div class="slide-caption">
							<div class="container">
								<div class="slide-inner">
									<strong>So, where are you going to travel today !!!</strong>
									<h2>Travel east to west & enjoy several famous <br/> road trip destinations</h2>
									<div class="slide-btns">
										<a href="aboutus.php" class="btn-style-1">About us <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
										<a href="fleet-grid.php" class="btn-style-2">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Slider Item Content End-->
					<!--Slider Item Content Start-->
					<div class="slide-item">
						<img src="images/slider_img4.jpg" alt=""/>
						<div class="slide-caption">
							<div class="container">
								<div class="slide-inner">
									<strong>Keeping You And Your Family Safe!</strong>
									<h2>The Affordable Way To Keep You <br> Connected To Life</h2>
									<div class="slide-btns">
										<a href="aboutus.php" class="btn-style-1">About us <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
										<a href="fleet-grid.php" class="btn-style-2">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Slider Item Content End-->
					<!--Slider Item Content Start-->
					<div class="slide-item">
						<img src="images/slider_img3.jpg" alt=""/>
						<div class="slide-caption">
							<div class="container">
								<div class="slide-inner">
									<strong>Safety Is Our First Priority!!</strong>
									<h2>Reducing distances, increasing convenience</h2>
									<div class="slide-btns">
										<a href="aboutus.php" class="btn-style-1">About us <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
										<a href="fleet-grid.php" class="btn-style-2">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Slider Item Content End-->
				</div>
			</div>
			<!--Slider Section End-->
			
			<!--Services Section Start-->
			<section class="tj-services">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<div class="tj-heading-style">
								<h3>Awesome Services</h3>
							</div>
							<!--Service Outer Start-->
							<div class="tj-service-outer">
								<!--Service Item Start-->
								<div class="service-item">
									<img src="images/service_icon1.png" alt=""/>
									<div class="service-info-box">
										<h4>Restaurants</h4>
										<p>A more recently with desktop softy too aldus page maker and more recently desk publishing software.</p>
									</div>
								</div>
								<!--Service Item End-->
								<!--Service Item Start-->
								<div class="service-item">
									<img src="images/service_icon2.png" alt=""/>
									<div class="service-info-box">
										<h4>Airports</h4>
										<p>A more recently with desktop softy too aldus page maker and more recently desk publishing software.</p>
									</div>
								</div>
								<!--Service Item End-->
								<!--Service Item Start-->
								<div class="service-item">
									<img src="images/service_icon3.png" alt=""/>
									<div class="service-info-box">
										<h4>Beaches</h4>
										<p>A more recently with desktop softy too aldus page maker and more recently desk publishing software.</p>
									</div>
								</div>
								<!--Service Item End-->
								<!--Service Item Start-->
								<div class="service-item">
									<img src="images/service_icon4.png" alt=""/>
									<div class="service-info-box">
										<h4>Hospitals</h4>
										<p>A more recently with desktop softy too aldus page maker and more recently desk publishing software.</p>
									</div>
								</div>
								<!--Service Item End-->
							</div>
							<!--Service Outer End-->
						</div>
						<!--Service Ad Box Section Start-->
						<div class="col-md-4 col-sm-4">
							<div class="service-ad-box">
								<div class="fleet-box">
									<img src="images/fleet-banner.jpg" alt=""/>
									<div class="ad-info">
										<h4>Earn Money With us</h4>
										<strong class="price">₹</strong>
										<h5>on riding Prime Cab</h5>
										<div class="book_fleet">
											<a href="dlogin.php">Drive Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Service Ad Box Section End-->
					</div>
				</div>
			</section>
			<!--Services Section End-->
			
			<!--Promo Offer Section Start-->
		
			<!--Promo Offer Section End-->
			
			<!--Cab Collection Section Start-->
			<section class="tj-cab-collection">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="tj-heading-style">
								<h3>Cab Collections</h3>
								<p>Lorem Ipsum passages, and more recently with desktop publishing software like aldus pageMaker including versions.</p>
							</div>
						</div>
						<div class="cab-col-outer">
							<!--Fleet Grid Box Start-->
									
							<?php 
		
		while($row=mysqli_fetch_row($result))
{  ?>	
	<!--Fleet Grid Box Start-->
	<div class="col-md-6 col-sm-6">
		<div class="fleet-grid-box">
			<!--Fleet Grid Thumb Start-->
			<figure class="fleet-thumb">
				<img src="<?php echo '../admin/uploads/vehicle/'.$row['8']; ?>" alt="">
				<figcaption class="fleet-caption">
					<div class="price-box">
						<strong><?php echo $row['5'];?>₹ <span>/ Km</span></strong>
					</div>
					<span class="rated"><?php echo $row['2'];?></span>
				</figcaption>
			</figure>
			<!--Fleet Grid Thumb End-->
			<!--Fleet Grid Text Start-->
			<div class="fleet-info-box">
				<div class="fleet-info">
					<h3><?php echo $row['9'];?></h3>
					
					
					<ul class="fleet-meta">
						<li><i class="fas fa-taxi"></i><?php echo $row['1'];?></li>
						<li><i class="fas fa-user-circle"></i><?php echo $row['4'];?> Passengers</li>
						<li><i class="fas fa-window-close"></i><?php echo $row['6'];?>₹</li>
					</ul>
				</div>
				<a href="booking-form.php?carid=<?php echo $row[0];?>&price=<?php echo $row['6'];?>" class="tj-btn">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
			</div>
			<!--Fleet Grid Text End-->
		</div>
	</div>
	<?php } ?>
									<!--Fleet Grid Text End-->
								</div>
							</div>
							<!--Fleet Grid Box End-->
							
							
							
							
							
						</div>
					</div>
				</div>
			</section>
			<!--Cab Collection Section End-->
			
			<!--Cabs Trip Section Start-->
		
			<!--Cabs Trip Section End-->
			
			<!--Facts Section Content Start-->
			<section class="tj-facts">
				<div class="container">
					<div class="row">
						<!--Facts Info Content Start-->
						<div class="col-md-4 col-sm-4">
							<div class="tj-heading-style">
								<h3>Amazing Facts</h3>
								<p>Lorem Ipsum passages, and more recently with desktop publishing software like aldus pageMaker.</p>
							</div>
						</div>
						<!--Facts Info Content End-->
						<!--Client Facts Content Start-->
						<div class="col-md-8 col-sm-8">
							<div class="facts-outer">
								<div class="row">
									<!--Fact Box Content Start-->
									<div class="col-md-4 col-sm-4">
										<div class="fact-box">
											<strong class="fact-counter">100</strong>
											<i class="fa fa-percent"></i>
											<span>Happy Customer</span>
										</div>
									</div>
									<!--Fact Box Content End-->
									<!--Fact Box Content Start-->
									<div class="col-md-4 col-sm-4">
										<div class="fact-box">
											<strong class="fact-counter">200</strong>
											<i class="fas fa-plus"></i>
											<span>Luxury Cars</span>
										</div>
									</div>
									<!--Fact Box Content End-->
									<!--Fact Box Content Start-->
									<div class="col-md-4 col-sm-4">
										<div class="fact-box">
											<strong class="fact-counter">12,000</strong>
											<i class="fas fa-arrow-up"></i>
											<span>Kilometers Driven</span>
										</div>
									</div>
									<!--Fact Box Content End-->
								</div>
							</div>
						</div>
						<!--Client Facts Content End-->
					</div>
				</div>
			</section>
			<!--Facts Section Content End-->
			
			<!--Clients FAQ Section Start-->
			
			<!--Clients FAQ Section End-->
					
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
			
			<!--News Content Start-->
			
			<!--News Content End-->
			
			<!--Footer Content Start-->
			<?php include 'footer.php';?>
			
			<!--Footer Copyright End-->
		</div>
		<!--Wrapper Content End-->
		
		<!-- Js Files Start --> 
		<script src="js/jquery-1.12.5.min.js"></script>
		<script src="js/migrate.js"></script>  
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/owl.carousel.min.js"></script>		
		<script src="js/jquery.counterup.min.js"></script>	
		<script src="js/waypoints.min.js"></script>
		<script src="js/tweetie.js"></script>
		<script src="js/custom.js"></script>
		<!-- Js Files End --> 
	</body>

<!-- Mirrored from themesjungle.net/html/prime-cab/home-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:06:50 GMT -->
</html>