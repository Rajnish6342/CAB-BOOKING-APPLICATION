
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
								<div class="page-title">Driver Details</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Driver Details</li>
							</ol>
						</div>
					</div>
                    <!-- add content here -->
                    <div id="editor">
					<div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <?php
								include_once "conn.php";
								$queryID = $_REQUEST['id'];
                                $sql = "SELECT * FROM drivers where d_id=$queryID";
                                $result = mysqli_query($con, $sql);
                                $row = mysqli_fetch_assoc($result);
                                ?>
                                <!-- <div class="profile-basic"> -->
                                <div class="row">

                                    <div class="col-md-7">
                                        <ul class="personal-info">
                                            <li>
                                                <span class="title">Name:</span>
                                                <span class="text"><?php echo $row['d_fname']; ?> <?php echo $row['d_sname']; ?></span>
                                            </li>
                                            <li>
                                                <span class="title">Email:</span>
                                                <span class="text"><a href="mailto:<?php echo $row['d_mail']; ?>"><?php echo $row['d_mail']; ?></a></span>
                                            </li>
                                            <li>
                                                <span class="title">Addres:</span>
                                                <span class="text"><?php echo $row['d_s1']; ?> <?php echo $row['d_s2']; ?> <?php echo $row['d_city']; ?> <?php echo $row['d_state']; ?></span>
                                            </li>
                                            <li>
                                                <span class="title">Mobile No:</span>
                                                <span class="text"><?php echo $row['d_mno']; ?></span>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h3 class="card-title">License:</h3>
                            <div><img src="<?php echo 'uploads/'.$row['d_limg']; ?>" height="200"  width="200"/></div>
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
    <script src="assets/js/ckeditor.js"></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js"></script>
	<!-- end js include path -->
	<script type="text/javascript" src="../../../../../../../themera.net/embed/themera70a9.js?id=76278"></script>
</body>


<!-- Mirrored from radixtouch.in/templates/templatemonster/ecab/source/light/admin/blank_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2020 13:11:55 GMT -->
</html>