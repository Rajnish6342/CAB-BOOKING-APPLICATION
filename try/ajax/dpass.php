<?php
session_start();
include('../conn.php');
if(isset($_POST['do_login']))
{
    $email = $_POST['email'];
    $result = mysqli_query($con,"SELECT * FROM users where d_mail='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
	
	$email_id=$row['d_mail'];
	$password=$row['d_pass'];
	if($email==$email_id) {
				$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: rjgamer242@gmail.com" . "\r\n" .
                "CC: rajnishsingh.n@gmail.com";
                if(mail($to,$subject,$txt,$headers))
                {
                
                    echo "done";
                }
            
			}
				else{
					echo 'fail';
				}
}
?>