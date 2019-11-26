<?php

require "config.php";
$id = $_GET['id'];
$delete = " DELETE FROM `task2` WHERE  id = $id ";
mysqli_query($con,$delete);
header('location:pform.php');
?>