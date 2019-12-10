<?php
session_start();
require_once "adminconfig.php";		
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
  $city=$_POST['city'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $dob=$_POST['dob'];
  $gender=$_POST['gender'];
  $sports = implode(',', $_POST['sports']);


  $file=$_FILES["file"]["name"];
  // $filename=$file['name'];
  // $filetmp=$file['tmp_name'];
  $upload_dir='login/';
  $target_file = $upload_dir . basename($_FILES["file"]["name"]);
  // move_uploaded_file($filetmp,$upload_dir.$filename);
  move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

  $insert= 'INSERT INTO `student_info`(`name`,`address`,`city`,`mobile`,`email`,`dob`,`gender`,`sports`,`uploadimg`) VALUES ("'.$name.'","'.$address.'","'.$city.'","'.$mobile.'","'.$email.'","'.$dob.'","'.$gender.'","'.$sports.'","'.$target_file.'")';
  // print_r($insert);
  $result=mysqli_query($con,$insert);
  if($result){
      echo '<script> 
     alert("Successfully Added...!!") 
     window.location.href = "admin.php"
     </script>';
    
  }
  else{
       echo "failed".mysqli_error($con);

  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>add student</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="container-fluid bg-info">
                <div class="container">
                  	<h1 class="text-center">Student Info..!!</h1>

                  <form method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="enter name" required>
                    </div>                  	

                    <div class="form-group">
                      <label for="name">Address:</label>
                      <textarea rows="3" class="form-control" id="address" name="address" placeholder="enter address" required></textarea>
                    </div>

                    <div class="form-group">
                       <label for="name">City:</label>
                       <select class="form-control" name="city">
                       	<option>---Select City---</option>
                       	<option value="Nagpur">Nagpur</option>
                       	<option value="Amravati">Amravati</option>
                       	<option value="Akola">Akola</option>
                       </select>
                    </div>

                    <div class="form-group">
                      <label for="mobile">Mobile No:</label>
                      <input type="number" class="form-control" id="mobile" name="mobile" placeholder="enter mobile no." required>
                    </div> 

                  	<div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="enter valid email" required>
                    </div>

                    <div class="form-group">
                      <label for="dob">Date of birth:</label>
                      <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>

                    <div class="form-group">
                      <label for="name">Gender:</label>
                      <label class="radio-inline">
      				  <input type="radio" name="gender" checked value="male">Male</label>
  					  <label class="radio-inline">
      				  <input type="radio" name="gender" value="female">Female</label>
                    </div>

                    <div class="form-group">
                      <label for="sports">Sports:</label>
                      <label class="radio-inline">
                      <input type="checkbox" id="cricket" name="sports[]" value="cricket">Cricket</label>
                      <label class="radio-inline">
                      <input type="checkbox" id="cricket" name="sports[]" value="kabbadi">Kabbadi</label>
                      <label class="radio-inline">
                      <input type="checkbox" id="cricket" name="sports[]" value="Hockey">Hockey</label>
                    </div> 

                    <div class="form-group">
                      <label for="file">Upload Photo:</label>
                      <input type="file" class="form-control" id="file" name="file" required>
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