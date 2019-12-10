<?php
require "adminconfig.php";
session_destroy();
header("location:login.php");
?>