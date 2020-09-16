<?php
include_once "conn.php";
extract($_POST);
if(isset($_POST['submit']))
{
    $q= "insert into drivers (d_fname,d_sname,d_s1,d_s2,d_city,d_state,d_zip,d_mail,d_mno,d_gen) values ('$fname','$sname','$ad1','$ad2','$city','$cnt','$zip','$email','$mno','$gen')";

    $query = mysqli_query($con,$q);
    
}



?>