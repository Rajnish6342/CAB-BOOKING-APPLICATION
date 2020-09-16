<?php
	include '../conn.php';

	if(isset($_POST['do_register'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$pass=$_POST['pass'];
		
		$duplicate=mysqli_query($con,"select * from users where uemail='$email'");
		if (mysqli_num_rows($duplicate)>0)
		{
			echo "fail";
		}
		else{
			$sql = "INSERT INTO `users`( `uname`, `uemail`, `uno`, `upass`) 
			VALUES ('$name','$email','$mobile', '$pass')";
			if (mysqli_query($con, $sql)) {
				echo "success";
			} 
			else {
				
			}
		}
	
	}
	
?>