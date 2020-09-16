<?php
include('../conn.php');

if(isset($_POST['do_acpt']))
{
  $ref=$_POST['ref'];
 $fare=$_POST['fare'];
 $dist=$_POST['dist'];
 $drvr=$_POST['drvr'];
 
 $canc="select * from bookings where book_ref='$ref'";
 $result=mysqli_query($con,$canc);
 foreach($result as $row)
										{


      if($row['bk_status']=='1')
      {
         
        echo "fail";
        
      }

 else
        {
          $sql="update bookings set bk_status='1',fare='$fare',dist='$dist' ,drvr='$drvr' where  book_ref='$ref'";
          $quer=mysqli_query($con,$sql);
          echo "done";
          
        }
 exit();
}
}
?>