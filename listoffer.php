
<?php 
	session_start();
	if(!isset($_SESSION['login'])){
		header("location:login.php?msg=error");
	}
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>List Offers</title>
<style>
    .container {
        width: 500px;
    }
    
    .cs {
        margin-top: 20px;
    }
    
    .list-group-item {
        background-color: cornsilk;
    }
    
    .body {
        margin: 0px;
        padding: 0px;
        background-image: url(https://www.actioncoach.ca/wp-content/uploads/2019/03/happy-employees-1.jpg);
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0px;
        padding: 0px;
    }
</style>
</head>
<body class="body">
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">

        <a class="navbar-brand" href="#">LOJOBS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <?php     
                if(isset($_SESSION['type'])) {
                $type=$_SESSION ['type'];
                   if($type==1){
                    echo"<a class='nav-link' href='mainowner.php'>Home <span class='sr-only'>(current)</span></a>";
                  }
               else {
                  echo"<a class='nav-link' href='mainuser.php'>Home <span class='sr-only'>(current)</span></a>";

               }
               }
                  
                else
                {echo"<a class='nav-link' href='main.php'>Home <span class='sr-only'>(current)</span></a>";
                }
                ?>

                </li>
                <?php
                if($type==1)
                {
                  echo"

                  <li class='nav-item'>
                    <a class='nav-link' href='jobofferform.php'>Add Offer</a>
                  </li>

                <li class='nav-item'>
                    <a class='nav-link' href='listoffer.php'>List My All Offers</a>
                </li>
                
                <li class='nav-item'><a class='nav-link' href='#'>About Us</a></li>
                  <li class='nav-item'><a class='nav-link' href='#'>Contact Us</a></li>";
                
                }
                   else
                   echo"<li class='nav-item'><a class='nav-link' href='#'>About Us</a></li>
                   <li class='nav-item'><a class='nav-link' href='#'>Contact Us</a></li>";
 
                ?>
            </ul>

        </div>

        </div>
        <?php
 if(isset($_SESSION['type'])){
 $type=$_SESSION ['type'];
 if($type==1){

    echo"<form action='logout.php' style='display: inline;'>
    <button type='submit' class='btn btn-secondary'>Logout</button>
</form>";  }
   else

   if($type==0){
    echo"<form action='logout.php' style='display: inline;'>
    <button type='submit' class='btn btn-secondary'>Logout</button>
    </form>";   }

 }
 else
{

    echo"<div style='text-align: right;'>
            <form action='reg.php' style='display: inline;'>
                <button type='submit' class='btn btn-secondary'>Sign Up</button>
            </form>

            <form action='login.php' style='display: inline;'>
                <button type='submit' class='btn btn-secondary' style='background-color:#3a1618;'>Login</button>
            </form>

        </div>";
}
?>

    </nav>


<div class="container-fluid">

   <?php 

$id=$_SESSION ['login'];
require 'connect.php';
$sql = "SELECT * FROM jobsoffering WHERE user_id = $id ";
$result = mysqli_query($conn,$sql);
 

echo "<h3 style='background-color: rgba(255, 255, 255, 0.8) ; text-align:center;' class='display-2'>The List Of Your All Job Offers </h3>";






	while($row = mysqli_fetch_assoc($result))
	{
		echo"<center><div class='col-lg-5'>";

      echo"<div class='my-3 p-3 rounded box-shadow' style='background-color:cornsilk' >";

      echo"<div class='media text-muted pt-3'>";
      
      echo"<div class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray'>";
      echo"<div class='d-flex justify-content-between align-items-center w-100'>";
      echo"<strong class='text-gray-dark'>Job Title : ".$row['job_tittle']."</strong>";
     
      echo"<a href='detail.php?id=".$row['id']."'>Details</a>";
      echo"</div>";
      echo"</div>";
      echo"</div>";

     echo"</div>";
echo"</div></center>";
	}








?>


   


</div>

 <footer id="sticky-footer" class="py-4 bg-dark text-white-50 ">
        <div class="container text-center">
            <small>Copyright © LOJOBS</small>
        </div>

    </footer>


   

</body>
</html>
