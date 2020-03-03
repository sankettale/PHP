<?php
require_once("include/config.php");
	
$id = $_GET['id'];
$sql = "SELECT * FROM news WHERE id=".$id;
$result = mysqli_query($conn,$sql);
$sql1 = mysqli_query($conn, "delete from news where id =".$id."");
if($sql1)
 {
     unlink($file1);
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('News deleted successfully.')
    </SCRIPT>");
   
 echo("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href='news';
     </SCRIPT>");
 }
else
 {
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('News not deleted. Something went wrong!')
    </SCRIPT>");
   
// header("location:testTable?studid_subject=$studid_subject &$delete");
 echo("<SCRIPT LANGUAGE='JavaScript'>
  window.location.href='news';
     </SCRIPT>");
 }
//header("location:adminList.php");
?>