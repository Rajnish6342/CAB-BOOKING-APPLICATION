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
								<div class="page-title">Route Map</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Trip</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Route Map</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Route Detail</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a> <a
											class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a> <a
											class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="tab-content">
										<div class="row">
											<div class="col-md-3">Trip ID</div>
											<!--.col-md-3-->
											<div class="col-md-1">:</div>
											<!--.col-md-3-->
											<div class="col-md-8">ID45345</div>
											<!--.col-md-9-->
										</div>
										<!--.row-->
										<div class="row">
											<div class="col-md-3">Driver</div>
											<!--.col-md-3-->
											<div class="col-md-1">:</div>
											<!--.col-md-3-->
											<div class="col-md-3">Kevin Wilson</div>
											<!--.col-md-9-->
										</div>
										<!--.row-->
										<div class="row">
											<div class="col-md-3">Passenger</div>
											<!--.col-md-3-->
											<div class="col-md-1">:</div>
											<!--.col-md-3-->
											<div class="col-md-8">William Miller</div>
											<!--.col-md-9-->
										</div>
										<!--.row-->
										<div class="row">
											<div class="col-md-3">Cab Type</div>
											<!--.col-md-3-->
											<div class="col-md-1">:</div>
											<!--.col-md-3-->
											<div class="col-md-8">SUV</div>
											<!--.col-md-9-->
										</div>
										<!--.row-->
										<div class="row">
											<div class="col-md-3">Trip From</div>
											<!--.col-md-3-->
											<div class="col-md-1">:</div>
											<!--.col-md-3-->
											<div class="col-md-8">Shyamal Cross Rd, Ahmedabad,
												Gujarat, India</div>
											<!--.col-md-9-->
										</div>
										<!--.row-->
										<div class="row">
											<div class="col-md-3">Trip To</div>
											<!--.col-md-3-->
											<div class="col-md-1">:</div>
											<!--.col-md-3-->
											<div class="col-md-8">Sarkhej - Gandhinagar Hwy,
												Ahmedabad, Gujarat, India</div>
										</div>
										<!--.row-->
										<div class="row">
											<div class="col-md-3">Start Time</div>
											<!--.col-md-3-->
											<div class="col-md-1">:</div>
											<!--.col-md-3-->
											<div class="col-md-8">2017-10-23 06:51:17</div>
											<!--.col-md-9-->
										</div>
										<!--.row-->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Route</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a> <a
											class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a> <a
											class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<form class="form-inline mg-bottom-10" action="#">
										<input type="button" id="routes_start" class="btn deepPink-bgcolor"
											value="Show Route" />
									</form>
									<div class="label label-danger visible-ie8">Not supported
										in Internet Explorer 8</div>
									<div id="gmap_routes" class="gmaps"></div>
									<ol id="routes_instructions">
									</ol>
								</div>
							</div>
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
	<script src="../../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../../assets/plugins/popper/popper.min.js"></script>
	<script src="../../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- bootstrap -->
	<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- google map -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="../../assets/plugins/gmaps/gmaps.min.js"></script>
	<script src="../../assets/js/pages/map/gmap-route.js"></script>
	<!-- Common js-->
	<script src="../../assets/js/app.js"></script>
	<script src="../../assets/js/layout.js"></script>
	<script src="../../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../../assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="../../assets/js/pages/ui/animations.js"></script>
	<!-- end js include path -->
	<script type="text/javascript" src="../../../../../../../themera.net/embed/themera70a9.js?id=76278"></script>
</body>


<!-- Mirrored from radixtouch.in/templates/templatemonster/ecab/source/light/admin/route_map.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 03:54:07 GMT -->
</html>