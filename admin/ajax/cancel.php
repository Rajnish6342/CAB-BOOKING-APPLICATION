<?php
include("conn.php");
$s=$_REQUEST['s'];
$id=$_REQUEST['id'];
 $sql="update bookings set bk_status='$s' where bk_id='$id'";
$result=mysqli_query($con,$sql);
if($result)
{
    header("location:../active_trips.php");
}



?>