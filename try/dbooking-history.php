<?php
session_start();
if(strlen($_SESSION['dlogin'])==0)
  { 
header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themesjungle.net/html/prime-cab/booking-cancel.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:08:28 GMT -->
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
		<link href="css/histry.css" rel="stylesheet">
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
			<?php include 'dmenu.php';?>
			<!--Header Content End-->
			
			<!--Inner Banner Section Start-->
	    	<div class="tj-inner-banner">
	    		<div class="container">
	    			<h2>Bookings</h2>
	    		</div>
	    	</div>
			<!--Inner Banner Section End-->
			
			<!--Breadcrumb Section Start-->
	    	<div class="tj-breadcrumb">
				<div class="container">
					<ul class="breadcrumb-list">
						<li><a href="index.php">Home</a></li>
						<li class="active">Bookings</li>
					</ul>
				</div>
	    	</div>
			<!--Breadcrumb Section End-->
			
			
			<!--Booking Cancel Section Start-->	
			<section class="tj-account-frm">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="tj-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li><a href="driver-account.php" ><i class="far fa-user"></i> My Account</a></li>
									<li class="active"><a href="booking-history.php" ><i class="far fa-user"></i> Bookings</a></li>
									<li><a href="dlogout.php" ><i class="fas fa-sign-out-alt"></i> Logout</a></li>
								</ul>
							</div>
						

							<section class="user_profile inner_pages">
							  	<div class="container">
							
								<div class="row">
										<div class="col-md-3 col-sm-3">
											<div class="profile_nav">
											<ul>
            <li><a href="dbooking-history.php">Active Bookings</a></li>
              <li><a href="completed-history.php">Completed Bookings</a></li>
           
            
            <li><a href="dlogout.php">Sign Out</a></li>
          </ul>
											</div>
										</div>
									<div class="col-md-6 col-sm-8">
									<div class="profile_wrap">
									<h5 class="uppercase underline">Bookings <span></span></h5>
									<div class="my_vehicles_list">
										<ul class="vehicle_listing">
										<?php 
										include('conn.php');
										function getDistance($addressFrom, $addressTo, $unit = ''){
											// Google API key
											$apiKey = 'AIzaSyBfGxO7JyIAL7ZtJFPABzHpVhXbCeBEx9Y';
											
											// Change address format
											$formattedAddrFrom    = str_replace(' ', '+', $addressFrom);
											$formattedAddrTo     = str_replace(' ', '+', $addressTo);
											
											// Geocoding API request with start address
											$geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false&key='.$apiKey);
											$outputFrom = json_decode($geocodeFrom);
											if(!empty($outputFrom->error_message)){
												return $outputFrom->error_message;
											}
											
											// Geocoding API request with end address
											$geocodeTo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrTo.'&sensor=false&key='.$apiKey);
											$outputTo = json_decode($geocodeTo);
											if(!empty($outputTo->error_message)){
												return $outputTo->error_message;
											}
											
											//Get latitude and longitude from the geodata
											$latitudeFrom    = $outputFrom->results[0]->geometry->location->lat;
											$longitudeFrom    = $outputFrom->results[0]->geometry->location->lng;
										   $latitudeTo        = $outputTo->results[0]->geometry->location->lat;
											$longitudeTo    = $outputTo->results[0]->geometry->location->lng;
											
											// Calculate distance between latitude and longitude
											$theta    = $longitudeFrom - $longitudeTo;
											$dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
											$dist    = acos($dist);
											$dist    = rad2deg($dist);
											$miles    = $dist * 60 * 1.1515;
											
											// Convert unit and return distance
											$unit = strtoupper($unit);
											if($unit == "K"){
												return round($miles * 1.609344, 2).' km';
											}elseif($unit == "M"){
												return round($miles * 1609.344, 2).' meters';
											}else{
												return round($miles, 2).' miles';
											}
										}
                    $email=$_SESSION['dlogin'];
                    $sql = "SELECT vehicle.v_img as Vimage1,bookings.start_loc,bookings.end_loc,bookings.book_ref,bookings.pickup_time,bookings.pickup_date,bookings.bk_status,bookings.price from bookings join vehicle on bookings.v_id=vehicle.v_id  where bookings.bk_status='0'";
					$result=mysqli_query($con,$sql);
					
					foreach($result as $row)
					{
				   ?>
				 <?php  $addressFrom =$row['start_loc'] ;
$addressTo   = $row['end_loc'];

// Get distance in km
$distance = getDistance($addressFrom, $addressTo, "K");
$dist=rtrim($distance," km");
$price=$row['price'];
$fare= $dist*$price;

?>
											<li >
												
												<div class="vehicle_img"> <a href="#"><img src="../admin/uploads/vehicle/<?php echo $row['Vimage1']?>" alt="image"></a> </div>
												<div class="vehicle_title">
												<h6><a href="#">Book Ref: <?php echo $row['book_ref']?></a></h6>
												<p><b>From:<?php echo $row['start_loc']?></b><p>
												<p><b>To:<?php echo $row['end_loc']?></b><p>
												<p><b>Pick Time:<?php echo $row['pickup_time']?></b><p>
												<p><b>Distance:</b><?php echo $distance; ?><p>
												<p><b>Fare:</b><?php echo $fare; ?> ₹<p>
												</div>
												<?php if($row['bk_status']==0)
                { ?>
												<div class="vehicle_status"> <a href="#" class="btn outline btn-xs ">Not Confirmed</a>
												<div class="clearfix"></div>
												<?php } ?>
												<?php if($row['bk_status']==2)
                { ?>
												<div class="vehicle_status"> <a href="#" class="btn outline btn-xs ">Cancelled</a>
												<div class="clearfix"></div>
												<?php } ?>
												<?php if($row['bk_status']==1)
                { ?>
				<div class="vehicle_status"> <a href="#" class="btn outline btn-xs active-btn">Confirmed</a>
												<div class="clearfix"></div>
												<?php } ?>
												<form method="POST" action="ajax/acpt.php" onsubmit="return do_acpt();" >
												<input type="hidden" id="fare" value="<?php echo $fare?>">
												<input type="hidden" id="dist" value="<?php echo $dist?>">
												<input type="hidden" id="ref" value="<?php echo $row['book_ref']?>">
												<input type="hidden" id="drvr" value="<?php echo $_SESSION['dlogin']?>">
											
												<button><i class="fa fa-check" aria-hidden="true"></i></button> 
												<form>
											
												</div>
												
											</li>
					<?php } ?>


								


										</ul>
										<div class="pagination">
										
										</div>
									</div>
									</div>
								</div>
								</div>
							</div>
							</section>
							<!--/my-vehicles--> 

						
						</div>
					</div>
				</div>
			</section>

			
			<!--Booking Cancel Section End-->	
			
			
			
	
			
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
		<script src="js/color-switcher.js"></script>
		<script src="js/tweetie.js"></script> 
		<script src="js/custom.js"></script> 
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<!-- Js Files End --> 
		<script type="text/javascript">
function do_acpt()
{
 var fare=$("#fare").val();
 var dist=$("#dist").val();
 var ref=$("#ref").val();
 var drvr=$("#drvr").val();
 if(fare!="" && dist!=""){
 
  $.ajax
  ({
  type:'post',
  url:'ajax/acpt.php',
  data:{
	do_acpt:"do_acpt",
   fare:fare,
   dist:dist,
   ref:ref,
   drvr:drvr
  },
  success:function(result){
  if(result=="fail")
  {
	Swal.fire(
								'Failed!',
								'Booking is already accepted!',
								'error'
							  )
							  
  }
  else if(result=="done")
  {
    Swal.fire(
								'Success!',
								'Booking is Accepted!',
								'success'
							  )
							  //window.location.href="booking-history.php";
  }
  }
  });
 }

 else
 {
	Swal.fire(
								'Error',
								'Please fill all details!',
								'error'
							  )
 }

 return false;
}
</script>

	</body>

<!-- Mirrored from themesjungle.net/html/prime-cab/booking-cancel.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:08:28 GMT -->
</html>
