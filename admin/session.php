<?php
session_start();
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:login.php');
}

?>