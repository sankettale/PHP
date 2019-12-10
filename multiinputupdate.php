<?php
require "config.php";
$id = $_GET['id'];
$sql1="SELECT * from multi where id='".$id."' ";
$result = mysqli_query($con,$sql1);
$row=mysqli_fetch_array($result);

// $file= $row['file'];
// $file1= $row['file1'];
// $file2= $row['file2'];

$target_dir="uploads/";
$target_dir1="login/";
$target_dir2="AdminLTE-2.4.5/";

		// file 1

 if(isset($_POST['submit1']))
{

if(isset($_FILES['MainImage']['error'])){
  $main_image_name = $_FILES['MainImage']['name'];
  $main_image_size = $_FILES['MainImage']['size'];
  $main_image_tmp = $_FILES['MainImage']['tmp_name'];
  $target_file1 = $target_dir1 .basename($_FILES["MainImage"]["name"]);
  move_uploaded_file ($_FILES["MainImage"]["tmp_name"],$target_file1);
  $file1=$target_file1;
}
else{
	$file1= $row['file1'];
}
$sql="UPDATE multi SET file1='".$file1."' WHERE id = '".$id."'";
$result=mysqli_query($con,$sql);
if($result)
    {
        echo '<script> 
       alert("Successfully Added...!!") 
       </script>';
       header("location:multiinput.php");
    }
    else
    {
         echo "failed".mysqli_error($con);
  
    }
}

			// File 2
 if(isset($_POST['submit2']))
{
if(isset($_FILES['SecondImage']['error'])){
  $second_image_name = $_FILES['SecondImage']['name'];
  $second_image_size = $_FILES['SecondImage']['size'];
  $second_image_tmp = $_FILES['SecondImage']['tmp_name'];
  $target_file2 = $target_dir2 .basename($_FILES["SecondImage"]["name"]);
  move_uploaded_file ($_FILES["SecondImage"]["tmp_name"],$target_file2);
  $file2=$target_file2;
}
else{
	$file2= $row['file2'];
}
$sql="UPDATE multi SET file2='".$file2."' WHERE id = '".$id."'";
$result=mysqli_query($con,$sql);
if($result)
    {
        echo '<script> 
       alert("Successfully Added...!!") 
       </script>';
       header("location:multiinput.php");
    }
    else
    {
         echo "failed".mysqli_error($con);
  
    }
}

			// file 3
 if(isset($_POST['submit']))
{
if(isset($_FILES['PDF']['error'])){
  $pdf_name = $_FILES['PDF']['name'];
  $pdf_size = $_FILES['PDF']['size'];
  $pdf_tmp = $_FILES['PDF']['tmp_name'];
  $target_file = $target_dir .basename($_FILES["PDF"]["name"]);
  move_uploaded_file ($_FILES["PDF"]["tmp_name"],$target_file);
  $file=$target_file;
}
else{
	$file= $row['file'];
}

 $sql="UPDATE multi SET file='".$file."' WHERE id = '".$id."'";
$result=mysqli_query($con,$sql);
if($result)
    {
        echo '<script> 
       alert("Successfully Added...!!") 
       </script>';
   header("location:multiinput.php");
    }
    else
    {
         echo "failed".mysqli_error($con);
  
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>multiple input Update</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
<label>PDF</label>	
<input type="file" name="PDF"><br>
<a href="<?php echo $row['file']; ?>" target="_blank">click here to view current pdf</a><br><br>
<button type="submit" name="submit">Update</button><br><br>

<label>MainImage</label>	
<input type="file" name="MainImage"><br>
<a href="<?php echo $row['file1']; ?>" target="_blank">click here to view current pdf</a><br><br>
<button type="submit" name="submit1">Update</button><br><br>

<label>SecondImage</label>	
<input type="file" name="SecondImage"><br>
<a href="<?php echo $row['file2']; ?>" target="_blank">click here to view current pdf</a><br><br>
 <button type="submit" name="submit2">Update</button>
 </form>
</body>
</html>