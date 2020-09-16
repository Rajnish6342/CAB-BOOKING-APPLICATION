<?php
include('../conn.php');
session_start();
if(isset($_POST['do_login']))
{

 $email=$_POST['email'];
 $pass=$_POST['password'];
 $sql="select * from admin where uname='$email' and pass='$pass' ";
 $quer=mysqli_query($con,$sql);
 $count = mysqli_num_rows($quer);
      if($count==1)
      {
          $_SESSION['alogin']=$_POST['email'];
        echo "success";
        
      }

 else
        {
          echo "fail";
        }
 exit();
}
?>