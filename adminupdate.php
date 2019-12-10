<?php
require "adminconfig.php";
$id = $_GET['id'];
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$update='UPDATE signup SET name="'.$name.'",email="'.$email.'" WHERE id="'.$id.'" ';
	$data=mysqli_query($con,$update);

	if($data){
		 echo '<script type="text/javascript">'; 
	 echo 'alert("Successfully Update...!!");'; 
	 echo 'window.location.href = "admin.php";';
	 echo '</script>';
	}
	else{
		echo "failed".mysqli_error($con);
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
</head>
<body>
 			<div class="container-fluid bg-info">
                <div class="container">
                  	<h1 class="text-center">Edit..!!</h1>

                  <form method="POST">

                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="enter name" value="<?php echo $_GET['name']?>">
                    </div>
                  	
                  	<div class="form-group">
                      <label for="email">email:</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="enter valid email" value="<?php echo $_GET['email']?>">
                    </div>

                   <!--  <div class="form-group">
                      <label for="pass">Password:</label>
                      <input type="password" class="form-control" id="pass" name="password" placeholder="enter password" required>
                    </div> -->

                   <!--  <div class="form-group">
                      <label for="repass">Confirm Password:</label>
                      <input type="password" class="form-control" id="repass" name="repassword" placeholder="confirm password" required>
                    </div> -->

                    <div class="form-group text-right">      
                      <input type="reset" name="reset" class="btn btn-default btn-danger rese" value="Reset">
                      <input type="submit" name="submit" class="btn btn-default btn-success sub" value="Update">
                    </div>

                  </form>
				</div>
			</div>
</body>
</html>