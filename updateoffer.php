<?php 


require 'connect.php';
	session_start();
	if(!isset($_SESSION['auth'])){
		header("location:cPpanel.php?msg=error");
	}
?>

<?php

$response =$_POST['respons'];
$img =$_POST['image'];
$jobtittle =$_POST['job_tittle'];
$companyname =$_POST['company_name'];
$category = $_POST['category'];
$myaddress =$_POST['address'];
$street = $_POST['street'];
$city =$_POST['city'];
$jobdes= $_POST['job_des'];
$jobreq =$_POST['job_req'];
$salary = $_POST['salary'];
$teleNo =$_POST['teleNo'];
$email = $_POST['email'];
$accept=$_POST['accept'];
$id=$_POST['id'];


$query = "UPDATE jobsoffering SET respons= $response, image='$img', job_tittle='$jobtittle' , company_name='$companyname',category='$category', address='myaddress',street='$street', city='$city', job_des='$jobdes', job_req='$jobreq', salary='$salary',teleNo=$teleNo, email='$email', accept=$accept WHERE id=$id";

$result = mysqli_query($conn, $query);

if ($result){
    header("location:mangeoffers.php");
}
else{
	echo "problem";
	echo mysqli_error($conn);
}

