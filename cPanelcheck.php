<?php
   

      require 'connect.php';

      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);
       

      $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
      
      $count = mysqli_num_rows($result); 

		
      if($count == 1 ) {
        if ($row['id']==1)
         { session_start();
          $_SESSION['auth'] = $row['id'];
         header("location:control.php");
         }
         else
      {
         header("location:cPpanel.php?msg=Error");
      }
      }
      
      else
      {
         header("location:cPpanel.php?msg=Error");
      }

   
?>

