
<?php
include("conn.php");
$sql="select * from drivers  ";
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
								<div class="page-title">All Drivers</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								
								<li class="active">All Drivers</li>
							</ol>
						</div>
					</div>
					<div class="tab-content tab-space">
						<div class="tab-pane active show" id="tab1">
							<div class="row">
								<div class="col-md-12">
									<div class="card-box">
										<div class="card-head">
											<button id="panel-button"
												class="mdl-button mdl-js-button mdl-button--icon pull-right"
												data-upgraded=",MaterialButton">
												<i class="material-icons">more_vert</i>
											</button>
											<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
												data-mdl-for="panel-button">
												<li class="mdl-menu__item"><i
														class="material-icons">assistant_photo</i>Action</li>
												<li class="mdl-menu__item"><i class="material-icons">print</i>Another
													action</li>
												<li class="mdl-menu__item"><i
														class="material-icons">favorite</i>Something else here</li>
											</ul>
										</div>
										<div class="card-body ">
											<div class="table-scrollable">
												<table class="table table-hover table-checkable order-column full-width"
													id="example4">
													<thead>
														<tr>
														
															<th class="center"> Name </th>
															<th class="center"> Mobile </th>
															<th class="center"> Email </th>
															<th class="center"> Address </th>
															<th class="center">Joining Date</th>
															
															<th class="center">Status</th>
															<th class="center"> Action </th>
														</tr>
													</thead>
													<tbody>
													<?php 
		
			while($row=mysqli_fetch_row($result))
{  ?>
														<tr class="odd gradeX">
															
															<td class="center"><?php echo $row['1']; ?></td>
															<td class="center"><a href="tel:<?php echo $row['9']; ?>">
															<?php echo $row['9']; ?> </a></td>
															<td class="center"><a href="mailto:<?php echo $row['8']; ?>">
															<?php echo $row['8']; ?></a></td>
															<td class="center"><?php echo $row['3']; ?></td>
															<td class="center"><?php echo $row['15']?></td>
															
															<?php if($row['13']==0)
									{
										$staus="Active";
										$clrs="label-success";
									
									}
									
									 else
									 {
										$staus="Inactive";
										$clrs="label-danger";
									
									 } ?>
															<td>
																<span
																class="label label-sm <?php echo $clrs?>"><?php echo $staus ?>
															</span>
															</td>
															<form method="post">
															<td class="center">
															<a href="viewdriver.php?id=<?php echo $row[0];?>" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-eye"></i>
															</a>
																
																<a href="ddel.php?id=<?php echo $row[0];?>" class="btn btn-tbl-delete btn-xs">
																	<i class="fa fa-trash-o "></i>
																</a>
																
																	<div class="btn-group">
																		<button
																			class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
																			type="button" data-toggle="dropdown" aria-expanded="false">
																			
																			<i class="fa fa-cog"></i>
																		</button>
																		<ul class="dropdown-menu" role="menu">
																			<li>
																				<a href="dstatus.php?s=0&id=<?php echo $row['0']?>">
																					<i class="icon-docs"></i> Active </a>
																			</li>
																			<li>
																				<a href="dstatus.php?s=1&id=<?php echo $row['0']?>">
																					<i class="icon-tag"></i> Inactive </a>
																			</li>
																			<li>
																				<a href="updt_driver.php?id=<?php echo $row['0']?>">
																					<i class="icon-tag"></i> Edit </a>
																			</li>
																			
																		
																		</ul>
																	</div>
                                                	
															</td>
														</tr>
														
														</form>
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
	<script src="assets/js/pages/table/table_data.js"></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js"></script>
	<!-- end js include path -->
	<script type="text/javascript" src="../themera.net/embed/themera70a9.js?id=76278"></script>
</body>


<!-- Mirrored from radixtouch.in/templates/templatemonster/ecab/source/light/admin/all_drivers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 03:55:53 GMT -->
</html>