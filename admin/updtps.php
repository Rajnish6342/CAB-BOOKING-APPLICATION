<?php
include('conn.php');
if(isset($_POST['submit']))
{
    $id=$_POST['edit_id'];
    $name=$_POST['name'];
	$email=$_POST['email'];
	$mno=$_POST['mno'];
	
	  

   
	  
		$sql="update users set uname='$name',uemail='$email',uno='$mno' where u_id='$id'";
	$quer=mysqli_query($con,$sql);
		
    
        if($quer)
        {
			$msg1="alert alert-success";
			$msg="User has been updated successfully.";
            header('Location: all_passenger.php');
        }
        
    
   

}

?>