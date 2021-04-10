<?php 
	session_start();
	if(!isset($_SESSION['auth'])){
		header("location:cPpanel.php?msg=error");
	}
?>


<?php

require 'connect.php';

if (isset($_FILES["img"]))
{
	$currentDir = getcwd();
	$target_dir="/assets/adv/".$_FILES["img"]["name"];
	$img="/assets/adv/".$_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'],$currentDir.$target_dir);
}
$title =mysqli_real_escape_string($conn,$_POST['title']);
$des= mysqli_real_escape_string($conn,$_POST['des']);
$link = mysqli_real_escape_string($conn,$_POST['link']);

$query = "INSERT into adv ( `img`, `title`, `des`,`link`) VALUES ('$img','$title','$des','$link')";



$result = mysqli_query($conn, $query);



if ($result){
	echo "<script type='text/javascript'>alert(' Successfully!')</script>";

}
else{
	echo "<script type='text/javascript'>alert('Failed!')</script>";
	
}


?>