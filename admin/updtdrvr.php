<?php
include('conn.php');
if(isset($_POST['submit']))
{
    $id=$_POST['edit_id'];
    $name=$_POST['fname'];
	$sname=$_POST['sname'];
	$ad1=$_POST['ad1'];
	$ad2=$_POST['ad2'];
	$city=$_POST['city'];
	$cnt=$_POST['cnt'];
	$zip=$_POST['zip'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$mno=$_POST['mno'];
	$gen=$_POST['gen'];
	$img=$_FILES["img"]['name'];




	if(!empty($_FILES['img']['name'])) //new image uploaded
{
	$sql="update drivers set d_fname='$name',d_sname='$sname',d_s1='$ad1',d_s2='$ad2',d_city='$city',d_state='$cnt',d_zip='$zip',d_mail='$email',d_mno='$mno',d_gen='$gen',d_limg='$img',d_pass='$pass' where d_id='$id'";
	$quer=mysqli_query($con,$sql);
		
    
        if($quer)
        {
			move_uploaded_file($_FILES["img"]["tmp_name"],"uploads/".$_FILES["img"]["name"]); 
			header('Location: all_drivers.php');
            
        }
}
else // no image uploaded
{
  
	$sql="update drivers set d_fname='$name',d_sname='$sname',d_s1='$ad1',d_s2='$ad2',d_city='$city',d_state='$cnt',d_zip='$zip',d_mail='$email',d_mno='$mno',d_gen='$gen',d_pass='$pass' where d_id='$id'";
	$quer=mysqli_query($con,$sql);
		
    
        if($quer)
        {
			
			header('Location: all_drivers.php');
            
        }
}  

}

?>