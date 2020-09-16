<?php
include('conn.php');

if(isset($_POST['do_contact']))
{
   
    $addr=$_POST['adr'];
	$email=$_POST['email'];
	$mno=$_POST['no'];  
		$sql="update cont set addr='$addr',email='$email',mno='$mno'";
	$quer=mysqli_query($con,$sql);
		
    
        if($quer)
        {
			echo "1";
        }
        
    
   

}

?>