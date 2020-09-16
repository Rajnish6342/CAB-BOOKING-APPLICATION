<?php
include('../conn.php');
session_start();
if(isset($_POST['do_dlogin']))
{

 $email=$_POST['email'];
 $pass=$_POST['password'];
 $sql="select * from drivers where d_mail='$email' and d_pass='$pass'and d_status='0'";
 $quer=mysqli_query($con,$sql);
 $count = mysqli_num_rows($quer);
      if($count==1)
      {
          $_SESSION['dlogin']=$_POST['email'];
        echo "success";
        
      }

 else
        {
          echo "fail";
        }
 exit();
}
?>