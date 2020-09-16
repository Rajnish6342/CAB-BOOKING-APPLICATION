<?php

session_start();
?>
<?php
include("conn.php");
$limit = 4;  // Number of entries to show in a page. 
// Look for a GET variable page if not found default is 1.      
if (isset($_GET["page"])) {  
  $pn  = $_GET["page"];  
}  
else {  
  $pn=1;  
};   

$start_from = ($pn-1) * $limit;   
$sql="select * from vehicle where v_status='0' LIMIT $start_from, $limit";
$result=mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themesjungle.net/html/prime-cab/fleet-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:07:22 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="description" content="City Taxi">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>City Taxi</title>

        <!-- Css Files Start -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/fontawesome-all.min.css" rel="stylesheet">
		<link id="switcher" href="css/color.css" rel="stylesheet">
		<link href="css/color-switcher.css" rel="stylesheet">
		<link href="css/jquery-ui.min.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<!-- Css Files End -->
		
		<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

    </head>
	<body>
		<!--Wrapper Content Start-->
		<div class="tj-wrapper">
			
			<!--Style Switcher Section Start-->
			
			<!--Style Switcher Section End-->
			<?php include 'menu.php';?>
			<!--Header Content End-->
			<!--Fleet Section Start-->
			<section class="car-fleet">
				<div class="container">
					<div class="row">
						<!--Fleet Column Start-->
						<div class="col-md-12 col-sm-12">
							<div class="fleet-nav-outer">
								<div class="row">
									<!--Fleet Result Count Column Start-->
									<div class="col-md-8 col-sm-8">
										<div class="result-count">
											<span>Showing <?php echo $limit ?> results</span>
										</div>
									</div>
									<!--Fleet Result Count Column End-->
									<!--Fleet Nav Column Start-->
									<div class="col-md-4 col-sm-4">
										<div class="car-tabs">
											<ul class="nav nav-tabs">
												<li class="active"><a href="#car-grid" data-toggle="tab"><i class="fas fa-th"></i></a></li>
											</ul>
										</div>
									</div>
									<!--Fleet Nav Column End-->
								</div>
							</div>
							<div class="car-filter-holder">
								<div class="row">
									<!--Fleet Categories Column Start-->
									<div class="col-md-3 col-sm-3">
										<div class="car-filter">
											<span>By Categories</span>
											<div class="select-list">
												<select name="car-category" class="selectpicker">
													<option>Select a Category</option>
													<option value="coupe">Coupe</option>
													<option value="crossover">Crossover</option>
													<option value="suv">SUV</option>
													<option value="mpv">MPV</option>
												</select>
											</div>
										</div>
									</div>
									<!--Fleet Categories Column End-->
									<!--Fleet Brand Column Start-->
									
									<!--Fleet Brand Column End-->
									<!--Fleet Seats Column Start-->
									
									<!--Fleet Seats Column End-->
									<!--Fleet Price Filter Column Start-->
									
									<!--Fleet Fleet Price Filter Column End-->
								</div>
							</div>
							<!--Tab Content Start-->
							<div class="tab-content">
								<!--Fleet Grid Tab Content Start-->
								<div class="tab-pane active" id="car-grid">
									<!--Fleet Grid Box Wrapper Start-->
									<div class="fleet-grid">
										<div class="row">
											
											
										<?php 
		
		while($row=mysqli_fetch_row($result))
{  ?>
											
											<!--Fleet Grid Box Start-->
											<div class="col-md-6 col-sm-6">
												<div class="fleet-grid-box">
													<!--Fleet Grid Thumb Start-->
													<figure class="fleet-thumb">
														<img src="<?php echo '../admin/uploads/vehicle/'.$row['8']; ?>" alt="">
														<figcaption class="fleet-caption">
															<div class="price-box">
																<strong><?php echo $row['5'];?>₹ <span>/ Km</span></strong>
															</div>
															<span class="rated"><?php echo $row['2'];?></span>
														</figcaption>
													</figure>
													<!--Fleet Grid Thumb End-->
													<!--Fleet Grid Text Start-->
													<div class="fleet-info-box">
														<div class="fleet-info">
															<h3><?php echo $row['9'];?></h3>
															
															
															<ul class="fleet-meta">
																<li><i class="fas fa-taxi"></i><?php echo $row['1'];?></li>
																<li><i class="fas fa-user-circle"></i><?php echo $row['4'];?> Passengers</li>
																<li><i class="fas fa-window-close"></i><?php echo $row['6'];?>₹</li>
															</ul>
														</div>
														<a href="booking-form.php?carid=<?php echo $row[0];?>&price=<?php echo $row['6'];?>" class="tj-btn">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
													</div>
													<!--Fleet Grid Text End-->
												</div>
											</div>
											<?php } ?>
											<!--Fleet Grid Box End-->
											
											
											
											
											
										</div>
									</div>
									<!--Fleet Grid Box Wrapper End-->
								</div>
								<!--Fleet Grid Tab Content End-->
								
								
							</div>
							<!--Tab Content End-->
							<!--Pagination Section Start-->
							<div class="pagination-box">
								<nav aria-label="navigation">
									<ul class="pagination">
								<?php	$sql = "select count(*) from vehicle where v_status='0'";   
$rs_result = mysqli_query($con,$sql);   
$row = mysqli_fetch_row($rs_result);   
$total_records = $row[0];   
// Number of pages required. 
$total_pages = ceil($total_records / $limit);   
$pagLink = "";                       
for ($i=1; $i<=$total_pages; $i++) { 
  if($i==$pn)  
    $pagLink .= "<li class='active'><a  href='fleet-grid.php?page= 
                                    ".$i."'>".$i."</a></li>"; 
  else
    $pagLink .= "<li><a href='fleet-grid.php?page=".$i."'> 
                                        ".$i."</a></li>";   
};   
echo $pagLink; 
?>
										
										
									</ul>
								</nav>
							</div>
							<!--Pagination Section End-->
						</div>
						<!--Fleet Column End-->
					</div>
				</div>
			</section>
			<!--Fleet Section End-->
		
			
			<!--Call To Action Content Start-->
			<section class="tj-cal-to-action">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<div class="cta-box">
								<img src="images/cta-icon1.png" alt=""/>
								<div class="cta-text">
									<strong>Best Price Guaranteed</strong>
									<p>A more recently with desktop softy  like aldus page maker.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="cta-box">
								<img src="images/cta-icon2.png" alt=""/>
								<div class="cta-text">
									<strong>24/7 Customer Care</strong>
									<p>A more recently with desktop softy  like aldus page maker.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="cta-box">
								<img src="images/cta-icon3.png" alt=""/>
								<div class="cta-text">
									<strong>Easy Bookings</strong>
									<p>A more recently with desktop softy  like aldus page maker.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Call To Action Content End-->
			<!--Footer Content Start-->
			<?php include 'footer.php';?>
			<!--Footer Copyright End-->
		</div>
		<!--Wrapper Content End-->
		
		<!-- Js Files Start --> 
		<script src="js/jquery-1.12.5.min.js"></script>
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/migrate.js"></script>  
		<script src="js/color-switcher.js"></script>
		<script src="js/jquery-ui.min.js"></script> 
		<script src="js/tweetie.js"></script>  
		<script src="js/custom.js"></script>  
		<!-- Js Files End --> 

		
	</body>

<!-- Mirrored from themesjungle.net/html/prime-cab/fleet-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 12:07:40 GMT -->
</html>