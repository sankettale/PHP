<?php
require "oopconfig.php";
$con = new Config(); 
class Image
	{
	public $target_dir = "images/";
	public $fileupload_name;
	public $fileupload_size;
	public $fileupload_tmp;
	public $target_file;
	public function upload()
		{
		$this->fileupload_name = $_FILES['fileupload']['name'];
		$this->fileupload_size = $_FILES['fileupload']['size'];
		$this->fileupload_tmp = $_FILES['fileupload']['tmp_name'];
		$this->target_file = $this->target_dir.mt_rand(0,100).basename($_FILES['fileupload']['name']);
		move_uploaded_file($_FILES['fileupload']['tmp_name'], $this->target_file);
		return true;
		}
	}
if(isset($_POST['submit']))
{

    $fileupload = new Image();

    if($fileupload->upload()) 
   	{
       $sql = "INSERT INTO upload (img) VALUES ('".$fileupload->target_file."')";
       $result=mysqli_query($con->conn,$sql);
       if ($result)
       {
       	echo "success";
       }
       else{
       	echo "failed";
       }
   	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>oopfileupload</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<label>select file</label>
		<input type="file" name="fileupload"><br><br>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>