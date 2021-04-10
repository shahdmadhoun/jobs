<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title> LOGIN FORM</title>

	<style>
	.body{
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

	<?php
		if(isset($_GET['error'])){
			echo "Invalid username or password!";
		}
	?>
		<div class="container-fluid">
	<center><div class=" form-group col-md-4">
	<form class="text-center border border-light p-5" action="check.php" method="post" style="background-color: rgba(212, 211, 212, 0.842); margin-top: 101px;">
			<p class="h4 mb-4">LOJOBS</p>

			<p class="h4 mb-4">Login</p>
		
			<!-- Email -->
			<input type="text" id="defaultLoginFormEmail" name="username" class="form-control mb-4" placeholder="username">
		
			<!-- Password -->
			<input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="******"  name="password">
		
			
		
			<!-- Sign in button -->
			<button class="btn btn-info btn-block my-4" type="submit" name="submit" value="login">Sign in</button>
		
			<!-- Register -->
			<p>Not a member?
				<a href="reg.php">Register</a>
			</p>
		
			<p>
					© LOJOBS
			</p>
		
		</form>
	</div></center>
</div>

	



    
</body>	
</html>

