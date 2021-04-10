<?php 
	session_start();
	if(!isset($_SESSION['login'])){
		header("location:login.php?msg=error");
	}
?>


<?php

$id=$_SESSION ['login'];
require 'connect.php';

if (isset($_FILES["image"]))
{
	$currentDir = getcwd();
	$target_dir="/assets/img/".$_FILES["image"]["name"];
	$img="/assets/img/".$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],$currentDir.$target_dir);
}
$jobtittle =mysqli_real_escape_string($conn,$_POST['job_tittle']);
$companyname =mysqli_real_escape_string($conn,$_POST['company_name']);
$category = mysqli_real_escape_string($conn,$_POST['category']);
$myaddress =mysqli_real_escape_string($conn,$_POST['address']);
$street = mysqli_real_escape_string($conn,$_POST['street']);
$city = mysqli_real_escape_string($conn,$_POST['city']);
$jobdes= mysqli_real_escape_string($conn,$_POST['job_des']);
$jobreq = mysqli_real_escape_string($conn,$_POST['job_req']);
$salary = mysqli_real_escape_string($conn,$_POST['salary']);
$teleNo =$_POST['teleNo'];
$email = mysqli_real_escape_string($conn,$_POST['email']);

$job_type = mysqli_real_escape_string($conn,$_POST['job_type']);

$query = "INSERT into jobsoffering ( `image`, `job_tittle`, `company_name`,`category`, `address`,`street`, `city`, `job_des`, `job_req`, `salary`, `teleNo`, `email`,`job_type`,`user_id`) VALUES ('$img','$jobtittle','$companyname','$category','$myaddress', '$street', '$city', '$jobdes', '$jobreq', '$salary',$teleNo, '$email','$job_type', $id )";



$result = mysqli_query($conn, $query);



if ($result){
	echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>";

}
else{
	echo "<script type='text/javascript'>alert('Failed!')</script>";
	
}


?>