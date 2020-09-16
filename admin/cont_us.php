

<?php
include("conn.php");
 $query= "select * from cont";
 $result=mysqli_query($con,$query);
 foreach($result as $row)
 {
?>
<?php

if(isset($_POST['submit']))
{
   
    $addr=$_POST['addr'];
	$email=$_POST['email'];
	$mno=$_POST['mno'];  
		$sql="update cont set addr='$addr',email='$email',mno='$mno'";
	$quer=mysqli_query($con,$sql);
		
    
        if($quer)
        {
			echo "1";
			
            
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
								<div class="page-title">Contact us</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Contact us</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Contact us</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Contact us</header>
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
								<form method="post" id="adddriver"  enctype="multipart/form-data" autocomplete="off" action="ajax/contact.php" onsubmit="return do_contact();" >
								<div class="card-body row">
								<div class="<?php echo @$msg1;?> " ><?php echo @$msg;?> </div> <div class="<?php echo @$msg2;?> " ><?php echo @$msg3;?> </div> 
									<div class="col-lg-12">
										<h3>Basic Information</h3>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="adr" name="addr" required value="<?php echo $row['addr'] ?>"required>
											<label class="mdl-textfield__label"> Address</label>
											<span class="mdl-textfield__error">Enter Address!</span>
										</div>
									</div>
									
									
							
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="email" id="email" name="email" value="<?php echo $row['email'] ?>" required>
											<label class="mdl-textfield__label">Email</label>
											<span class="mdl-textfield__error">Enter Valid Email Address!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text"
												pattern="-?[0-9]*(\.[0-9]+)?" id="no" name="mno" value="<?php echo $row['mno'] ?>" required>
											<label class="mdl-textfield__label" for="no">Mobile Number</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
								<div class="col-lg-12 p-t-20 text-center">
										<button type="submit" name="submit"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Update</button>
										
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
function do_contact()
{
 var email=$("#email").val();
 var adr=$("#adr").val();
 var no=$("#no").val();

 if(email!="" && adr!=""){
 
  $.ajax
  ({
  type:'post',
  url:'ajax/contact.php',
  data:{
	do_contact:"do_contact",
   email:email,
   adr:adr,
   no:no
  },
  success:function(result){
  if(result=="1")
  
  {
    Swal.fire(
								'Success!',
								'Contact Page updated!',
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

</html>