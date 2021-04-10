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
    <title>Manage Advertisement</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
    
	 $query = "SELECT * FROM adv ";
	 $result = mysqli_query($conn, $query);
     $users = mysqli_fetch_assoc($result);
     
     echo "<table  class='table' id='first' border='2'>";
     echo"<h1>Advertisement
Table</h1>";
  echo " <thead class='thead-light'> <th scope='col'>Advertisement Image</th><th scope='col'>Advertisement Title</th><th scope='col'>Advertisement Description </th><th scope='col'>Link </th><th scope='col'>Show/Hide </th><th scope='col'> Delete</th><th scope='col'>Show/Hide </th>   </thead>";
     while($row = mysqli_fetch_assoc($result)){
        
       echo"<td><img class='mr-2 rounded'  padding:10px; vertical-align:center ;' src='".'/basic-requirements'.$row['img']."'width='150px' height='150px'></td>" ;
         echo "<td >" . $row['title'] . "</td>";
         echo "<td >" . $row['des'] . "</td>";
         echo "<td >" . $row['link'] . "</td>";
         echo "<td >" . $row['shows'] . "</td>";

         $id = $row['id'];
         $shows = $row['shows'];

         echo "<td ><a href='deleteadv.php?id=$id'> delete </a></td>";
         echo "<td><a href='showadv.php?id=$id&shows=$shows'> Show </a></td>";

         echo "</tr>";
     }
     
     echo "</table>";
 
	?>

<button type="submit" class="btn btn"><a href='control.php'>BACK TO HOME</a></button>

</body>
</html>