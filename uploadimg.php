<?php
session_start();
require_once "config.php";		
if(isset($_POST['submit']))
{
	$file=$_FILES['file'];
	$filename=$file['name'];
	$filetmp=$file['tmp_name'];
	$upload_dir='login/';
	$target_file = $upload_dir . basename($_FILES["file"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	// move_uploaded_file($filetmp,$upload_dir.$filename);
	 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

	$insert= 'INSERT INTO `task3`(`file`) VALUES ("'.$target_file.'")';
	$result=mysqli_query($con,$insert);

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
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload Img</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
</head>
<body>
	<div class="form-group container">
	<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <input class="form-control" type="file" name="file" id="file" required>
</div>
<div class="form-group">
    <input class="btn btn-default btn-success animated bounceInDown" type="submit" value="Upload Image" name="submit">
</div>
</div>
</form>

<table class="table table-striped table-hover table-bordered ">
	  <tr>
        <th  class="text-center">ID</th>
        <th  class="text-center">File</th>       
      </tr>
<?php
include('config.php');
$select="SELECT * from `task3`";
$result=mysqli_query($con,$select);
while($res=mysqli_fetch_array($result)){

?>


      <tr class="text-center">
        <td><?php echo $res['id'];?></td>
        <td><img src="<?php echo $res['file'];?>" height="100px" width="100px"></td>

</tr> 


      <?php
          }

      ?> 
    </table>
</body>
</html>
