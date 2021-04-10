
<?php 


require 'connect.php';
	session_start();
	if(!isset($_SESSION['auth'])){
		header("location:cPpanel.php?msg=error");
	}
?>

<?php

$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$telNo = $_POST['telNo'];
$type = $_POST['type'];
$id=$_POST['id'];

$query = "UPDATE users SET username='$username', email='$email', address='$address' , telNo=$telNo ,type=$type WHERE id=$id";

$result = mysqli_query($conn, $query);

if ($result){
    header("location:updateuserform.php");
}
else{
	echo "problem";
	echo mysqli_error($conn);
}

