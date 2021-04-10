
<?php 


require 'connect.php';
	session_start();
	if(!isset($_SESSION['auth'])){
		header("location:cPpanel.php?msg=error");
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="./fontawesome/all.min.js"></script>
    <!-- <link rel="stylesheet" href="./fontawesome/all.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/global.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="./sass/home.css"> -->
<!-- <link rel="stylesheet" href="scss/login.css" type="text/css"> -->

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

    </head>
<body >
    
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
       <center><div>        
<h2 style="margin:10px;"><i class="fas fa-user-circle"></i> Users</h2>
    <hr>
    <button style="background-color:#ffc107; margin:10px; padding:20px " class=""><i class=""></i>
<a href="mangeuser.php">Manage Users</a>

    </button>    
<h2 style="margin:10px;"><i class="far fa-newspaper"></i> Job Offers</h2>
    <hr>
    <button  style="background-color: #dc3545;margin:10px; padding:20px" ><i class=""></i>
<a href="mangeoffers.php">Manage Offers</a>

    </button>

<h2 style="margin:10px;"><i class="fas fa-dollar-sign"></i>Advertisement</h2>
    <hr>
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
 
  <div class="btn-group" role="group" >
    <button style="width: 152.67px; height:68px; margin-left: 10px" id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="add_advform.php">Add Advertisement</a>
      <a class="dropdown-item" href="manageadv.php">Manage Advertisement</a>

    </div>
  </div>
</div>

</div>  </center>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>