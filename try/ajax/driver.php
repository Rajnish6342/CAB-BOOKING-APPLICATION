<?php
	include '../conn.php';

	if(isset($_POST['do_account'])){
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
        $pass=$_POST['pass'];
        $npass=$_POST['npass'];
        
        if(!empty($_POST['pass'])) 
    {
		$duplicate=mysqli_query($con,"select d_pass from drivers where d_mail='$email' && d_pass='$pass'");
		if (mysqli_num_rows($duplicate)>0)
		{
            $sql="update drivers set d_mno='$mobile',d_pass='$npass' where d_mail='$email'";
            $quer=mysqli_query($con,$sql);
            if($quer)
            {
                echo "fail";
            }
           
                
            
        }
        else
        {
            echo "notfound";
        }
    }
        else
        {
			
            $sql="update drivers set d_mno='$mobile' where d_mail='$email'";
            $quer=mysqli_query($con,$sql);
            if($quer)
            {
                echo "done";
            }
			
			
		}
	
	}
	
?>