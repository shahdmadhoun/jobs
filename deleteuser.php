<?php

require 'connect.php';

session_start();

$id = $_GET['id'];


$query = "DELETE FROM users where id=$id";

$result = mysqli_query($conn, $query);


if ($result){

	header("location:mangeuser.php");
}
else{
	echo "there was a problem";
}?>