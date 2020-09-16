<?php
include("conn.php");
 $id=$_REQUEST['id'];
 $sql="delete from drivers where d_id=$id";
 $result=mysqli_query($con,$sql);
 header("Location:all_drivers.php");
?>
