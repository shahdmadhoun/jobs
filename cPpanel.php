<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="scss/login.css" type="text/css">
	<title> control panel</title>
</head>
<body>

	<?php
		if(isset($_GET['error'])){
			echo "Invalid username or password!";
		}
	?>


<div class="content">
        
        <div class="logo">
<strong style="font-size: 50px; color: brown;">CONTROL PANEL</strong>

        </div>

        <div class="form-box" >
            <form action="cPanelcheck.php" method="post">
                <div class="log-form">

                    <div class="username">
                        <label>Username</label><br>
						<!-- <input type="name" placeholder="username"> -->
						<input type="text" name="username" placeholder="username">
                    </div>

                    <div class="password">
                        <label>Password</label><br>
						<!-- <input type="password" placeholder="********"> -->
						<input type="password" name="password" placeholder="password">

                    </div>

                   <div class="btn"> 		<input type="submit" name="submit" value="login">
</div> 

                 

                </div>
            </form>

        </div>
    </div>
    
	<!-- <form action="cPanelcheck.php" method="post">


    <h1> cPanel Login </h1>
	Username :	<input type="text" name="username" placeholder="username">
	Password :	<input type="password" name="password" placeholder="password">
		<input type="submit" name="submit" value="login">
	</form> -->
</body>	
</html>
