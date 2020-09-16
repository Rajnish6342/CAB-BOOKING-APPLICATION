
<?php
include("conn.php");
$sql="select * from bookings where bk_status='0' ";
$result=mysqli_query($con, $sql);
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
								<div class="page-title">Active Trips</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Trips</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Active Trips</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Active Trips</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="table-scrollable">
										<table id="tableExport" class="display">
											<thead>
												<tr>
													<th>#</th>
													<th>Trip Id</th>
												
													<th>Passenger Name</th>
													<th>Mobile No</th>
													<th>Trip From</th>
													<th>Trip To</th>
													<th>Booking Date</th>
													<th>Start Time</th>
													<th>Action</th>
												</tr>
											</thead>
									
											<tbody id="loadtrip">
											<?php 
		
			while($row=mysqli_fetch_row($result))
{  ?>
												<tr>
													<td><?php echo $row['1']; ?></td>
													<td><?php echo $row['3']; ?></td>
												
													<td><?php echo $row['11']; ?></td>
													<td><?php echo $row['12']; ?></td>
													
													<td><?php echo $row['4']; ?></td>
													
													<td><?php echo $row['5']; ?></td>
													<td><?php echo $row['6']; ?></td>
													<td><?php echo $row['7']; ?></td>
													<td>
													<div class="btn-group">
																		<button
																			class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
																			type="button" data-toggle="dropdown" aria-expanded="false">
																			
																			<i class="fa fa-cog"></i>
																		</button>
																		<ul class="dropdown-menu" role="menu">
																			<li>
																				<a href="ajax/cancel.php?s=4&id=<?php echo $row['0']?>">
																					<i class="icon-docs"></i> Cancel</a>
																			</li>
																			
																			<li>
																			<a href="edittrip.php?id=<?php echo $row['0']?>">
																			<i class="icon-docs"></i> Edit
																					</a>
																			</li>
																		
																		</ul>
																	</div>
													</td>
												</tr>
<?php } ?>
											
											</tbody>
										</table>
									</div>
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
	<!-- data tables -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="../cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
	<script src="../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
	<script src="../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
	<script src="../cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
	<script src="assets/js/pages/table/table_data.js"></script>
	<script src="assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
	<script src="assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
	<script src="assets/plugins/material-datetimepicker/datetimepicker.js"></script>
	<!-- animation -->
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js"></script>
	<!-- end js include path -->
	<script type="text/javascript" src="../themera.net/embed/themera70a9.js?id=76278"></script>
	<script >
		
		var autoLoad = setInterval(
            function() {
                $('#loadtrip').load('ajax/loadtrips.php').fadeIn("slow");
            }, 10000);
  
	</script>
</body>


<!-- Mirrored from radixtouch.in/templates/templatemonster/ecab/source/light/admin/active_trips.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 03:54:01 GMT -->
</html>