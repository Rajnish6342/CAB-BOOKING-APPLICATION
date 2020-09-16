<?php
include("conn.php");
 $id=$_REQUEST['id'];
 $sql="delete from vehicle where v_id=$id";
 $result=mysqli_query($con,$sql);
 header("Location:all_vehicles.php");
?>
