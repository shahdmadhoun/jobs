

<?php 


require 'connect.php';
	session_start();
	if(!isset($_SESSION['auth'])){
		header("location:cPpanel.php?msg=error");
	}
?>
<?php



$id=$_GET['id'];
$accept = $_GET['accept'];


if ($accept==0) {
    $query = "UPDATE jobsoffering SET accept=1 WHERE id='$id'" ;
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
  echo"<h>Offer Already Accepted</h1>";
  header("location:mangeoffers.php");

}
    

    


   




