

<?php 


require 'connect.php';
	session_start();
	if(!isset($_SESSION['auth'])){
		header("location:cPpanel.php?msg=error");
	}
?>
<?php



$id=$_GET['id'];
$response = $_GET['respons'];


if ($response==0) {
    $query = "UPDATE jobsoffering SET respons=1 WHERE id='$id'" ;
    $result = mysqli_query($conn, $query);

    if ($result){

        header("location:mangeoffers.php");
        
        }
        else {
            echo "there was a problem";
        }


}
else 
{
  echo"<h>Offer Already sponser</h1>";
  header("location:mangeoffers.php");

}
    

    


   




