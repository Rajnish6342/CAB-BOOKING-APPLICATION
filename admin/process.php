<?php
include('conn.php');


if(isset($_POST))
{

	$name 		= $_POST['firstname'];
    $email 		= $_POST['email'];
    $sub		= $_POST['sub'];
	$tel	    = $_POST['tel'];
	$msg		= $_POST['msg'];

    $sql="insert into contact (cont_name,cont_email,cont_sub,cont_no,cont_msg)) values('$name','$email','$sub','$tel','$msg')";
	$quer=mysqli_query($con,$sql);
		if($quer){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}
else{
	echo 'No data';
}
?>