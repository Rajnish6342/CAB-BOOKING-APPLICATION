<?php
include("conn.php");
$s=$_REQUEST['s'];
$id=$_REQUEST['id'];
 $sql="update vehicle set v_status='$s' where v_id='$id'";
$result=mysqli_query($con,$sql);
if($result)
{
    header("location:all_vehicles.php");
}



?>