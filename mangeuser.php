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
    <title>Manage Users</title>
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
    
	 $query = "SELECT * FROM users ";
	 $result = mysqli_query($conn, $query);
     $users = mysqli_fetch_assoc($result);
     
     echo "<table  class='table' id='first' border='2'>";
     echo"<h1>Users Table</h1>";
  echo " <thead class='thead-light'> <th scope='col'>user name</th><th scope='col'>email</th><th scope='col'>title </th><th scope='col'>passeword </th><th scope='col'>delet </th><th scope='col'>update </th>   </thead>";
     while($row = mysqli_fetch_assoc($result)){
       
         echo "<td >" . $row['username'] . "</td>";
         echo "<td >" . $row['email'] . "</td>";
         echo "<td >" . $row['address'] . "</td>";
         echo "<td >" . $row['telNo'] . "</td>";
         $id = $row['id'];
         echo "<td ><a href='deleteuser.php?id=$id'> delete </a></td>";
         echo "<td ><a href='updateuserform.php?id=$id'> Update </a></td>";
         echo "</tr>";
     }
     
     echo "</table>";
 
	?>

<button type="submit" class="btn btn"><a href='control.php'>BACK TO HOME</a></button>

</body>
</html>