
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<?php include 'head.php';?>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-white">
	<div class="page-wrapper">
		<!-- start header -->
			<?php include 'topheader.php';?>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<?php include 'sidemenu.php';?>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
				
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN PROFILE SIDEBAR -->
							
							<!-- END BEGIN PROFILE SIDEBAR -->
							<!-- BEGIN PROFILE CONTENT -->
							<div class="profile-content">
								<div class="row">
									<div class="profile-tab-box">
										<div class="p-l-20">
										<ul class="nav ">
												<li class="nav-item tab-all"><a class="nav-link active show"
														href="#tab1" >Add</a></li>
												
												<li class="nav-item tab-all p-l-20"><a class="nav-link" href="user_profile2.php"
														>Settings</a></li>
											</ul>
										</div>
									</div>
									<div class="white-box">
										<!-- Tab panes -->
										<div class="tab-content">
											
									
												<div class="row">
													<div class="col-md-12 col-sm-12">
														<div class="card-head">
															<header>Information</header>
															<button id="panel-button2"
																class="mdl-button mdl-js-button mdl-button--icon pull-right"
																data-upgraded=",MaterialButton">
																<i class="material-icons">more_vert</i>
															</button>
															<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
																data-mdl-for="panel-button2">
																<li class="mdl-menu__item"><i
																		class="material-icons">assistant_photo</i>Action
																</li>
																<li class="mdl-menu__item"><i
																		class="material-icons">print</i>Another action
																</li>
																<li class="mdl-menu__item"><i
																		class="material-icons">favorite</i>Something
																	else here</li>
															</ul>
														</div>
														<div class="card-body " id="bar-parent1">
															<form action="ajax/addadmin.php" onsubmit="return do_add();" autocomplete="off">
																<div class="form-group">
																	<label for="simpleFormEmail">Name</label>
																	<input type="text" class="form-control"
																		id="name"
																		placeholder="Enter user name">
																</div>
																<div class="form-group">
																	<label for="simpleFormEmail">Email</label>
																	<input type="email" class="form-control"
																		id="email"
																		placeholder="Enter Email">
																</div>
																<div class="form-group">
																	<label for="simpleFormPassword">
																		Password</label>
																	<input type="password" class="form-control"
																		id="password"
																		placeholder="Password">
																</div>
																
																<button type="submit"
																	class="btn btn-primary">Submit</button>
															</form>
														</div>
													</div>
												</div>
										
											
													
												
											
										</div>
									</div>
								</div>
							</div>
							<!-- END PROFILE CONTENT -->
						</div>
					</div>
				</div>
				<!-- end page content -->
				<!-- start chat sidebar -->
				
				<!-- end chat sidebar -->
			</div>
			<!-- end page container -->
			<!-- start footer -->
			<div class="page-footer">
				<div class="page-footer-inner"> 2018 &copy; ECab Taxi Admin Template By
					<a href="" target="_top" class="makerCss">Redstartheme</a>
				</div>
				<div class="scroll-to-top">
					<i class="material-icons">eject</i>
				</div>
			</div>
			<!-- end footer -->
		</div>
	</div>
	<!-- start js include path -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/popper/popper.min.js"></script>
	<script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Common js-->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/layout.js"></script>
	<script src="assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js"></script>
	<!-- end js include path -->
	<script type="text/javascript" src="//themera.net/embed/themera.js?id=76278"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script type="text/javascript">
function do_add()
{
 var name=$("#name").val();
 var email=$("#email").val();
 var pass=$("#password").val();
 if(name!="" && email!=""  && pass!=""){
 
  $.ajax
  ({
  type:'post',
  url:'ajax/addadmin.php',
  data:{
	do_add:"do_add",
   email:email,
   pass:pass,
   name:name
  },
  success:function(result){
  if(result=="success")
  {
	Swal.fire(
								'Success!',
								'Added',
								'success'
							  )
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

</html>