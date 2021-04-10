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
        <title>Job Offer Form</title>
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

            <h3 style="background-color: rgba(85, 81, 81, 0.8) ; text-align:center; color:white" class="display-2">Add Job Offer Form</h3>

            <div class="bd-example">
                <form style="background-color:rgba(155, 148, 148, 0.685); padding: 15px; margin: 25px;" action="joboffer.php" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Job Image</label>
                            <input type="file" class="form-control" id="inputEmail4" placeholder="image" name="image">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Job Title</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Job Title" name="job_tittle" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Company Name</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Company Name" name="company_name" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Category</label>
                            <select id="inputState" class="form-control" name="category">
                                <option selected="">Full Time</option>
                                <option>Part Time</option>
                            </select>
                        </div>
                        <!-- <div class="form-group col-md-4">
		<label for="inputPassword4">Category</label>
		<input type="text" class="form-control" id="inputPassword4" placeholder="Full Time or Part Time" name="category">
	  </div> -->
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Address</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="e.g Palestine" name="address" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Street</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Main St" name="street" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputPassword4">City</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="e.g Hebron City" name="city" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Job Description</label>
                            <textarea class="form-control " rows="3" id="description" placeholder="Job Description" name="job_des" ng-model="mainCtrl.description" maxlength="{{mainCtrl.maxDescriptionLength}}" required></textarea>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Job Requirements</label>
                            <textarea class="form-control " rows="3" id="description" placeholder="Job Requirements" name="job_req" ng-model="mainCtrl.description" maxlength="{{mainCtrl.maxDescriptionLength}}" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Salary</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="e.g 1000$" name="salary" required>
                        </div>
                        

                        <div class="form-group col-md-4">
                            <label for="inputAddress">Telephone Number</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="" name="teleNo" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputAddress">Email</label>
                            <input type="email" class="form-control" id="inputAddress" placeholder="example@email" name="email" required>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                            <label for="inputState">JOB Type</label>
                            <select id="inputState" class="form-control" name="job_type" required>
                                <option selected="">Development</option>
                                <option>goverment</option>
                                <option selected="">Media & News</option>
                                <option selected="">Medical</option>
                                <option selected="">Accounting</option>
                                <option selected="">Technology</option>

                            </select>
                        </div>
                    <center>
                        <button type="submit" class="btn btn-primary " value="Save Job Offer">Submit</button>
                    </center>
                </form>
            </div>

        </div>

        <footer id="sticky-footer" class="py-4 bg-dark text-white-50 ">
            <div class="container text-center">
                <small>Copyright © LOJOBS</small>
            </div>

        </footer>

    </body>

    </html>