<?php
session_start();
include "config.php";
if(isset($_POST['submit'])){
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>redirect</title>
</head>
<body>
<form method="POST">
	<input type="text" name="name" placeholder="enter name">
	<input type="email" name="email" placeholder="enter Email">
	<input type="password" name="password" placeholder="enter password">
	<input type="password" name="confpassword" placeholder="enter confpassword">
	<button type="submit" name="submit">ADD</button>
</form>
</body>
</html>