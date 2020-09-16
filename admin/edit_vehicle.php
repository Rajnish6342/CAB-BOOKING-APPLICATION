
<?php
include('conn.php');
if(isset($_POST['submit']))
{
	$id=$_POST['txtid'];
	$no=$_POST['txtVno'];
	$type=$_POST['vtype'];
	$model=$_POST['txtvmodel'];
	$cap=$_POST['txtSCapacity'];
	$price=$_POST['txtKm'];
	$canc=$_POST['txtCancCharge'];
	$ins=$_POST['date1'];
	$img=$_FILES["img"]['name'];
	$name=$_POST['txtVname'];
	  

	if(!empty($_FILES['img']['name'])) //new image uploaded
{
	$sql="update vehicle set v_no='$no',v_model='$model',v_cap='$cap',v_price='$price',v_canc='$canc',v_ins='$ins',v_img='$img' where v_id='$id'";
	$quer=mysqli_query($con,$sql);
		
    
        if($quer)
        {
			move_uploaded_file($_FILES["img"]["tmp_name"],"uploads/vehicle/".$_FILES["img"]["name"]); 
			header('Location: all_vehicles.php');
            
        }
}
else // no image uploaded
{
  
	$sql="update vehicle set v_no='$no',v_model='$model',v_cap='$cap',v_price='$price',v_canc='$canc',v_ins='$ins',v_name='$name' where v_id='$id'";
	$quer=mysqli_query($con,$sql);
		
    
        if($quer)
        {
			
			header('Location: all_vehicles.php');
            
        }
}  

}

?>

<?php

 $id=$_REQUEST['id'];
 $query= "select * from vehicle where v_id='$id'";
 $result=mysqli_query($con,$query);
 foreach($result as $row)
 {
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
								<form method="post"   enctype="multipart/form-data">
								<div class="<?php echo @$msg1;?> " ><?php echo @$msg;?> </div>
								<div class="card-body row">
								<input type="hidden" name="txtid" value="<?php echo $row['v_id'] ?>">
								<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="txtVname" value="<?php echo $row['v_name'] ?>">
											<label class="mdl-textfield__label">Vehicle Name</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="txtVno" value="<?php echo $row['v_no'] ?>">
											<label class="mdl-textfield__label">Vehicle Number</label>
										</div>
									</div>
									
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="txtvmodel" value="<?php echo $row['v_model'] ?>">
											<label class="mdl-textfield__label">Vehicle Model</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text"
												pattern="-?[0-9]*(\.[0-9]+)?" name="txtSCapacity" value="<?php echo $row['v_cap'] ?>">
											<label class="mdl-textfield__label" for="txtSCapacity">Seating
												Capacity</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text"
												pattern="-?[0-9]*(\.[0-9]+)?" name="txtKm" value="<?php echo $row['v_price'] ?>">
											<label class="mdl-textfield__label" for="txtKm">Price Per K/M(in  ₹)</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									
									
									
									
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text"
												pattern="-?[0-9]*(\.[0-9]+)?" name="txtCancCharge" value="<?php echo $row['v_canc'] ?>">
											<label class="mdl-textfield__label" for="txtCancCharge">Passenger
												Cancellation Charges(in  ₹)</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="date1" value="<?php echo $row['v_ins'] ?>">
											<label class="mdl-textfield__label">Insurance Renewal Date </label>
										</div>
									</div>
									



								<div class="ml-2 col-sm-6">
									<div id="msg"></div>
									
										<input type="file" name="img" class="file" accept="image/*">
										<div class="input-group my-3">
										<input type="text" class="form-control" disabled placeholder="Upload File" id="file">
										<div class="input-group-append">
											<button type="button" class="browse btn btn-primary">Browse...</button>
										</div>
										</div>

									</div>
									<div class="ml-2 col-sm-6">
									<img src="<?php echo 'uploads/vehicle/'.$row['v_img']; ?>" id="preview" class="img-thumbnail">
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
							<?php } ?>
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