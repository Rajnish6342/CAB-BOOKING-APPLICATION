<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<<?php include 'head.php';?>
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
								<div class="page-title">Booked Trips</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Trip</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Booked Trips</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Booked Trips</header>
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
													<th>Trip From</th>
													<th>Trip To</th>
													<th>Allocated Driver</th>
													<th>Start Time</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>ID234</td>
													<td>John Smith</td>
													<td>34, Alax street</td>
													<td>99 Myrtle Dr.Long Branch</td>
													<td>Kevin Wilson</td>
													<td>22-03-2018 12:34</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>ID244</td>
													<td>William Miller</td>
													<td>823 Lincoln Ave.Huntsville</td>
													<td>3 Cedar Swamp Rd. Crown Point</td>
													<td>Daniel Davis</td>
													<td>12-03-2018 12:40</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td>ID254</td>
													<td>Daniel Davis</td>
													<td>7578 Vale Ave. Canfield</td>
													<td>619 S. Wayne Ave. Fairport</td>
													<td>Jason Smith</td>
													<td>16-03-2018 11:34</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>4</td>
													<td>ID264</td>
													<td>Kevin Wilson</td>
													<td>568 Canal Street Toledo</td>
													<td>892 Myers Ave. Des Moines</td>
													<td>William Miller</td>
													<td>11-03-2018 02:14</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>5</td>
													<td>ID274</td>
													<td>Jason Smith</td>
													<td>114 East Edgewood St.</td>
													<td>7 Glen Ridge Street Fairmont</td>
													<td>Ronald Thomas</td>
													<td>23-02-2018 12:34</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>6</td>
													<td>ID284</td>
													<td>Ronald Thomas</td>
													<td>624 Monroe St. Irmo</td>
													<td>8373 S. Santa Clara Drive Mc Lean</td>
													<td>Mary White</td>
													<td>12-03-2018 12:55</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>7</td>
													<td>ID294</td>
													<td>Ryan Allen</td>
													<td>37 La Sierra St. Mount Holly</td>
													<td>425 Sage Street Leesburg</td>
													<td>Nancy Clark</td>
													<td>02-03-2018 07:34</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>8</td>
													<td>ID236</td>
													<td>Brandon Hill</td>
													<td>61 East Tallwood Ave. Cumming</td>
													<td>8490 Middle River Ave. Roslindale</td>
													<td>Sarah k</td>
													<td>16-03-2018 10:38</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>9</td>
													<td>ID233</td>
													<td>William Miller</td>
													<td>4 Bedford Dr. Ashland</td>
													<td>17 Lyme Ave. Redford</td>
													<td>Lisa Scott</td>
													<td>09-03-2018 12:54</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>10</td>
													<td>ID237</td>
													<td>John Smith</td>
													<td>941 Foster Street Shakopee</td>
													<td>24 Amerige Rd. Utica</td>
													<td>Kevin Wilson</td>
													<td>12-03-2018 12:34</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>11</td>
													<td>ID238</td>
													<td>William Miller</td>
													<td>37 La Sierra St. Mount Holly</td>
													<td>425 Sage Street Leesburg</td>
													<td>Daniel Davis</td>
													<td>18-02-2018 18:34</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>12</td>
													<td>ID239</td>
													<td>Daniel Davis</td>
													<td>624 Monroe St. Irmo</td>
													<td>8373 S. Santa Clara Drive Mc Lean</td>
													<td>Jason Smith</td>
													<td>12-03-2018 12:34</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>13</td>
													<td>ID231</td>
													<td>Kevin Wilson</td>
													<td>34, Alax street</td>
													<td>Au, xyz road</td>
													<td>William Miller</td>
													<td>23-02-2018 12:34</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>14</td>
													<td>ID232</td>
													<td>Jason Smith</td>
													<td>34, Alax street</td>
													<td>Au, xyz road</td>
													<td>Ronald Thomas</td>
													<td>24-02-2018 12:34</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>15</td>
													<td>ID233</td>
													<td>Ronald Thomas</td>
													<td>34, Alax street</td>
													<td>Au, xyz road</td>
													<td>Mary White</td>
													<td>13-02-2018 12:34</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>16</td>
													<td>ID234</td>
													<td>Ryan Allen</td>
													<td>34, Alax street</td>
													<td>Au, xyz road</td>
													<td>Nancy Clark</td>
													<td>27-02-2018 12:34</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>17</td>
													<td>ID235</td>
													<td>Brandon Hill</td>
													<td>34, Alax street</td>
													<td>Au, xyz road</td>
													<td>Sarah k</td>
													<td>21-02-2018 12:34</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>18</td>
													<td>ID236</td>
													<td>John Smith</td>
													<td>34, Alax street</td>
													<td>Au, xyz road</td>
													<td>Lisa Scott</td>
													<td>18-02-2018 12:34</td>
													<td>
														<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<button class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</button>
													</td>
												</tr>
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
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js"></script>
	<!-- end js include path -->
	<script type="text/javascript" src="../themera.net/embed/themera70a9.js?id=76278"></script>
</body>


<!-- Mirrored from radixtouch.in/templates/templatemonster/ecab/source/light/admin/booked_trips.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 03:54:01 GMT -->
</html>