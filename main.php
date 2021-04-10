<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="main.css" rel="stylesheet" />
    <title>Home</title>

    <style>
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
        
        .font {
            color: cornsilk;
        }
        
        .font1 {
            font-size: small;
            color: #DAA520;
        }
        
        .mydiv {
            margin-left: 50px;
            background-color: rgba(52, 22, 24, 0.842);
            margin: 0px;
            height: 200px;
            padding: 10px
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

                    <a class='nav-link' href='main.php'>Home <span class='sr-only'>(current)</span></a>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>

        </div>

        <div style="text-align: right;">
            <form action="reg.php" style="display: inline;">
                <button type="submit" class="btn btn-secondary">Sign Up</button>
            </form>

            <form action="login.php" style="display: inline;">
                <button type="submit" class="btn btn-secondary" style="background-color:#3a1618;">Login</button>
            </form>

        </div>

    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="s01" style="align-items :flex-start;">
                <form action="search.php" method="post">

                    <div class="inner-form">
                        <fieldset>
                            <legend style=" color:cornsilk; text-align: center;">Find Your Dream Job</legend>
                        </fieldset>

                        <div class="input-field first-wrap">

                            <input name="search" class="live" name="namesearch" type="text" placeholder="What are you looking for?" />
                        </div>

                        <div class="input-field third-wrap">
                            <button class="btn-search" type="submit" name="submit" value="search" style="background-color: #3a1618;">Search</button>
                        </div>

                    </div>

                    <section class="feature-cat-area pt-100" id="category" style="background-color: cornsilk; text-align: center;">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="menu-content pb-60 col-lg-10">
                                    <div class="title text-center">
                                        <h1 class="mb-10">Featured Job Categories</h1>
                                        <p>Who are in extremely love with eco friendly system.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <div class="single-fcat">
                                        <img src="image/o1.png" alt="">
                                        </a>
                                        <p>Accounting</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <div class="single-fcat">
                                        <img src="image/o2.png" alt="">
                                        </a>
                                        <p>Development</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <div class="single-fcat">
                                        <img src="image/o3.png" alt="">
                                        </a>
                                        <p>Technology</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <div class="single-fcat">
                                        <img src="image/o4.png" alt="">
                                        </a>
                                        <p>Media &amp; News</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <div class="single-fcat">
                                        <img src="image/o5.png" alt="">
                                        </a>
                                        <p>Medical</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <div class="single-fcat">
                                        <img src="image/o6.png" alt="">
                                        </a>
                                        <p>Goverment</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-8" style="float: left;">

                <?php

      require 'connect.php';

        $query = "SELECT * FROM Jobsoffering order by respons desc , id asc LIMIT 6";

      $result = mysqli_query($conn, $query);

      if(mysqli_num_rows($result )> 0){

              while($row = mysqli_fetch_assoc($result))
              { 
                      if ($row['respons']==1)

                    {
                      if($row['accept']==1){

      echo"<div class='jumbotron , mydiv '>";
      echo"<h4 class='font1'>Premuim Offer</h4>";

      if($row['image']== "/assets/img/")
     {
        echo"<img class='mr-2 rounded' style='float:right;padding:10px; vertical-align:center ;' src='/basic-requirements/image/default1.png' width='150px' height='150px'>" ;

        }
   else  {
    echo"<img class='mr-2 rounded' style='float:right;  padding:10px; vertical-align:center ;' src='".'/basic-requirements'.$row['image']."'  width='150px' height='150px'>" ;
}

      echo"<h4 class='font'> Job Title : ". $row['job_tittle'] ."</h4>" ;
      echo"<h6 style='color: cornsilk;'> Company Name : ".$row['company_name']."</h6>";

    echo"<br>";

    echo"<a class='btn btn-secondary btn-lg active' role='button' aria-pressed='true'href='detail.php?id=". $row['id'] . "'>Details</a>";
      echo"</div>";

              echo "</br>";

            }
                    }
              }

                 }

    ?>



            </div>







            
            <div class='col-lg-4' style="float: right;">
                <div style="background-color: rgba(49, 46, 49, 0.842)	;padding: 20px; width:400px">
                    <?php

               echo"<center> <img src='image/golden.png'  width='150px' height='100px'>  
                <h1 style='color: #c79940;'>MOSTVIEWED </h1>
              </center>";

                          $query2 = "SELECT * FROM Jobsoffering  order by mostview desc LIMIT 3";
                          $res = mysqli_query($conn, $query2);
                          if(mysqli_num_rows($res )> 0) {

                            while($row2 = mysqli_fetch_assoc($res)){
                              if($row2['mostview']!=0) {
                                echo"<div style=' margin:20px ;'>";
                                echo"<h4 style='color: cornsilk;'>Job Title : ".$row2['job_tittle']."</h4>";
                                echo"<h6 style='color: cornsilk;'>Job Description</h6>";
                          echo "<p style='background-color: cornsilk; padding: 10px;'>".$row2['job_des']."</p>";
                          echo"<a style='float:right; background-color:#c5953d; border:#c5953d;' class='btn btn-warning' role='button' aria-pressed='true'href='detail.php?id=". $row2['id'] . "'>Details</a>";
                                echo"<br>";
                          echo"</div>";

                              }

                            }

                          }

                        ?>
                        
                </div>
                <div style="background-color: rgba(168, 125, 45, 0.678); margin-top: 15px; width: 400px; padding: 10px;">
                        <h4 style="padding:10px;" class="font"> Advertisement </h4>
                        <?php
                        echo"<div style='margin-top: 15px; width: 400px; padding: 10px;'>";
                        require 'connect.php';

                        $query5 = "SELECT * FROM adv ";
                
                      $result5 = mysqli_query($conn, $query5);
                
                      if(mysqli_num_rows($result5)> 0){
                
                              while($row5 = mysqli_fetch_assoc($result5))
                              { 
                                      if ($row5['shows']==1)
                
                                    {
                
                    echo"<img class='mr-2 rounded' style='float:left;  padding:10px; vertical-align:center ;' src='".'/basic-requirements'.$row5['img']."'  width='150px' height='150px'>" ;
                
                
                      echo"<h4 class='font'> ". $row5['title'] ."</h4>" ;
                      echo"<p style='color: cornsilk;'>".$row5['des']."</p>";
                

                
                    echo"<center><a role='button' aria-pressed='true'href='#'>".$row5['title']."</a></center>";
                      echo"</div>";
                
                              echo "</br>";
                
                            }
                                    }
                              }
                        
                            
                
                                 
                
                    ?>
                        </div>
            </div>

        </div>

        <br>
        <br>
        <div class="row">

            <div class="col-lg-11" style="margin-left: 50px;">

                <div class="my-3 p-3 rounded box-shadow" style="background:cornsilk;">
                    <h3 class="border-bottom border-gray pb-2 mb-0">Jobs Offers</h3>
                    <?php 
                        $query1 = "SELECT * FROM Jobsoffering  order by id desc ";
                        $result1 = mysqli_query($conn, $query1);
                        if(mysqli_num_rows($result1 )> 0)
                        {

                          while($row1 = mysqli_fetch_assoc($result1)){
                            if ($row1['respons']==0) {

                              if($row1['accept']==1){
                                echo"<div class='my-3 p-3 rounded box-shadow' style='background-color:cornsilk' >";

                                echo"<div class='media text-muted pt-3'>";

                                echo"<div class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray'>";
                                echo"<div class='d-flex justify-content-between align-items-center w-100'>";

                                if($row1['image'] == "/assets/img/")
                               {
                                 echo"<img class='mr-2 rounded'  padding:10px; vertical-align:center ;' src='/basic-requirements/image/default1.png' width='100px' height='100px'>" ;

                              }
                                 else  {
                        echo"<img class='mr-2 rounded'  padding:10px; vertical-align:center ;' src='".'/basic-requirements'.$row1['image']."'  width='100px' height='100px'>" ;
                                    }
                                    echo"<h3 class='text-gray-dark'>".$row1['job_tittle']."</h3>";

                                echo"<h4 class='text-gray-dark'>".$row1['company_name']." Company , ".$row1['address']."</h4>";
                                echo"<a style='float:right; background-color:#c82f2f; border:#c82f2f;' class='btn btn-warning' role='button' aria-pressed='true'href='detail.php?id=". $row1['id'] . "'>Details</a>";
                                echo"</div>";
                                echo"</div>";
                                echo"</div>";

                               echo"</div>";

                              }
                            }
                          }
                        }

                        ?>

                </div>

            </div>

        </div>

        <br>
        <br>
    </div>

    <footer id="sticky-footer" class="py-4 bg-dark text-white-50 ">
        <div class="container text-center">
            <small>Copyright © LOJOBS</small>
        </div>

    </footer>

</body>

</html>