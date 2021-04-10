
<?php 


	require 'connect.php';
	session_start();
	if(!isset($_SESSION['auth'])){
		header("location:cPpanel.php?msg=error");
	}
?>

<!DOCTYPE html>
<html>
<head >
	<title> update offers form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="background:#f2f2f2">
<h2 style="margin:15px; text-align:center;color:tomato"> UPDATE JOB OFFER FORM</h2>

	<?php
	 $id = $_GET['id'];

	 $query = "SELECT * FROM jobsoffering WHERE id=$id";
	 $result = mysqli_query($conn, $query);
	 $offers = mysqli_fetch_assoc($result);

	?>

	<form action="updateoffer.php" class="container" method="post">




        <input  type="hidden" name="id" value="<?php echo $id ?>" /> 
        Paid :
		<div class="form-group">
<select type="text"  class="form-control" name="respons" value="<?php echo $offers['respons'] ?>">
		<option >paid</option>
		<option > not paid</option>

		</select>
  </div>
       
		<div class="form-group">
    <label for="exampleInputEmail1">JOB TITLE</label>
        Job Tittle : <input type="text"  class="form-control" name="job_tittle" value="<?php echo $offers['job_tittle'] ?>"> 

  </div>
		
		<div class="form-group">
    <label for="exampleInputEmail1">COMPANY NAME</label>
	<input type="text" name="company_name"  class="form-control" value="<?php echo $offers['company_name'] ?>"> 

  </div>
      
		<div class="form-group">
    <label for="exampleInputEmail1">CATEGORY</label>
	<input type="text" name="category" class="form-control" value="<?php echo $offers['category'] ?>"> 

  </div>
	
		<div class="form-group">
    <label for="exampleInputEmail1">ADDRESS</label>
	<input type="text" name="address" class="form-control" value="<?php echo $offers['address'] ?>"> 

  </div>
			<div class="form-group">
    <label for="exampleInputEmail1">STREET</label>
	<input type="text" name="street"   class="form-control"  value="<?php echo $offers['street'] ?>"> 

  </div>
					<div class="form-group">
    <label for="exampleInputEmail1">CITY</label>
	<input type="text" name="city" class="form-control" value="<?php echo $offers['city'] ?>">

  </div> 
	<div class="form-group">
    <label for="exampleInputEmail1">JOB DESCRIPTION</label>
	<input type="text"  class="form-control" name="job_des" value="<?php echo $offers['job_des'] ?>">

  </div> 
	
		<div class="form-group">
    <label for="exampleInputEmail1">JOB REQ</label>
	<input type="text" class="form-control"  name="job_req" value="<?php echo $offers['job_req'] ?>"> 

  </div> 
		
			
		<div class="form-group">
    <label for="exampleInputEmail1">SALARY</label>
	<input type="text"  class="form-control" name="salary" value="<?php echo $offers['salary'] ?>"> 

  </div>  
				<div class="form-group">
    <label for="exampleInputEmail1">TELEPHONE NUMBER</label>
	<input type="text" class="form-control"  name="teleNo"  value="<?php echo $offers['teleNo'] ?>"> 

  </div> 
		

		<div class="form-group">
    <label for="exampleInputEmail1">EMAIL</label>
	<input type="email" class="form-control" name="email"  value="<?php echo $offers['email'] ?>"> 

  </div> 
	
		<div class="form-group">
    <label for="exampleInputEmail1">ACCEPT</label>
	<input type="text" name="accept"  class="form-control"   value="<?php echo $offers['accept'] ?>"> 

  </div>  

		

		<!-- <input type="submit" name="submit" value="Update Offer" /> -->
		<button type="submit" class="btn btn-primary">UPDATE OFFER FORM</button>
		<button type="submit" class="btn btn"><a href='control.php'>BACK TO HOME</a></button>

	</form>

</body>
</html>