<?php
include("conn.php");
$s=$_REQUEST['s'];
$id=$_REQUEST['id'];
 $sql="update users set u_status='$s' where u_id='$id'";
$result=mysqli_query($con,$sql);
if($result)
{
    header("location:all_passenger.php");
}



?>