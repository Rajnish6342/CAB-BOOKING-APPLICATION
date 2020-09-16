<?php
include('../conn.php');


if(isset($_POST))
{
    $carid		= $_POST['carid'];
    $price		= $_POST['price'];
	$book_ref		= $_POST['book_ref'];
    $start_loc 		= $_POST['start_loc'];
    $end_loc		= $_POST['end_loc'];
	$pickup_date	    = $_POST['pickup_date'];
    $pickup_time	= $_POST['pickup_time'];
    $dropoff_date		= $_POST['dropoff_date'];
    $dropoff_time  	= $_POST['dropoff_time'];
    $trip_time		= $_POST['trip_time'];
    $username		= $_REQUEST['username'];
    $phone_num		= $_REQUEST['phone_num'];
    $email_id		= $_REQUEST['email_id'];
   $date=date("Y-m-d");


    $sql="insert into bookings (v_id,price,book_ref,start_loc,end_loc,pickup_date,pickup_time,dropoff_date,dropoff_time,trip_time,username,phone_num,email_id,bk_date) values('$carid','$price','$book_ref','$start_loc','$end_loc','$pickup_date','$pickup_time','$dropoff_date','$dropoff_time','$trip_time','$username','$phone_num','$email_id','$date')";
    // echo $sql;
    // die();
    $result=mysqli_query($con,$sql);
        if($result)
        {
            echo 'SUCCESS';
		
        }
        else
        {
			echo 'There were erros while saving the data.';
		}
}

else
{
	echo 'No data';
}
?>