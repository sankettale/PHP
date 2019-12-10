<?php
require "adminconfig.php";
if (isset($_POST['submit']))
 {
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$select='SELECT * from `signup` ';
// echo print_r($select);
$result=mysqli_query($con,$select);
$num=mysqli_num_rows($result);

if($num==1){
	echo "<h4 class='text-center bg-danger text-danger'>Duplicate Data</h4>";
	var_dump($num);
}
else if($password==$repassword){
	$insert='INSERT INTO signup( `name`,`email`,`password`,`created`) VALUES("'.$name.'","'.$email.'","'.md5($password).'",NOW())';
	 	$res=mysqli_query($con,$insert);
	if($res)
	{
	 echo '<script type="text/javascript">'; 
	 echo 'alert("Successfully...!!");'; 
	 echo 'window.location.href = "login.php";';
	 echo '</script>';
	}
	else{
		echo "<script>alert('Failed...');</script>";
	}	
}
else{
	 echo '<script type="text/javascript">'; 
	 echo 'alert("Invalid Password...!!");'; 
	 echo '</script>';
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="jquery-3.4.1.min.js"></script>
</head>
<body>
 			<div class="container-fluid bg-info">
                <div class="container">
                  	<h1 class="text-center">Registration..!!</h1>

                  <form method="POST">

                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="enter name" required>
                    </div>
                  	
                  	<div class="form-group">
                      <label for="email">email:</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="enter valid email" required>
                    </div>

                    <div class="form-group">
                      <label for="pass">Password:</label>
                      <input type="password" class="form-control" id="pass" name="password" placeholder="enter password" required>
                    </div>

                    <div class="form-group">
                      <label for="repass">Confirm Password:</label>
                      <input type="password" class="form-control" id="repass" name="repassword" placeholder="confirm password" required>
                    </div>

                    <div class="form-group text-right">      
                      <input type="reset" name="reset" class="btn btn-default btn-danger rese" value="Reset">
                      <input type="submit" name="submit" class="btn btn-default btn-success sub" value="Submit">
                    </div>

                    <div class="form-group text-right">
                    	<a href="login.php">Login..!</a>
                    </div>

                  </form>
				</div>
			</div>
</body>
</html>