

<?php 


require 'connect.php';
	session_start();
	if(!isset($_SESSION['auth'])){
		header("location:cPpanel.php?msg=error");
	}
?>



<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Manage Offers</title>
</head>
<body>

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
    <?php
	
	 $query = "SELECT * FROM jobsoffering ";
	 $result = mysqli_query($conn, $query);
     $offer = mysqli_fetch_assoc($result);
     
     echo "<table  class='table' id='first' border='2'>";
     echo"<h1 style='margin:10px'> Jobs Offer Table</h1>";
     echo "<thead class='thead-light'> <th scope='col'>job name</th>
     <th scope='col'>category </th><th scope='col'>TelNo</th><th scope='col'>email</th><th scope='col'>accept</th>
     <th scope='col'>Sponsered</th><th scope='col'>delete</th><th scope='col'>update</th><th scope='col'>accept</th>
     <th scope='col'>chang category</th><th scope='col'>sponsered</th></thead>";

     while($row = mysqli_fetch_assoc($result)){
         
         echo "<td>" . $row['job_tittle'] . "</td>";
       
         echo "<td>" . $row['category'] . "</td>";
        
       
         echo "<td>" . $row['teleNo'] . "</td>";
         echo "<td>" . $row['email'] . "</td>";
         echo "<td>" . $row['accept'] . "</td>";
         echo "<td>" . $row['respons'] . "</td>";

         
         $id = $row['id'];
         $accept= $row['accept'];
         $response=$row['respons'];
         $category=$row['category'];

         echo "<td><a href='deleteoffer.php?id=$id'> delete </a></td>";
         echo "<td><a href='updateofferform.php?id=$id'> Update </a></td>";
         echo "<td><a href='acceptoffer.php?id=$id&accept=$accept'> Accept </a></td>";
         echo "<td><a href='changecategory.php?id=$id&category=$category'> change category </a></td>";
         echo "<td><a href='response.php?id=$id&response=$response'> sponsered </a></td>";


         echo "</tr>";
     }
     
     echo "</table>";
 
	?>

<button type="submit" class="btn btn"><a href='control.php'>BACK TO HOME</a></button>




</body>
</html>