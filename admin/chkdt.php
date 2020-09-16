<?php
include('conn.php');
if(isset($_POST['submit']))
{
	$cotxt=$_POST['cotxt'];
	$cotype=$_POST['ctype'];
	$codis=$_POST['codis'];
	$codate=$_POST['date'];
	$count=$_POST['count'];
	$date=date("Y-m-d");
	  

    if($codate >= $date)
    {
	  
	echo 	 $sql="insert into coupon (co_txt,co_type,co_dis,co_date,co_count) values('$cotxt','$cotype','$codis','$codate','$count')";
	$quer=mysqli_query($con,$sql);
		
    
        if($quer)
        {
			$msg1="alert alert-success";
			$msg="Coupon has been added successfully.";
		   
        }
        else 
        {
          
        }
    }
    else 
    {
		$msg2="alert alert-danger";
		$msg3="Enter a valid expriy date.";
    }

}

?>