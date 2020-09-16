<?php
include("../conn.php");
$sql="select * from cont_us  ";
$result=mysqli_query($con, $sql);

		
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