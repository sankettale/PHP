<?php
require "config.php";
	$target_dir="uploads/";
	$target_dir1="login/";
	$target_dir2="AdminLTE-2.4.5/";
    
if(isset($_POST['submit']))
{

$uploadMainTo = null;
if(isset($_FILES['MainImage'])){
  $main_image_name = $_FILES['MainImage']['name'];
  $main_image_size = $_FILES['MainImage']['size'];
  $main_image_tmp = $_FILES['MainImage']['tmp_name'];
  $target_file1 = $target_dir1 .basename($_FILES["MainImage"]["name"]);
  move_uploaded_file ($_FILES["MainImage"]["tmp_name"],$target_file1);
}

$uploadSecondTo = null;
if(isset($_FILES['SecondImage'])){
  $second_image_name = $_FILES['SecondImage']['name'];
  $second_image_size = $_FILES['SecondImage']['size'];
  $second_image_tmp = $_FILES['SecondImage']['tmp_name'];
  $target_file2 = $target_dir2 .basename($_FILES["SecondImage"]["name"]);
  move_uploaded_file ($_FILES["SecondImage"]["tmp_name"],$target_file2);
}

$uploadPdfTo = null;
if(isset($_FILES['PDF'])){
  $pdf_name = $_FILES['PDF']['name'];
  $pdf_size = $_FILES['PDF']['size'];
  $pdf_tmp = $_FILES['PDF']['tmp_name'];
  $target_file = $target_dir .basename($_FILES["PDF"]["name"]);
  move_uploaded_file ($_FILES["PDF"]["tmp_name"],$target_file);
}

$query = "INSERT Into multi(file,file1,file2) values ('".$target_file1."','".$target_file2."','".$target_file."')";
$result=mysqli_query($con,$query);
if($result)
    {
        echo '<script> 
       alert("Successfully Added...!!") 
       </script>';
  
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
	<title>multiple files</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
<label>PDF</label>	
<input type="file" name="PDF">
<label>MainImage</label>	
<input type="file" name="MainImage">
<label>SecondImage</label>	
<input type="file" name="SecondImage">
 <button type="submit" name="submit">Upload</button>
 </form><br><br>

 <table class="table table-striped table-hover table-bordered ">
	  <tr>
        <th  class="text-center">ID</th>
        <th  class="text-center">File</th> 
        <th  class="text-center">File1</th> 
        <th  class="text-center">File2</th> 
        <th  class="text-center">Action</th> 

      </tr>
<?php
include('config.php');
$select="SELECT * from `multi`";
$result=mysqli_query($con,$select);
while($res=mysqli_fetch_array($result)){

?>


      <tr class="text-center">
        <td><?php echo $res['id'];?></td>
        <td><img src="<?php echo $res['file'];?>" height="100px" width="100px"></td>
        <td><img src="<?php echo $res['file1'];?>" height="100px" width="100px"></td>
        <td><img src="<?php echo $res['file2'];?>" height="100px" width="100px"></td>
      
        <td><a href="multiinputupdate.php?id=<?php echo $res['id'];?>" class="text-white"><button class="btn btn-success"> Update</button></a></td>
</tr> 


      <?php
          }

      ?> 
    </table>
</body>
</html>