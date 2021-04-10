<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Details</title>
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
                session_start();
                if(isset($_SESSION['type'])){
                    $type=$_SESSION ['type'];
                       if($type==1){
                        echo"<a class='nav-link' href='mainowner.php'>Home <span class='sr-only'>(current)</span></a>
                        <li class='nav-item'>
                        <a class='nav-link' href='jobofferform.php'>Add Offer</a>
                      </li>
    
                    <li class='nav-item'>
                        <a class='nav-link' href='listoffer.php'>List My All Offers</a>
                    </li>
                    
                    <li class='nav-item'><a class='nav-link' href='#'>About Us</a></li>
                      <li class='nav-item'><a class='nav-link' href='#'>Contact Us</a></li>";
                    }
                   else {
                      echo"<a class='nav-link' href='mainuser.php'>Home <span class='sr-only'>(current)</span></a>
                      <li class='nav-item'><a class='nav-link' href='#'>About Us</a></li>
                      <li class='nav-item'><a class='nav-link' href='#'>Contact Us</a></li>";
                   }
                   }
                      
                    else
                    {echo"<a class='nav-link' href='main.php'>Home <span class='sr-only'>(current)</span></a>
                        <li class='nav-item'><a class='nav-link' href='#'>About Us</a></li>
                        <li class='nav-item'><a class='nav-link' href='#'>Contact Us</a></li>";
                    }
                ?>

                </li>

               
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

    <?php

$id =$_GET['id'];
require 'connect.php';

 $query = "SELECT * FROM jobsoffering WHERE id='$id'";
 mysqli_query( $conn,"UPDATE  jobsoffering SET  mostview=mostview+1  WHERE id='$id'");
 $result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

if($row['image']== "/assets/img/")
        {           

            echo "<ul class='list-group-item list-group-item-success container cs'>"."<center><img   class='mr-2 rounded' style='  padding:10px; vertical-align:center ;' src='/basic-requirements/image/default1.png' alt='' width='120px' height='120px'></center>"."</ul>";

        }
else
        {
            echo "<ul class='list-group-item list-group-item-success container cs'>"." <center><img   padding:10px; vertical-align:center ;' src='".'/basic-requirements'.$row['image']."'  alt='' width='120px' height='120px'> </center>"."</ul>";
        }

echo "<ul class='list-group-item list-group-item-success container '>"."JOB TITLE : ". "$row[job_tittle]"."</ul>";
echo "<ul class='list-group-item list-group-item-success container '>"."COMPANY NAME : ". "$row[company_name]"."</ul>";
echo"<ul class='list-group-item list-group-item-success container'>" ."CATEGORY : ". " $row[category]" ."</ul>";
echo"<ul class='list-group-item list-group-item-success container'>" ."ADDRESS : ". " $row[address]" ."</ul>";
echo"<ul class='list-group-item list-group-item-success container'>"."STREET : "." $row[street]" ."</ul>";
echo"<ul class='list-group-item list-group-item-success container'>"."CITY : " . " $row[city]" ."</ul>";
echo"<ul class='list-group-item list-group-item-success container'>" ."JOB DESCRIPTION : ". " $row[job_des]" ."</ul>";
echo"<ul class='list-group-item list-group-item-success container'>"."JOB REQUIRMENT : " . " $row[job_req]" ."</ul>";
echo"<ul class='list-group-item  list-group-item-success container'>" ."SALARY : ". " $row[salary]" ."</ul>";
echo"<ul class='list-group-item list-group-item-success  container'>" ."TELEPHONE NUMBER : ". " $row[teleNo]" ."</ul>";
echo"<ul class='list-group-item list-group-item-success container'>" ."EMAIL : ". " $row[email]" ."</ul>";

?>
        <br>
        <br>
        <footer id="sticky-footer" class="py-4 bg-dark text-white-50 ">
            <div class="container text-center">
                <small>Copyright © LOJOBS</small>
            </div>

        </footer>

</body>

</html>