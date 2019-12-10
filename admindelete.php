<?php
require "adminconfig.php";
$id = $_GET['id'];
$delete ="DELETE FROM `signup` Where id=$id";
mysqli_query($con,$delete);
header('location:admin.php');
?>