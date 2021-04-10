<?php

require 'connect.php';

session_start();

$id = $_GET['id'];


$query = "DELETE FROM adv where id=$id";

$result = mysqli_query($conn, $query);


if ($result){

	header("location:manageadv.php");
}
else{
	echo "there was a problem";
}?>