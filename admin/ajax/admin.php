<?php
	include '../conn.php';

	if(isset($_POST['do_admin'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
        $pass=$_POST['pass'];
        $npass=$_POST['npass'];
        
        if(!empty($_POST['pass'])) 
    {
		$duplicate=mysqli_query($con,"select pass from admin where uname='$email' && pass='$pass'");
		if (mysqli_num_rows($duplicate)>0)
		{
            $sql="update admin set name='$name',pass='$npass' where uname='$email'";
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
			
            $sql="update admin set name='$name' where uname='$email'";
            $quer=mysqli_query($con,$sql);
            if($quer)
            {
                echo "done";
            }
			
			
		}
	
	}
	
?>