<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db= "hosticei_prajasattak";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$db);

	// Check connection
	if (!$conn) 
	{
    		die("Connection failed: " . mysqli_connect_error());
	}
	session_start();	
	require_once('include/visitor.php');
	require_once('include/validate.php');
?>