<?php
include("conn.php");
 $id=$_REQUEST['id'];
 $sql="delete from gallery where gid=$id";
 $result=mysqli_query($con,$sql);
 header("Location:viewgallery.php");
?>
