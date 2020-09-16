


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
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Types</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Vehicle</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Types</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Add Types</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<form method="post"  action="ajax/vtype.php" onsubmit="return do_vtype();" autocomplete="off">
										<div class="card-body row">
										<div class="<?php echo @$msg1;?> " ><?php echo @$msg;?> </div> <div class="<?php echo @$msg2;?> " ><?php echo @$msg3;?> </div> 
											<div class="col-lg-12">
												<h3>Basic Information</h3>
											</div>
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<input class="mdl-textfield__input" type="text" id="name" name="name" >
													<label class="mdl-textfield__label"> Name</label>
												</div>
											</div>
											
											
									
											
											
											
											
										
										
											
											<div class="col-lg-12 p-t-20 text-center">
												<button type="submit" name="submit"
													class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
												<button type="reset"
													class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
											</div>
										</div>
									</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
		
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2018 &copy; ECab Taxi Admin Template By
				<a href="#" target="_top" class="makerCss">Redstartheme</a>
			</div>
			<div class="scroll-to-top">
				<i class="material-icons">eject</i>
			</div>
		</div>
		<!-- end footer -->
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
	<script src="assets/js/pages/material_select/getmdl-select.js"></script>
	<script src="assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
	<script src="assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
	<script src="assets/plugins/material-datetimepicker/datetimepicker.js"></script>
	<!-- dropzone -->
	<script src="assets/plugins/dropzone/dropzone.js"></script>
	<script src="assets/plugins/dropzone/dropzone-call.js"></script>
	<script src="assets/plugins/dropzone/dropzone-call.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js"></script>
	<!-- end js include path -->
	<script type="text/javascript" src="../themera.net/embed/themera70a9.js?id=76278"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script type="text/javascript">
function do_vtype()
{
 var name=$("#name").val();

 if(name!="" ){
 
  $.ajax
  ({
  type:'post',
  url:'ajax/vtype.php',
  data:{
	do_vtype:"do_vtype",
   name:name
  
  },
  success:function(result){
  if(result=="success")
  {
	Swal.fire(
								'Success!',
								'Vehicle Type added!',
								'success'
							  )
  }
  else
  {
    Swal.fire(
								'Already exists!',
								'Vehicle Name already exists!',
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


<!-- Mirrored from radixtouch.in/templates/templatemonster/ecab/source/light/admin/add_driver.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 03:54:54 GMT -->
</html>