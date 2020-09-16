<?php
include("conn.php");
 $id=$_REQUEST['id'];
 $sql="delete from users where u_id=$id";
 $result=mysqli_query($con,$sql);
 header("Location:all_passenger.php");
?>
