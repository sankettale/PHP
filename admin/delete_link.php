<?php
require_once("include/config.php");
	
$id = $_GET['id'];
$sql = "SELECT * FROM links WHERE id=".$id;
$sql1 = mysqli_query($conn, "delete from links where id =".$id."");
if($sql1)
 {
     unlink($image1);
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Link deleted successfully.')
    </SCRIPT>");
   
 echo("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href='link';
     </SCRIPT>");
 }
else
 {
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Link not deleted. Something went wrong!')
    </SCRIPT>");
   
// header("location:testTable?studid_subject=$studid_subject &$delete");
 echo("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href=link';
     </SCRIPT>");
 }
//header("location:adminList.php");
?>