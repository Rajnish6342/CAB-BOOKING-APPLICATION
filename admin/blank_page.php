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
								<div class="page-title">Calendar</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Apps</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Calendar</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-9 col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Calendar</header>
								</div>
								<div class="card-body ">
									<div class="panel-body">
										<div id="calendar" class="has-toolbar"> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Draggable Events</header>
								</div>
								<div class="card-body ">
									<div id="external-events">
										<form class="inline-form">
											<input type="text" value="" class="form-control"
												placeholder="Event Title..." id="event_title" />
											<br />
											<a href="javascript:;" id="event_add" class="btn deepPink-bgcolor"> Add
												Event </a>
										</form>
										<hr />
										<div id="event_box" class="mg-bottom-10"></div>
										<label class="rt-chkbox rt-chkbox-single rt-chkbox-outline" for="drop-remove">
											remove after drop
											<input type="checkbox" class="group-checkable" id="drop-remove" />
											<span></span>
										</label>
										<hr class="visible-xs" />
									</div>
								</div>
							</div>
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
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- calendar -->
	<script src="assets/plugins/moment/moment.min.js"></script>
	<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/js/pages/calendar/calendar.min.js"></script>
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
</body>

</html>