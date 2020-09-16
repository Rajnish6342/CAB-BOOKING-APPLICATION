<?php
include('conn.php');


if(isset($_POST))
{

	$name 		= $_POST['txtimg'];
    $img		= $_FILES['img']['name'];
    

    $sql= "insert into gallery (gtitle,gmig) values ('$name','$img')";
	$quer=mysqli_query($con,$sql);
        if($quer)
        {
            move_uploaded_file($_FILES["img"]["tmp_name"],"uploads/gallery/".$_FILES["img"]["name"]);
			echo 'Successfully saved.';
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