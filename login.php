<?php
session_start();
require "adminconfig.php";

if(isset($_POST['submit']))
{
	$name=$_POST['username'];
	$password=$_POST['password'];
	$select ="SELECT * from signup where email ='".$name."' and password='".md5($password)."'";
	$result = mysqli_query($con, $select);
	
	$row = mysqli_fetch_assoc($result);
	// var_dump($row);

	if(isset($row['id']))
	{
		unset($row['password']);
		$_SESSION['auth']=$row;

	 echo '<script type="text/javascript"> 
	 alert("Welcome...!!") 
	 window.location.href = "admin.php"
	  </script>';
		// echo '<script type="text/javascript">
  //  setTimeout(function () { swal("WOW!","Message!","success");
  //  }, 500); </script>';

	}
	
	else{
		echo "<script>alert('login failed...');</script>";

	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
 			<div class="container-fluid bg-info">
                <div class="container">
                  	<h1 class="text-center">Login..!!</h1>

                  <form method="POST">
                  	
                  	<div class="form-group">
                      <label for="uname">User Name:</label>
                      <input type="email" class="form-control" id="uname" name="username" placeholder="enter valid username" required>
                    </div>

                    <div class="form-group">
                      <label for="pass">Password:</label>
                      <input type="password" class="form-control" id="pass" name="password" placeholder="enter correct password" required>
                    </div>

                    <div class="form-group text-right">      
                      <input type="reset" name="reset" class="btn btn-default btn-danger rese" value="Reset">
                      <input type="submit" name="submit" class="btn btn-default btn-success sub" value="Login">
                    </div>

                    <div class="form-group text-right">
                    	<a href="adminforget.php">Forget Password..?</a>
                    </div>

                    <div class="form-group text-right">
                    	<a href="adminsignup.php">Register Here..!</a>
                    </div>

                  </form>
				</div>
			</div>
</body>
</html>