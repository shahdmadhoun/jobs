<?php

session_start();
	if(!isset($_SESSION['auth'])){
		header("location:cPpabel.php?msg=error");
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
                background-color: white;
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">LOJOBS cPanel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="control.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mangeuser.php">Manage Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mangeoffers.php">Manage Offers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_advform.php">Add Advertisement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="manageadv.php">Manage Advertisement</a>
        </li>

    

      </ul>
      <div style="text-align: right;">
            <form action="cpanellogout.php" style="display: inline;">
                <button type="submit" class="btn btn-secondary"> Logout</button>
            </form>

           

        </div>
      
    </div>
  </nav>
        <div class="container-fluid">


            <div class="bd-example" style="margin-top:15px;">
                <form style="background-color:rgba(185, 199, 230, 0.685); padding: 15px; margin: 25px;" action="add_adv.php" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Advertisement Image</label>
                            <input type="file" class="form-control" id="inputEmail4" placeholder="image" name="img">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Advertisement Title</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Advertisement Title" name="title" required>
                        </div>
                      
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Advertisement Description</label>
                            <textarea class="form-control " rows="3" id="description" placeholder="Advertisement Description" name="des" ng-model="mainCtrl.description" maxlength="{{mainCtrl.maxDescriptionLength}}" required></textarea>
                        </div>
                        <div class="form-group col-md-6">
                                <label for="inputPassword4">Advertisement Link</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="www.yourwebsite.com" name="link" required>
                            </div>
                        


                    <center><button type="submit" class="btn btn-primary " value="Save Adv">Submit</button>
                    </center>
                </form>
            </div>

        </div>

        

    </body>

    </html>