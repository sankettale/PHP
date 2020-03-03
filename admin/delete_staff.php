<?php
require_once("include/config.php");
	
$id = $_GET['id'];
$sql = "SELECT * FROM staff WHERE id=".$id;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$image1 = $row['img'];
$sql1 = mysqli_query($conn, "delete from staff where id =".$id."");
if($image1)
 {
     unlink($image1);
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Member deleted successfully.')
    </SCRIPT>");
   
 echo("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href='staff_gallery';
     </SCRIPT>");
 }
else
 {
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Member not deleted. Something went wrong!')
    </SCRIPT>");
   
// header("location:testTable?studid_subject=$studid_subject &$delete");
 echo("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href='staff_gallery';
     </SCRIPT>");
 }
//header("location:adminList.php");
?>