<?php
	include '../conn.php';

	if(isset($_POST['do_account'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
        $pass=$_POST['pass'];
        $npass=$_POST['npass'];
        
        if(!empty($_POST['pass'])) 
    {
		$duplicate=mysqli_query($con,"select upass from users where uemail='$email' && upass='$pass'");
		if (mysqli_num_rows($duplicate)>0)
		{
            $sql="update users set uname='$name',uno='$mobile',upass='$npass' where uemail='$email'";
            $quer=mysqli_query($con,$sql);
            if($quer)
            {
                echo "fail";
            }
           
                
            
        }
        else{
            echo "notfound";
        }
    }
        else
        {
			
            $sql="update users set uname='$name',uno='$mobile' where uemail='$email'";
            $quer=mysqli_query($con,$sql);
            if($quer)
            {
                echo "done";
            }
			
			
		}
	
	}
	
?>