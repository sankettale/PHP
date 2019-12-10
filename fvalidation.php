<?php
session_start();
require "config.php";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$website=$_POST['website'];
	$comment=$_POST['comment'];
	$gender=@$_POST['gender'];

	if(empty($_POST['name']))
			{
				$errors['name']= "* Please enter name<br>";
			}
    	else if(!preg_match("#^[-A-Za-z]*$#",$_POST['name']))
    		{
    			$errors['name']= "* Please enter valid name";
    		}

    if(empty($_POST['email']))
			{
		       $errors['email'] = "* Please enter email address";
			}
			elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
			{
				$errors['email'] = "* Please enter valid email address";
			}

	if (empty($_POST["website"]))
			{
   				$errors['website'] = "* Please enter website";
 			} 
 			else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
 			{
 				$errors['website'] = "* Please enter valid website";
 			}

	if (empty($_POST["gender"])) 
			{
   				 $errors['gender'] = "* Gender is required";
  			} 
  			else if (empty($_POST["gender"])) 
  			{

   				 $errors['gender'] = "* Gender is required";
 			}
    else
    		{	
			$insert='INSERT INTO `task4`(`name`,`email`,`website`,`comment`,`gender`) VALUES ("'.$name.'","'.$email.'","'.$website.'","'.$comment.'","'.$gender.'")';
			$result=mysqli_query($con,$insert);
	if($result)
		{
		 echo '<script> 
     alert("Successfully Added...!!") 
     </script>';
		}
	else
		{
       echo "failed".mysqli_error($con);

 		}
 		
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>fromvalidation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="jquery-3.4.1.min.js"></script>
	<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php

?>
<div class="container">
<h2 class="bg-info text-center">PHP Form Validation</h2>
<form method="POST" enctype="multipart/form-data"> 
 					<div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="enter name" value="<?php echo isset($_POST['name'])?$_POST['name']:''; ?>">
                       <?php if(isset($errors['name'])) { ?>
                                 <div class="error">
                                    <?php echo $errors['name']; ?>
                                 </div>
                              <?php } ?>                    
                    </div> 

                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" name="email" placeholder="enter email"  value="<?php echo isset($_POST['email'])?$_POST['email']:''; ?>">
                       <?php if(isset($errors['email'])) { ?>
                                 <div class="error">
                                    <?php echo $errors['email']; ?>
                                 </div>
                              <?php } ?>                    
                    </div> 

                    <div class="form-group">
                      <label for="website">website:</label>
                      <input type="text" class="form-control" name="website" placeholder="enter website" value="<?php echo isset($_POST['website'])?$_POST['website']:''; ?>">
                       <?php if(isset($errors['website'])) { ?>
                                 <div class="error">
                                    <?php echo $errors['website']; ?>
                                 </div>
                              <?php } ?>                    
                    </div> 

                    <div class="form-group">
                      <label for="comment">Comment:</label>
                      <textarea class="form-control" name="comment"></textarea>
                    </div> 

                     <div class="form-group">
                      <label for="name">Gender:</label>
                      <label class="radio-inline">
      				  <input type="radio" name="gender" value="male">Male</label>
  					  <label class="radio-inline">
      				  <input type="radio" name="gender" value="Female">Female</label>
      				  <?php if(isset($errors['gender'])) { ?>
                                 <div class="error">
                                    <?php echo $errors['gender']; ?>
                                 </div>
                              <?php } ?>  
                    </div>


                     <div class="form-group text-right">      
                      <input type="reset" name="reset" class="btn btn-default btn-danger rese" value="Reset">
                      <input type="submit" name="submit" class="btn btn-default btn-success sub" value="Submit">
                    </div>
</form>

</body>
</html>