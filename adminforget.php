<?php
require "adminconfig.php";
if(isset($_POST['submit'])){
$name=$_POST['name'];  
$email=$_POST['email'];
$select='SELECT * from `signup` WHERE email="'.$email.'" AND name="'.$name.'"';
$result=mysqli_query($con,$select);
$row = mysqli_num_rows($result);
if($row > 0){
  echo '<script type="text/javascript"> 
     alert("your Password is 1234...!!") 
     window.location.href = "login.php"
     </script>'; 
}   
else{
  echo '<script type="text/javascript"> 
     alert("Please enter correct Name And Email...!!") 
     </script>';
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
                  	<h1 class="text-center">Forget Password..!!</h1>

                  <form method="POST">
                  	
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="enter name" required>
                    </div>
                  	<div class="form-group">
                      <label for="email">email:</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="enter valid email" required>
                    </div>


                    <div class="form-group text-right">      
                      <input type="reset" name="reset" class="btn btn-default btn-danger rese" value="Reset">
                      <input type="submit" name="submit" class="btn btn-default btn-success sub" value="Submit">
                    </div>
                    
                  </form>
				</div>
			</div>
</body>
</html>
<!-- <?php
require_once('connect.php');
require('config.php');
require('PHPMailer/PHPMailerAutoload.php');
if(isset($_POST) & !empty($_POST)){
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $sql = "SELECT * FROM `login` WHERE username = '$username'";
  $res = mysqli_query($connection, $sql);
  $count = mysqli_num_rows($res);
  if($count == 1){
    $r = mysqli_fetch_assoc($res);
    $password = $r['password'];
    $to = $r['email'];
    $subject = "Your Recovered Password";
 
    $message = "Please use this password to login " . $password;
    $headers = "From : vivek@codingcyber.com";
    if(mail($to, $subject, $message, $headers)){
      echo "Your Password has been sent to your email id";
    }else{
      echo "Failed to Recover your password, try again";
    }
 
  }else{
    echo "User name does not exist in database";
  }
}
 
 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password in PHP & MySQL</title>
  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > -->
 
  <!-- Latest compiled and minified JavaScript -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
 
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">@</span>
      <input type="text" name="username" class="form-control" placeholder="Username" required>
    </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>
        <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>
      </form>
</div>
</body>
</html> --> 