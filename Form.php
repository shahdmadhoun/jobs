<?php 

	require 'connect.php';

	session_start();
	$type=$_SESSION ['type'];

	if(isset($_SESSION['login']))
	{
		if($type==1)

		header("location:mainowner.php");

		elseif ($type==0)
		header("location:mainuser.php") ;

		else
		header("location:main.php") ;

	}

	else

	header("location:main.php") ;

		
	?>