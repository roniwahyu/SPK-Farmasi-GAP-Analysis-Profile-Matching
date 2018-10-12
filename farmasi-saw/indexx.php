<?php 
include('functions.php');
include('session.php');
include('header.php');
if(!empty($_SESSION['login_user'])):
	header("location: welcome.php");
else:
	header("location: form_login.php");
endif;
?>

