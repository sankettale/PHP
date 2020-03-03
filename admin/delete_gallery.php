<?php
require_once("include/config.php");
	
$id = $_GET['id'];
$sql = "SELECT * FROM gallery WHERE id=".$id;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$image1 = $row['img'];
$sql1 = mysqli_query($conn, "delete from gallery where id =".$id."");
if($image1)
 {
     unlink($image1);
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Image deleted successfully.')
    </SCRIPT>");
   
 echo("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href='gallery';
     </SCRIPT>");
 }
else
 {
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Image not deleted.')
    </SCRIPT>");
   
// header("location:testTable?studid_subject=$studid_subject &$delete");
 echo("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href='gallery';
     </SCRIPT>");
 }
//header("location:adminList.php");
?>