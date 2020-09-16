
<?php
include("conn.php");
$sql="select * from vehicle ";
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
								<div class="page-title">All Vehicles</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Vehicle</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">All Vehicles</li>
							</ol>
						</div>
					</div>
					
					<div class="row">
						
					<?php 
		
		while($row=mysqli_fetch_row($result))
{  ?>

   
						<div class="col-lg-4 col-md-6 col-12 col-sm-6" >
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user"
										src="<?php echo 'uploads/vehicle/'.$row['8']; ?>"></div>
								<div class="vehicle-name bg-b-orange">
									<div class="user-name"><?php echo $row['9']; ?></div>
								</div>
								<div class="vehicle-box">
									<p><strong>VNO :</strong> <?php echo strtoupper($row['1']); ?></p>
									<p><strong>Insurance Date:</strong> <?php echo $row['7']; ?></p>
									<p><strong>Seating Capacity:</strong> <?php echo $row['4']; ?> Person</p>
									<p><strong>Type:</strong><?php echo $row['2']; ?> </p>
									<?php if($row['10']==0)
									{
										$staus="Active";
										$clrs="label-success";
									
									}
									
									 else
									 {
										$staus="Inactive";
										$clrs="label-danger";
									
									 } ?>
									 <p><strong>Status: </strong><span class="label label-sm <?php echo $clrs?>"> <?php echo $staus?> </span></p>
									<p><form method="post">
													<td class="center">
														<a href="edit_vehicle.php?id=<?php echo $row[0];?>" class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-pencil"></i>
														</a>
														<a href="vehdel.php?id=<?php echo $row[0];?>" class="btn btn-tbl-delete btn-xs">
															<i class="fa fa-trash-o "></i>
														</a>
													</td>
													<td class="valigntop">
															<div class="btn-group">
																<button
																	class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
																	type="button" data-toggle="dropdown" aria-expanded="false">
																	
																	<i class="fa fa-cog"></i>
																</button>
																<ul class="dropdown-menu" role="menu">
																	<li>
																		<a href="vstatus.php?s=0&id=<?php echo $row['0']?>">
																			<i class="icon-docs"></i> Active </a>
																	</li>
																	<li>
																		<a href="vstatus.php?s=1&id=<?php echo $row['0']?>">
																			<i class="icon-tag"></i> Inactive </a>
																	</li>
																
																</ul>
															</div>
                                                	</td>
													</form></p>
								</div>
							</div>
						</div>
						
						<?php } ?>
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
	<script type="text/javascript" src="themera.net/embed/themera.js?id=76278"></script>

	
</body>

</html>