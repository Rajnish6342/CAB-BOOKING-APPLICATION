<?php 
session_start();
										include('../conn.php');
										
										
					$email=$_SESSION['login'];
					$limit = 2; 
					if (isset($_GET["page"])) {  
						$pn  = $_GET["page"];  
					  }  
					  else {  
						$pn=1;  
					  };   
					  
					  $start_from = ($pn-1) * $limit;  
                    $sql = "SELECT vehicle.v_img as Vimage1,bookings.start_loc,bookings.end_loc,bookings.book_ref,bookings.pickup_time,bookings.pickup_date,bookings.fare,bookings.dist,bookings.drvr from bookings join vehicle on bookings.v_id=vehicle.v_id  where bookings.bk_status='1' && bookings.email_id='$email' LIMIT $start_from, $limit";
					$result=mysqli_query($con,$sql);
					
					foreach($result as $row)
					{
				   ?>
                   	<li >
												
												<div class="vehicle_img"> <a href="#"><img src="../admin/uploads/vehicle/<?php echo $row['Vimage1']?>" alt="image"></a> </div>
												<div class="vehicle_title">
												<h6><a href="#">Book Ref: <?php echo $row['book_ref']?></a></h6>
												<p><b>From:<?php echo $row['start_loc']?></b><p>
												<p><b>To:<?php echo $row['end_loc']?></b><p>
												<p><b>Pick Time:<?php echo $row['pickup_time']?></b><p>
												<p><b>Distance:</b><?php echo $row['dist'] ?> Km<p>
												<p><b>Fare:</b><?php echo $row['fare'] ?> ₹<p>
												</div>
												
												
												<div class="vehicle_status"> <a href="#" class="btn outline btn-xs active-btn">Completed</a>
												<div class="clearfix"></div>
												
												
											
												<a href="print_invoice.php?pdf=1&ref=<?php echo $row['book_ref']?> "><i class="fas fa-print" aria-hidden="true"></i></a></div>
												
											</li>
                                            <?php } ?>