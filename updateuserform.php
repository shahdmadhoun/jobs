

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
	<title>update user form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="background:#f2f2f2">
<h2 style="margin:15px; text-align:center;color:tomato">UPDATE USER FORM</h2>

	<?php
	 $id = $_GET['id'];
	 

	 $query = "SELECT * FROM users WHERE id=$id";
	 $result = mysqli_query($conn, $query);
	 $users = mysqli_fetch_assoc($result);

	?>

	<form  class="container" action="updateuser.php" method="post">
		 <input  type="hidden" name="id" value="<?php echo '$id' ?>" /> <br>
		
		<div class="form-group">
    <label for="exampleInputEmail1" class="container">user name</label>
    <input type="text" class="form-control container" name="username" value="<?php echo $users['username'] ?>" placeholder="Enter user name">
  </div>

		<!-- <input type="text" name="username" value="<?php echo $users['username'] ?>"> </br> -->
	
		<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" value="<?php echo $users['email'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
		<!-- <input type="email" name="email" value="<?php echo $users['email'] ?>"> </br> -->
		
		<div class="form-group">
    <label for="exampleInputPassword1">address</label>
    <input type="text" value="<?php echo $users['address'] ?>" name="address" class="form-control"  placeholder="enter your address">
  </div>
		 <!-- <input type="text" name="address" value="<?php echo $users['address'] ?>"> </br> -->
        <div class="form-group">
    <label for="exampleInputPassword1">Telephone number</label>
    <input type="number" value="<?php echo $users['telNo'] ?>" name="telNo" class="form-control"placeholder="TelNo">
  </div>
		
		 <!-- <input type="text" name="telNo" value="<?php echo $users['telNo'] ?>"> </br> -->
        Type: 
		
		<div class="form-group">
    <label for="exampleInputPassword1">Telephone number</label>
	<input type="text"  value="<?php echo $users['type'] ?>" name="type" class="form-control"  placeholder="enter your address">

  </div>

		<!-- <input type="submit" name="submit" value="Update User" /> -->
		<button type="submit" class="btn btn-primary">update user information</button>


	</form>

</body>
</html>