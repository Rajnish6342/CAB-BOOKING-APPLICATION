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
		<script>
		.form-gap {
    padding-top: 70px;
}
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
	    			<h2>Forgot Password</h2>
	    		</div>
	    	</div>
			<!--Inner Banner Section End-->
			
			<!--Breadcrumb Section Start-->
	    	<div class="tj-breadcrumb">
				<div class="container">
					<ul class="breadcrumb-list">
						<li><a href="index.php">Home</a></li>
						<li class="active">Forgot Password</li>
					</ul>
				</div>
	    	</div>
			<!--Breadcrumb Section End-->	
			
			<!--Register Section Start-->	
			<div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="ajax/pass.php" onsubmit="return do_login();" >
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
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
function do_login()
{
 var email=$("#email").val();
 var pass=$("#pwd").val();
 if(email!="" ){
 
  $.ajax
  ({
  type:'post',
  url:'ajax/pass.php',
  data:{
	do_login:"do_login",
   email:email
   
  },
  success:function(result){
  if(result=="done")
  {
	Swal.fire(
								'Sucess!',
								'password sent!',
								'success'
							  )
  }
  else if(result=="fail")
  {
    Swal.fire(
								'Incorrect!',
								'Wrong email !',
								'error'
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