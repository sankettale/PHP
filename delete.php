<?php

require "config.php";
$id = $_GET['id'];
$q = " DELETE FROM `task1` WHERE  id = $id ";
mysqli_query($con,$q);
header('location:ptask1.php');
?>