<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    
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
  
   <div class="form-group col-md-4" style="background-color: rgba(212, 211, 212, 0.842); padding: 20px; margin-top: 10px; margin-left: 450px;" >

    <center>  <p class="h4 mb-4">LOJOBS (Sign up )</p></center>
   <form class="container" action="signup.php" method="post">   


    <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="name"  placeholder="Enter user name">
  </div>
  
  <div class="form-group">
    
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" name="address" class="form-control"  placeholder="enter your address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telephone number</label>
    <input type="text" name="telNo" class="form-control"placeholder="TelNo">
  </div>
 

  
  
 
  <div class="form-group">
  <label >Select your category</label>

  <select name="type" class="form-control">
  <option>busniss owner</option>
  <option> users  looking for jobs</option>

</select>
    </div>

    <div class="form-group">
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
  
<center><button type="submit" class="btn btn-primary">Register</button>
  <button type="submit" class="btn btn"><a href='main.php'>BACK TO HOME</a></button>
<br>
<br>
  <p>
      © LOJOBS
  </p>

</center>

  
</form>
    

   </div>
    
  
</body>
</html>