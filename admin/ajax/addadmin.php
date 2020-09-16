<?php
	include '../conn.php';

	if(isset($_POST['do_add'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		
		$duplicate=mysqli_query($con,"select * from admin where uname='$email'");
		if (mysqli_num_rows($duplicate)>0)
		{
			echo "fail";
		}
		else{
			$sql = "INSERT INTO `admin`( `name`, `uname`, `pass`) 
			VALUES ('$name','$email', '$pass')";
			if (mysqli_query($con, $sql)) {
				echo "success";
			} 
			else {
				
			}
		}
	
	}
	
?>