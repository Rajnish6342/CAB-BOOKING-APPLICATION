<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themesjungle.net/html/prime-cab/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:08:17 GMT -->
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
		<link href="css/stroke-gap.css" rel="stylesheet">
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
		
			<!--Style Switcher Section End-->
			<?php include 'menu.php';?>
			<!--Header Content End-->
			
			<!--Inner Banner Section Start-->
	    	<div class="tj-inner-banner">
	    		<div class="container">
	    			<h2>Register</h2>
	    		</div>
	    	</div>
			<!--Inner Banner Section End-->
			
			<!--Breadcrumb Section Start-->
	    	<div class="tj-breadcrumb">
				<div class="container">
					<ul class="breadcrumb-list">
						<li><a href="index.php">Home</a></li>
						<li class="active">Register</li>
					</ul>
				</div>
	    	</div>
			<!--Breadcrumb Section End-->	
			
			<!--Register Section Start-->	
			<section class="tj-register">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="tj-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li><a href="login.php" >Login</a></li>
									<li class="active"><a href="#register" >Register</a></li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane" id="login">
									<div class="col-md-6 col-sm-6">
										<div class="login-cta">
											<ul class="cta-list">
												<li>
													<span class="icon-mail-envelope icomoon"></span>
													<div class="cta-info">
														<strong>30 Days Money Back Guarantee</strong>
														<p>A more recently with desktop softy like aldus pages maker still versions have evolved.</p>
													</div>
												</li>
												<li>
													<span class="icon icon-Headset"></span>
													<div class="cta-info">
														<strong>24/7 Customer Support</strong>
														<p>A more recently with desktop softy like aldus pages maker still versions have evolved.</p>
													</div>
												</li>
												<li>
													<span class="icon-lock icomoon"></span>
													<div class="cta-info">
														<strong>100% Secure Payment</strong>
														<p>A more recently with desktop softy like aldus pages maker still versions have evolved.</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<form class="login-frm" method="POST">
											<div class="field-holder">
												<span class="far fa-envelope"></span>
												<input type="email" name="login_email" placeholder="Enter your Email Address">
											</div>
											<div class="field-holder">
												<span class="fas fa-lock"></span>
												<input type="password" name="name" placeholder="Password">
											</div>
											<a href="#" class="forget-pass">Forget Password?</a>
											<button type="submit" class="reg-btn">Login <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
											
										</form>
									</div>
								</div>
								<div class="tab-pane active" id="register">
									<div class="col-md-6 col-sm-6">
										<div class="reg-cta">
											<ul class="cta-list">
												<li>
													<span class="icon-mail-envelope icomoon"></span>
													<div class="cta-info">
														<strong>30 Days Money Back Guarantee</strong>
														<p>A more recently with desktop softy like aldus pages maker still versions have evolved.</p>
													</div>
												</li>
												<li>
													<span class="icon icon-Headset"></span>
													<div class="cta-info">
														<strong>24/7 Customer Support</strong>
														<p>A more recently with desktop softy like aldus pages maker still versions have evolved.</p>
													</div>
												</li>
												<li>
													<span class="icon-lock icomoon"></span>
													<div class="cta-info">
														<strong>100% Secure Payment</strong>
														<p>A more recently with desktop softy like aldus pages maker still versions have evolved.</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
									<form class="reg-frm" method="POST" action="ajax/register.php" onsubmit="return do_register();" >
											<div class="field-holder">
												<span class="far fa-user"></span>
												<input type="text" name="name" id="name" placeholder="Name">
											</div>
											<div class="field-holder">
												<span class="fas fa-mobile"></span>
												<input type="text" name="mobile" id="mobile"  placeholder="Mobile No">
											</div>
											<div class="field-holder">
												<span class="far fa-envelope"></span>
												<input type="email" name="email" id="email" placeholder="Enter your Email Address">
											</div>
											<div class="field-holder">
												<span class="fas fa-lock"></span>
												<input type="password" name="pass" id="pass"placeholder="Password">
											</div>
											<label for="terms">
												<input type="checkbox" name="terms" id="terms">
												I accept terms & conditions
											</label>
											<button type="submit" class="reg-btn">Signup <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
											
										</form>
										<!--Register Tabs Form-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Register Section End-->	
			
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
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<!-- Js Files End --> 

		<script type="text/javascript">
function do_register()
{
 var name=$("#name").val();
 var email=$("#email").val();
 var mobile=$("#mobile").val();
 var pass=$("#pass").val();
 if(name!="" && email!="" && mobile!="" && pass!=""){
 
  $.ajax
  ({
  type:'post',
  url:'ajax/register.php',
  data:{
	do_register:"do_register",
   email:email,
   pass:pass,
   name:name,
   mobile:mobile
  },
  success:function(result){
  if(result=="success")
  {
    window.location.href="index.php";
  }
  else
  {
    Swal.fire(
								'Already exists!',
								'Email id already registered!',
								'warning'
							  )
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

<!-- Mirrored from themesjungle.net/html/prime-cab/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:08:17 GMT -->
</html>