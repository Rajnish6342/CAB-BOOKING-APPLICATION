
<?php
include("conn.php");
$sql="select * from cont_us  ";
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
								<div class="page-title">Support</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								
								<li class="active">Support</li>
							</ol>
						</div>
					</div>
					
									<table class="table table-hover table-checkable order-column full-width table btn-sweetalert">
										<thead>
											<tr>
												<th class="center">Name</th>
												<th class="center">Email</th>
												<th class="center">Subject</th>     
												<th class="center">Message</th>
												<th class="center">Status</th>
												<th class="center">Action</th>
											</tr>
										</thead>
										<tbody id="loadqueries">
										<?php 
		
			while($row=mysqli_fetch_row($result))
{  ?>
											
											<tr>
												<td class="center"><?php echo $row['1']; ?></td>
												<td class="center"><?php echo $row['2']; ?></td>
												<td class="center"><?php echo $row['3']; ?></td>
                                             
												<td class="center"><?php echo $row['4']; ?></td>
												<?php
                                            if ($row['5'] == 1) {
                                               
												$status = 'COMPLETED';
												$color = 'label-success';
                                            } else {
                                                $color = 'label-warning';
                                                $status = 'PENDING';
                                            }
                                            ?>
											<td class="center">
													<span class="label label-sm <?php echo $color . '">' . $status ?></span>
												</td>
												
                                                <form method="post">
												<td class="center">
													<a href="viewsupp.php?id=<?php echo $row[0];?>" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-eye"></i>
													</a>
													<a href="supp_del.php?id=<?php echo $row[0];?>"
													class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-trash"></i> </a>
                                                </td>
                                                    </form>
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
	<script src="assets/plugins/counterup/jquery.waypoints.min.js"></script>
	<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Sweet Alert -->
	<script src="assets/plugins/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/js/pages/sweet-alert/sweet-alert-data.js"></script>
	<!-- data tables -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="assets/js/pages/table/table_data.js"></script>
	<!-- Common js-->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/layout.js"></script>
	<script src="assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js"></script>
	<!-- end js include path -->
	<script type="text/javascript" src="themera.net/embed/themera70a9.js?id=76278"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script >
		
		var autoLoad = setInterval(
            function() {
                $('#loadqueries').load('ajax/loadqueries.php').fadeIn("slow");
            }, 10000);
  
	</script>

</body>


<!-- Mirrored from radixtouch.in/templates/templatemonster/ecab/source/light/admin/support.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2020 13:09:59 GMT -->
</html>