<?php
require_once("include/config.php");
	
$id = $_GET['id'];
$sql = "SELECT * FROM notifications WHERE id=".$id;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$file1 = $row['file'];
$sql1 = mysqli_query($conn, "delete from notifications where id =".$id."");
if($file1)
 {
     unlink($file1);
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Notification deleted successfully.')
    </SCRIPT>");
   
 echo("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href='notifications';
     </SCRIPT>");
 }
else
 {
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Notification not deleted. Something went wrong!')
    </SCRIPT>");
   
// header("location:testTable?studid_subject=$studid_subject &$delete");
 echo("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href='notifications';
     </SCRIPT>");
 }
//header("location:adminList.php");
?>