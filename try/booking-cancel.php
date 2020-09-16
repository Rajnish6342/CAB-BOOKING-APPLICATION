<?php
session_start();
if(strlen($_SESSION['login'])==0)
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
	    			<h2>Cancel Booking</h2>
	    		</div>
	    	</div>
			<!--Inner Banner Section End-->
			
			<!--Breadcrumb Section Start-->
	    	<div class="tj-breadcrumb">
				<div class="container">
					<ul class="breadcrumb-list">
						<li><a href="index.php">Home</a></li>
						<li class="active">Cancel Booking</li>
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
									<li><a href="user-account.php" ><i class="far fa-user"></i> My Account</a></li>
									<li class="active"><a href="booking-history.php" ><i class="far fa-user"></i> Bookings</a></li>
									
									<li><a href="logout.php" ><i class="fas fa-sign-out-alt"></i> Logout</a></li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane active" id="confirm_booking">
									<form class="account-frm" method="POST" action="ajax/cancel.php" onsubmit="return do_cancel();" >
										<div class="col-md-6 col-sm-6">
											<div class="account-field">
												<label>Order ID</label>
												<span class="fas fa-hashtag"></span>
												<input type="text"  id="ref" name="order_id" placeholder="Enter Order ID" value="<?php echo $_REQUEST['ref'];?>" disabled>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="account-field">
												<label>Registered Email Id</label>
												<span class="icon-phone icomoon"></span>
												<input type="email" name="reg_phone" id="email" placeholder="Enter Email Id" disabled value="<?php echo $_REQUEST['email'];?>">
											</div>
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="account-field">
												<label>Reason For Cancellation</label>
												<div class="reason_list">
													<span class="fas fa-question-circle"></span>
													<select  id="res" name="reason_list" class="cancel_reason">
														<option>Choose the reason</option>
														<option> Low Rider Score</option>
														<option>Personal Issues</option>
														<option>Other</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="account-field">
												<label>Other Comments</label>
												<textarea id= "cmnt"placeholder="Comments"></textarea>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<button type="submit" class="cancel-btn">Submit <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
										</div>
									</form>
								</div>
							</div>
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
function do_cancel()
{
 var email=$("#email").val();
 var ref=$("#ref").val();
 var res=$("#res").val();
 var cmnt=$("#cmnt").val();
 if(email!="" && ref!=""){
 
  $.ajax
  ({
  type:'post',
  url:'ajax/cancel.php',
  data:{
	do_cancel:"do_cancel",
   email:email,
   ref:ref,
   res:res,
   cmnt:cmnt
  },
  success:function(result){
  if(result=="fail")
  {
	Swal.fire(
								'Failed!',
								'Booking is already cancelled!',
								'error'
							  )
							  
  }
  else
  {
    Swal.fire(
								'Success!',
								'Booking is Cancelled!',
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