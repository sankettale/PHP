<?php
session_start();
require "adminconfig.php";
$id = $_GET['id'];
if(isset($_POST["submit"])){
	$id = $_GET['id'];
	$oldpassword=$_POST['oldpassword'];
	$newpassword=$_POST['newpassword'];
	$repassword=$_POST['repassword'];
	$select='SELECT * from `signup` WHERE id="'.$id.'" AND password="'.md5($oldpassword).'"';
	$result=mysqli_query($con,$select);
    // die(var_dump($result));
	$row = mysqli_num_rows($result);
	if($row > 0)
     {  
      $newpassword = $_POST['newpassword'];
      $repassword = $_POST['repassword'];
      $id = $_SESSION['auth']['id'];
      if($newpassword==$repassword)
      {
      $update = "UPDATE signup set password='".md5($newpassword)."',modified=NOW() where id='".$id."'";
      $result=mysqli_query($con,$update);
      if($result)
      {
       echo '<script type="text/javascript"> 
		 alert("Successfully Update...!!") 
 		 window.location.href = "login.php"
 		 </script>';
  	  }
      else{
          echo '<script type="text/javascript"> 
		 alert("Could not change...!!") 
  		 </script>';
      }
      }
      else{
      	echo '<script type="text/javascript"> 
		 alert("New Password and Re-Enter Password must be same...!!") 
  		 </script>';
      }
      } 
      else{
      	echo '<script type="text/javascript"> 
		 alert("Please Enter correct old password...!!") 
  		 </script>';
      }
      } 
 

// 	$row=mysqli_fetch_assoc($result);
// 	echo print_r($row);
// 	if(($newpassword==$repassword) && ($oldpassword=='$row["password"]')){
// 		$update='UPDATE signup SET password="'.md5($repassword).'" WHERE id="'.$id.'"';
// 		$data=mysqli_query($con,$update);
// 		if($data){
// 		echo '<script type="text/javascript"> 
// 	 alert("Successfully Update...!!") 
// 	 window.location.href = "login.php"
// 	  </script>';
// 	}	
// 	else{
// 		echo '<script type="text/javascript"> 
// 	 alert("invalid...!!") 
// 	  </script>';
// 	}
// }

// 	else{
// 		echo '<script type="text/javascript"> 
// 	 alert("invalid...!!") 
// 	  </script>';
// 	}
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>change password</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<div class="container-fluid bg-info">
                <div class="container">
                  	<h1 class="text-center">Change Password..!!</h1>

                  <form method="POST">
                  	
                  	<div class="form-group">
                      <label for="oldpassword">Old Paswword:</label>
                      <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="enter old password" required>
                    </div>

                    <div class="form-group">
                      <label for="newpassword">New Password:</label>
                      <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="enter new password" required>
                    </div>

                    <div class="form-group">
                      <label for="repassword">Confirm Password:</label>
                      <input type="password" class="form-control" id="repassword" name="repassword" placeholder="enter confirm password" required>
                    </div>

                    <div class="form-group text-right">      
                      <input type="reset" name="reset" class="btn btn-default btn-danger rese" value="Reset">
                      <input type="submit" name="submit" class="btn btn-default btn-success sub" value="Change">
                    </div>

</body>
</html>