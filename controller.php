<?php
	
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];

	if($email=="Aarti@aarti" && $password=="Aarti")
	{
		session_start();
		$_SESSION['name']=$email;
		header('location:main.php');
	}
	else
	{
		header('location:login.php');
	}
?>

