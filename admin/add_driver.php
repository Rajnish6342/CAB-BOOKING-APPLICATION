
<?php
include('conn.php');
if(isset($_POST['submit']))
{
	$name=$_POST['fname'];
	$sname=$_POST['sname'];
	$ad1=$_POST['ad1'];
	$ad2=$_POST['ad2'];
	$city=$_POST['city'];
	$cnt=$_POST['cnt'];
	$zip=$_POST['zip'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$mno=$_POST['mno'];
	$gen=$_POST['gen'];
	$img=$_FILES["img"]['name'];
	$date=date("Y-m-d");
	  
	$sql= "insert into drivers (d_fname,d_sname,d_s1,d_s2,d_city,d_state,d_zip,d_mail,d_mno,d_gen,d_limg,d_pass,d_jdate) values ('$name','$sname','$ad1','$ad2','$city','$cnt','$zip','$email','$mno','$gen','$img','$pass','$date')";
	$quer=mysqli_query($con,$sql);
		
    
        if($quer)
        {
            move_uploaded_file($_FILES["img"]["tmp_name"],"uploads/".$_FILES["img"]["name"]);
			$msg1="alert alert-success";
			$msg="New User has been added successfully.";
		   
        }
        else 
        {
          
        }
    
    
}

?>



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
								<div class="page-title">Add Driver</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Drivers</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Driver</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Add Driver</header>
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
								<form method="post" id="adddriver" action="add_driver.php" enctype="multipart/form-data">
								<div class="card-body row">
								<div class="<?php echo @$msg1;?> " ><?php echo @$msg;?> </div>
									<div class="col-lg-12">
										<h3>Basic Information</h3>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtFName" name="fname" required>
											<label class="mdl-textfield__label">First Name</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLName" name="sname"required>
											<label class="mdl-textfield__label">Last Name</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtsa1" name="ad1"required>
											<label class="mdl-textfield__label">Street address 1</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtsa2" name="ad2"required>
											<label class="mdl-textfield__label">Street address 2</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtCity"name="city"required>
											<label class="mdl-textfield__label">City</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtCountry" name="cnt"required>
											<label class="mdl-textfield__label">State</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text"
												pattern="-?[0-9]*(\.[0-9]+)?" id="textZip" name="zip"required>
											<label class="mdl-textfield__label" for="textZip">Zip Code</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="email" id="txtemail" name="email"required>
											<label class="mdl-textfield__label">Email</label>
											<span class="mdl-textfield__error">Enter Valid Email Address!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtemail" name="pass"required>
											<label class="mdl-textfield__label">Password</label>
											
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text"
												pattern="-?[0-9]*(\.[0-9]+)?" id="text5" name="mno"required>
											<label class="mdl-textfield__label" for="text5">Mobile Number</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" id="sample2" value=""
												readonly tabIndex="-1"name="gen">
											<label for="sample2" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="sample2" class="mdl-textfield__label">Gender</label>
											<ul data-mdl-for="sample2"
												class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="DE">Male</li>
												<li class="mdl-menu__item" data-val="BY">Female</li>
											</ul>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width mdl-textfield--file">
											<input class="mdl-textfield__input" placeholder="Upload License Photo"
												type="text" id="uploadFile">
											<div
												class="mdl-button mdl-button--primary mdl-button--icon mdl-button--file">
												<i class="material-icons">attach_file</i><input type="file"
													name="img">
											</div>
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
	
	
</body>


<!-- Mirrored from radixtouch.in/templates/templatemonster/ecab/source/light/admin/add_driver.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 03:54:54 GMT -->
</html>