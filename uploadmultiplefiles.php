<?php
session_start();
require "config.php";

if(isset($_POST['submit'])){
    
    // File upload configuration
    $targetDir = "uploads/";
    $allowTypes = array('jpg','png','jpeg','gif');
    
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['files']['name']))){
   
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    $insertValuesSQL .= "('".$targetFilePath.$fileName."', NOW()),";
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].', ';
            }
        }

  //       if(!empty($insertValuesSQL)){

  //       	$insert='INSERT INTO `task5`(`file_name`) VALUES ("'.$targetFilePath.'")';
  //       	$result=mysqli_query($con,$insert);
  // if($result){
  //     echo '<script> 
  //    alert("Successfully Added...!!") 
  //    </script>';
    
  // }
  // else{
  //      echo "failed".mysqli_error($con);

  // }

  //       }
        
        if(!empty($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // Insert image file name into database
            $insert = $con->Query("INSERT INTO images (file_name, uploaded_on) VALUES $insertValuesSQL");
            if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                $statusMsg = "Files are uploaded successfully.".$errorMsg;
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }
    
    // Display status message
    echo $statusMsg;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>multiplefile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="jquery-3.4.1.min.js"></script>
</head>
<body>
	 <div class="container">
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
    <label for="name">Select Multiple Image Files to Upload:</label>
    <input class="form-control"  type="file" name="files[]" multiple accept="image/png, image/jpeg" >
	</div>
	<div class="form-group">
    <input  class="btn btn-default btn-success sub"  type="submit" name="submit" value="UPLOAD">
    </div>
</div>
</div>
</form>
</div>

<!--  --><!-- <table class="table table-striped table-hover table-bordered ">
	  <tr>
        <th  class="text-center">ID</th>
        <th  class="text-center">File</th>       
      </tr>
<?php
include('config.php');
$select="SELECT * from `task5`";
$result=mysqli_query($con,$select);
while($res=mysqli_fetch_array($result)){

?>


      <tr class="text-center">
        <td><?php echo $res['id'];?></td>
        <td><img src="<?php echo $res['file_name'];?>" height="100px" width="100px"></td>

</tr> 


      <?php
          }

      ?> 
    </table> -->
   <!-- <?php
// Include the database configuration file
include_once 'Config.php';

// Get images from the database
$query =$con->query("SELECT * FROM images ORDER BY id DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>-->

</body>
</html>