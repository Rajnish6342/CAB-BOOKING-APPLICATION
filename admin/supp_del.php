<?php
include("conn.php");
 $id=$_REQUEST['id'];
 $sql="delete from cont_us where cont_id=$id";
 $result=mysqli_query($con,$sql);
 header("Location:support.php");
?>
