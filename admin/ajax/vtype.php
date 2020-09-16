<?php
	include 'conn.php';

	if(isset($_POST['do_vtype'])){
		$name=$_POST['name'];
		
		
		$duplicate=mysqli_query($con,"select * from vtypes where t_name='$name'");
		if (mysqli_num_rows($duplicate)>0)
		{
			echo "fail";
		}
		else{
			$sql = "INSERT INTO `vtypes`( `t_name`) 
			VALUES ('$name')";
			if (mysqli_query($con, $sql)) {
				echo "success";
			} 
			else {
				
			}
		}
	
	}
	
?>