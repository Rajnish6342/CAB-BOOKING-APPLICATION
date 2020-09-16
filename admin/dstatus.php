<?php
include("conn.php");
$s=$_REQUEST['s'];
$id=$_REQUEST['id'];
 $sql="update drivers set d_status='$s' where d_id='$id'";
$result=mysqli_query($con,$sql);
if($result)
{
    header("location:all_drivers.php");
}



?>