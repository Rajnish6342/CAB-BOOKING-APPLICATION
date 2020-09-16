<?php
include('../conn.php');


if(isset($_POST))
{

	$name 		= $_REQUEST['name'];
    $email 		= $_REQUEST['email'];
    $sub		= $_REQUEST['subject'];
	$msg		= $_REQUEST['message'];

    $sql="insert into cont_us(cont_name,cont_email,cont_sub,cont_msg) values('$name','$email','$sub','$msg')";
	$quer=mysqli_query($con,$sql);
        if($quer)
        {
			echo '1';
        }
        else
        {
			echo 'There were erros while saving the data.';
		}
}

else
{
	echo 'No data';
}
?>