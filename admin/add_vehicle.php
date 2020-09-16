
<?php
include('conn.php');
if(isset($_POST['submit']))
{
	$no=$_POST['txtVno'];
	$type=$_POST['vtype'];
	$model=$_POST['txtvmodel'];
	$cap=$_POST['txtSCapacity'];
	$price=$_POST['txtKm'];
	$canc=$_POST['txtCancCharge'];
	$ins=$_POST['date1'];
	$img=$_FILES["img"]['name'];
	$name=$_POST['txtVname'];
	  
	$sql= "insert into vehicle (v_no,v_type,v_model,v_cap,v_price,v_canc,v_ins,v_img,v_name) values ('$no','$type','$model','$cap','$price','$canc','$ins','$img','$name')";
	$quer=mysqli_query($con,$sql);
		
    
        if($quer)
        {
            move_uploaded_file($_FILES["img"]["tmp_name"],"uploads/vehicle/".$_FILES["img"]["name"]);
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
								<div class="page-title">Add Vehicle</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Vehicle</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Vehicle</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Add Vehicle</header>
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
								<form method="post" id="addvehicle" action="add_vehicle.php" enctype="multipart/form-data">
								<div class="<?php echo @$msg1;?> " ><?php echo @$msg;?> </div>
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="txtVname" required>
											<label class="mdl-textfield__label">Vehicle Name</label>
											<span class="mdl-textfield__error">Name required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="txtVno"required>
											<label class="mdl-textfield__label">Vehicle Number</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" name="vtype" id="vtype" value="" readonly
												tabIndex="-1"required>
											<label for="vtype" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="vtype" class="mdl-textfield__label">Vehicle Type</label>
											<ul data-mdl-for="vtype" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
											<?php

$sql="select * from vtypes  ";
$result=mysqli_query($con, $sql);
?>
	<?php 
		
		while($row=mysqli_fetch_row($result))
{  ?>

												<li class="mdl-menu__item" ><?php echo $row[1];?></li>
<?php } ?>
												
												
											</ul>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="txtvmodel"required>
											<label class="mdl-textfield__label">Vehicle Model</label>
											<span class="mdl-textfield__error">Name required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text"
												pattern="-?[0-9]*(\.[0-9]+)?" name="txtSCapacity" required>
											<label class="mdl-textfield__label" for="txtSCapacity">Seating
												Capacity</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text"
												pattern="-?[0-9]*(\.[0-9]+)?" name="txtKm" required>
											<label class="mdl-textfield__label" for="txtKm">Price Per K/M(in  ₹)</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									
									
									
									
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text"
												pattern="-?[0-9]*(\.[0-9]+)?" name="txtCancCharge"required>
											<label class="mdl-textfield__label" for="txtCancCharge">Passenger
												Cancellation Charges(in  ₹)</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="date1" id="date1" required>
											<label class="mdl-textfield__label">Insurance Renewal Date </label>
											<span class="mdl-textfield__error">Date required!</span>
										</div>
									</div>
									



								<div class="ml-2 col-sm-6">
									<div id="msg"></div>
									
										<input type="file" name="img" class="file" accept="image/*" required>
										
										<div class="input-group my-3">
										<input type="text" class="form-control" disabled placeholder="Upload File" id="file">
										<div class="input-group-append">
											<button type="button" class="browse btn btn-primary">Browse...</button>
											
										</div>
										</div>

									</div>
									<div class="ml-2 col-sm-6">
									<img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
									</div>



									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit" name="submit"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
										<button type="button"
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
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js"></script>
	<!-- end js include path -->
	<script type="text/javascript" src="../themera.net/embed/themera70a9.js?id=76278"></script>
	<script>
	

$(document).on("click", ".browse", function() {
  var file = $(this).parents().find(".file");
  file.trigger("click");
});
$('input[type="file"]').change(function(e) {
  var fileName = e.target.files[0].name;
  $("#file").val(fileName);

  var reader = new FileReader();
  reader.onload = function(e) {
    // get loaded data and render thumbnail.
    document.getElementById("preview").src = e.target.result;
  };
  // read the image file as a data URL.
  reader.readAsDataURL(this.files[0]);
});


	</script>
</body>


<!-- Mirrored from radixtouch.in/templates/templatemonster/ecab/source/light/admin/add_vehicle.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 03:55:54 GMT -->
</html>