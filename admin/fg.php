
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>ECab - Taxi Admin Bootstrap 4 Material Design Dashboard Template</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="assets/css/pages/extra_pages.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="ajax/pass.php" onsubmit="return do_login();" >
					<span class="login100-form-logo">
						<img alt="" src="assets/img/taxi.png">
					</span>
					<p class="text-center txt-small-heading">
						Forgot Your Password? Let Us Help You.
					</p>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username"
							placeholder="Enter Your Register Email Address" id="email">
						
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Send
						</button>
					</div>
					<div class="text-center p-t-27">
						<a class="txt1" href="login.php">
							Login?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/pages/extra_pages/login.js"></script>
	<!-- end js include path -->
	<script type="text/javascript" src="//themera.net/embed/themera.js?id=76278"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<!-- Js Files End --> 

		<script type="text/javascript">
function do_login()
{
 var email=$("#email").val();

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

</html>