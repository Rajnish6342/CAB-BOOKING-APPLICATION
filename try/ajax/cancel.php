<?php
include('../conn.php');

if(isset($_POST['do_cancel']))
{
  $ref=$_POST['ref'];
 $email=$_POST['email'];
 $res=$_POST['res'];
 $cmnt=$_POST['cmnt'];
 $date=date("Y-m-d");
 $canc="select * from bookings where book_ref='$ref'";
 $result=mysqli_query($con,$canc);
 foreach($result as $row)
										{


      if($row['bk_status']=='2')
      {
         
        echo "fail";
        
      }

 else
        {
          $sql="update bookings set bk_status='2',canc_date='$date',canc_res='$res',canc_cmnt='$cmnt' where email_id='$email' && book_ref='$ref'";
          $quer=mysqli_query($con,$sql);
          
        }
 exit();
}
}
?>