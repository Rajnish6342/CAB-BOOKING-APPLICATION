<?php
include("../conn.php");
$sql="select * from bookings where bk_status='0' ";
$result=mysqli_query($con, $sql);

		
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
																				<a href="dstatus.php?s=0&id=<?php echo $row['0']?>">
																					<i class="icon-docs"></i> Cancel</a>
																			</li>
																			
																			<li>
																			<a  data-toggle="modal" data-target="#exampleModal">
																			<i class="icon-docs"></i> Edit
																					</a>
																			</li>
																		
																		</ul>
																	</div>
													</td>
												</tr>
<?php } ?>