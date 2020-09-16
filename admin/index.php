

<?php
include("conn.php");
$sql="select  * from drivers LIMIT 5  ";
$result=mysqli_query($con, $sql);
?>
<?php

$sql1="SELECT vehicle.v_no as Vno,vehicle.v_type,drivers.d_fname,drivers.d_sname,bookings.start_loc,bookings.end_loc,bookings.book_ref,bookings.email_id,bookings.username,bookings.bk_date,bookings.fare,bookings.dist,bookings.price  from bookings join vehicle on bookings.v_id=vehicle.v_id  join drivers on bookings.drvr=drivers.d_mail WHERE bookings.bk_status='1' order by bookings.bk_date desc LIMIT 5";
$result1=mysqli_query($con, $sql1);
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
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="row clearfix">
						<div class="col-lg-3 col-md-6 col-sm-12 text-center">
							<div class="card circle">
								<div class="panel-body">
								<?php
									
									$comp="select bk_id from bookings where bk_status='1'";
									$re=mysqli_query($con, $comp);
									$cmp=mysqli_num_rows($re);

									?>
									<div class="m-t-20">
										<input type="text" class="knob" value="<?php echo $cmp ?>" data-width="90" data-height="90"
											data-thickness="0.1" data-fgColor="#fbbc4d" readonly>
									</div>
									
									<h4>Booked</h4>
									<p>Total:  <?php echo $cmp ?>  </p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 text-center">
							<div class="card circle">
								<div class="panel-body">
								<?php
									
									$canc="select bk_id from bookings where bk_status='2'";
									$rex=mysqli_query($con, $canc);
									$cnc=mysqli_num_rows($rex);

									?>
									<div class="m-t-20">
										<input type="text" class="knob" value="<?php echo $cnc ?>" data-width="90" data-height="90"
											data-thickness="0.1" data-fgColor="#F44336" readonly>
									</div>
									<h4>Cancelled</h4>
									<p>Total: <?php echo $cnc ?> </p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 text-center">
							<div class="card circle">
								<div class="panel-body">
								<?php
									
									$usc="select u_id from users";
									$sd=mysqli_query($con, $usc);
									$usr=mysqli_num_rows($sd);

									?>
									<div class="m-t-20">
										<input type="text" class="knob" value="<?php echo $usr ?>" data-width="90" data-height="90"
											data-thickness="0.1" data-fgColor="#18d1ef" readonly>
									</div>
									<h4>Users</h4>
									<p>Total:  <?php echo $usr ?> </p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 text-center">
							<div class="card circle">
								<div class="panel-body">
								<?php
									
									$dr="select d_id from drivers";
									$drs=mysqli_query($con, $dr);
									$dsr=mysqli_num_rows($drs);

									?>
									<div class="m-t-20">
										<input type="text" class="knob" value="<?php echo $dsr ?>" data-width="90" data-height="90"
											data-thickness="0.1" data-fgColor="#7836f4" readonly>
									</div>
									<h4>Drivers</h4>
									<p>Total: <?php echo $dsr ?> </p>
								</div>
							</div>
						</div>
					</div>
					<!-- end widget -->
					
					<div class="row">
						<div class="col-lg-8 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Booking Details</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="table-wrap">
										<div class="table-responsive tblHeightSet small-slimscroll-style">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>#</th>
														<th>User Name</th>
														<th>Price/Km</th>
														<th>Fare</th>
														<th>Distance</th>
														<th>Driver</th>
														<th>Date</th>
														
													</tr>
												</thead>
												<tbody>
													
										<?php 
		
		foreach($result1 as $row1)
					{
 ?>
													<tr>
														<td><?php echo $row1['book_ref']; ?></td>
														<td><?php echo $row1['username']; ?></td>
														<td><?php echo $row1['price']; ?> ₹</td>
														<td><?php echo $row1['fare']; ?> ₹</td>
														<td><?php echo $row1['dist']; ?> Km</td>
														<td><?php echo $row1['d_fname']; ?> <?php echo $row1['d_sname']; ?></td>
														<td><?php echo $row1['bk_date']; ?> </td>
														
													</tr>
													<?php } ?>		
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Drivers List</header>
								</div>
							
								<div class="card-body ">
									<div class="row">
										<ul class="empListWindow small-slimscroll-style">

										<?php 
		
		while($row=mysqli_fetch_row($result))
{  ?>

											<li>
												
												<div class="details">
													<div class="title">
														<a href="#"><?php echo $row['1']; ?> <?php echo $row['2']; ?></a>
													</div>
													<div>
														<span class="mobileTxt"><?php echo $row['9']; ?></span>
													</div>
												</div>
											</li>
											
											
											<?php } ?>		
											
										
										</ul>
										<div class="full-width text-center p-t-10">
											<a href="all_drivers.php" class="btn purple btn-outline btn-circle margin-0">View All</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			
						<!-- Start Setting Panel -->
						
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
	<!-- counterup -->
	<script src="assets/plugins/counterup/jquery.waypoints.min.js"></script>
	<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
	<!-- Common js-->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/layout.js"></script>
	<script src="assets/js/theme-color.js"></script>
	<!-- material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js"></script>
	<script src="assets/plugins/jQuery-Knob/dist/jquery.knob.min.js"></script>
	<script src="assets/js/pages/chart/knob/knob_chart_data.js"></script>
	<!-- sparkline -->
	<script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
	<script src="assets/js/pages/sparkline/sparkline-data.js"></script>
	
	<!-- end js include path -->
	<script type="text/javascript" src="../themera.net/embed/themera70a9.js?id=76278"></script>
</body>


<!-- Mirrored from radixtouch.in/templates/templatemonster/ecab/source/light/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 03:53:32 GMT -->
</html>