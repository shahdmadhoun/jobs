<?php

require 'connect.php';

session_start();

$id = $_GET['id'];
$category = $_GET['category'];

if ($category=="Full Time") {
    $query = "UPDATE jobsoffering SET category='Part Time' WHERE id='$id'" ;
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
    $query = "UPDATE jobsoffering SET category='Full Time' WHERE id='$id'" ;
    $result = mysqli_query($conn, $query);

    if ($result){

        header("location:mangeoffers.php");
        
        }
        else {
            echo "there was a problem";
        }


}


?>