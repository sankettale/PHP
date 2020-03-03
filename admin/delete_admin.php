<?php
require_once("include/config.php");
	
$id = $_GET['id'];
$sql = "SELECT * FROM registration WHERE id=".$id;
$sql1 = mysqli_query($conn, "delete from registration where id =".$id."");
if($sql1)
 {
     unlink($image1);
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('User deleted successfully.')
    </SCRIPT>");
   
 echo("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href='viewadmin';
     </SCRIPT>");
 }
else
 {
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('User not deleted. Something went wrong!')
    </SCRIPT>");
   
// header("location:testTable?studid_subject=$studid_subject &$delete");
 echo("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href='viewadmin';
     </SCRIPT>");
 }
//header("location:adminList.php");
?>