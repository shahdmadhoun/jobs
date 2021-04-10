
<?php 


require 'connect.php';
	session_start();
	if(!isset($_SESSION['auth'])){
		header("location:cPpanel.php?msg=error");
	}
?>

<?php


$id = $_GET['id'];


$query = "DELETE FROM jobsoffering where id=$id";

$result = mysqli_query($conn, $query);


if ($result){

header("location:mangeoffers.php");

}
else{
	echo "there was a problem";
}