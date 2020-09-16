<?php

session_start();
?>
<?php
include("conn.php");
$sql="select * from gallery ";
$result=mysqli_query($con, $sql);
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
		<link rel="stylesheet" href="assets\css\style.css">
		<!-- Css Files End -->
		<!-- Lightgallery css -->
		<link rel="stylesheet" href="assets\css\lightgallery.min.css">
		
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
			<!-- Gallery Area Start -->
			<section class="gauto-gallery-area section_70">
         <div class="container">
            <div class="row" id="lightgallery">
			<?php 
		
		while($row=mysqli_fetch_row($result))
{  ?>
               <div class="col-lg-4" data-src="<?php echo '../admin/uploads/gallery/'.$row['2']; ?>">
                  <div class="single-gallery">
                     <div class="img-holder">
                        <img src="<?php echo '../admin/uploads/gallery/'.$row['2']; ?>" alt="gallery 1">
                        <div class="overlay-content">
                           <div class="inner-content">
                              <div class="title-box">
                                 <h3><a href="#"><?php echo strtoupper($row['1']); ?></a></h3>
                              </div>
                           </div>
                        </div>
                        <div class="link-zoom-button">
                           <div class="single-button">
                              <a href="#"><span class="fa fa-link"></span>Details</a>
                           </div>
                           <div class="single-button">
                              <a class="zoom lightbox-image" href="<?php echo '../admin/uploads/gallery/'.$row['2']; ?>">
                              <span class="fa fa-search"></span>Zoom
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
               
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                     <a href="#" class="gauto-btn">More Pictures</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Gallery Area End -->
			
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
		<!--Lightgallery js-->
		<script src="assets\js\lightgallery-all.js"></script>
      <script src="assets\js\custom_lightgallery.js"></script>
		<!-- Js Files End --> 
		
	</body>

<!-- Mirrored from themesjungle.net/html/prime-cab/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:08:28 GMT -->
</html>