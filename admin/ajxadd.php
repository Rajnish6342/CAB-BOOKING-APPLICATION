<?php
include("conn.php");
$name=$_POST['name'];
$uname=$_POST['name'];
$email=$_POST['name'];
$nmno=$_POST['name'];
$pass=$_POST['name'];
$sql="INSERT INTO `data` (`id`, `name`, `email`) VALUES (NULL, '$name', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else 
{
    echo "failed";
}
?>