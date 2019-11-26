<?php
require "config.php";
$id = (isset($_GET['id']) ? $_GET['id'] : '');

if(isset($_POST['submit']))
{
	$fullname=$_POST['fullname'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
	$update='UPDATE task2 SET fullname="'.$fullname.'", address="'.$address.'" , mobile="'.$mobile.'", email="'.$email.'" WHERE id="'.$id.'" ';
	$data=mysqli_query($con,$update);
	

	if($data){
		
		echo 'Successfully';
		header('location:pform.php');
	}
	else{
		echo "not".mysqli_error($con);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHPFORM</title>
	
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="jquery-3.4.1.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- sweetalert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<style>
  .background{
    background-image: linear-gradient(#a1c4fd,#c2e9fb);
  }
</style>

</head>
<body>


             <div class="container-fluid background">
                <div class="container">
                  	<h1 class="text-center">Form</h1>

                  <form method="POST">
                  	
                  	<div class="form-group">
                      <label for="name">Full Name:</label>
                      <input type="text" class="form-control" id="fname1" name="fullname" value="<?php echo $_GET['fullname']?>">
                      <h6 id="fnamecheck"> </h6>
                    </div>

                    <div class="form-group">
                      <label for="add">Address:</label>
                      <input type="text" class="form-control" id="add" name="address" value="<?php echo $_GET['address']?>">
                      <h6 id="addcheck"> </h6>
                    </div>
                  
                    <div class="form-group">
                      <label for="mob">Mobile No.:</label>
                      <input type="number" class="form-control" id="mobile" name="mobile" value="<?php echo $_GET['mobile']?>" 	>
                      <h6 id="mobcheck"> </h6>
                    </div>
                  
                    <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" id="email" name="email" value="<?php echo $_GET['email']?>">
                      <h6 id="mailcheck"> </h6>
                    </div>       

                    <div class="form-group text-right">      
                      
                      <input type="submit" name="submit" class="btn btn-default btn-success sub" value="Update">
                    </div>

                  </form>
                </div>
            </div> <br>
        </body>
        </html>