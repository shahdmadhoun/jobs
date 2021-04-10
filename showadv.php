

<?php 


require 'connect.php';
	session_start();
	if(!isset($_SESSION['auth'])){
		header("location:cPpanel.php?msg=error");
	}
?>
<?php



$id=$_GET['id'];
$shows = $_GET['shows'];


if ($shows==0) {
    $query = "UPDATE adv SET shows=1 WHERE id='$id'" ;
    $result = mysqli_query($conn, $query);

    if ($result){

        header("location:manageadv.php");
        
        }
        else {
            echo "there was a problem";
        }


}
else 
{
    $query = "UPDATE adv SET shows=0 WHERE id='$id'" ;
    $result = mysqli_query($conn, $query);
    if ($result){

        header("location:manageadv.php");
        
        }
        else {
            echo "there was a problem";
        }


}
    

    


   




