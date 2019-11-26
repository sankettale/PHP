 <?php
require "config.php";
$id = (isset($_GET['id']) ? $_GET['id'] : '');

if(isset($_POST['submit']))
{
	$name=$_POST['user'];
	$pass=$_POST['pass'];
	$q='UPDATE task1 SET user="'.$name.'", pass="'.$pass.'" WHERE id="'.$id.'" ';
	$data=mysqli_query($con,$q);
	

	if($data){
		
		echo 'Successfully';
	}
	else{
		echo "not".mysqli_error($con);
	}
}

?>
<html>
<title>php1</title>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <script src="jquery-3.4.1.min.js"></script>
</head>
<body>
 
<div class="container">
	<form method="POST" action="">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="user" value="<?php echo $_GET['name']; ?>" >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pass" value="<?php echo $_GET['pass']; ?>">
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="Update">
  </form>
</div>



</body>
</html>