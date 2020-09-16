<?php
include('conn.php');
if(isset($_POST['submit']))
{
    $id=$_POST['0'];
    $a=$_POST['1'];
    $b=$_POST['2'];
	$c=$_POST['3'];
    $d=$_POST['4'];
    $e=$_POST['5'];
	
	  

   
	  
		$sql="update bookings set start_loc='$a',end_loc='$b',phone_num='$e',pickup_date='$c',pickup_time='$d' where bk_id='$id'";
	$quer=mysqli_query($con,$sql);
		
    
        if($quer)
        {
			
            header('Location: ../active_trips.php');
        }
        
    
   

}

?>