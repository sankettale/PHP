<?php 
    include('include/config.php');
    if(!isset($_SESSION['auth']['id']))
    {
      echo '<script type="text/javascript">
        window.location = "index"
        </script>';
    exit;
    }

    
    $id = $_GET['edit'];
    $sql ="select * from notifications where id='".$id."' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $file1 = $row['file'];//storing photo path to variable
    $target_dir="files/notifications/";
   
   
    if(isset($_POST['update']))
    {
        $errors= array();
        $errors= validate_edit_notification();
        if(!count($errors))
        {
            if($_POST)
            {
    	        $file_name=$_POST['file_name'];
                if(!empty($_FILES['file']['name']))
                {
                    $file1 = $target_dir . time().basename($_FILES["file"]["name"]); //specifies the path of the file to be uploaded   
                    move_uploaded_file($_FILES["file"]["tmp_name"],$file1) ;
                }
                $sql = "UPDATE notifications SET file_name='".$file_name."',file='".$file1."' WHERE id = '".$id."'";
                $res = mysqli_query($conn,$sql);
                if ($res) 
                {
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Details updated successfully.');
                    window.location='notifications';
                    </SCRIPT>");
                } 
                else 
                {
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Details not updated. Something went wrong!');
                    </SCRIPT>");
                }
            }
        }   
    }
    
    $thisPage="notifications";
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
        .error {color: #FF0000;}
    </style>
    <?php include("include/Pages/head-up.php");?>
    <title>
    Update Notification Details | Admin Panel
    </title>
    <?php include("include/Pages/head-down.php");?>

</head>

<body class="">
    <div class="wrapper ">
        <?php include("include/Pages/sidebar.php");?>
        <div class="main-panel">
            <?php include("include/Pages/nav.php");?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title"><b>Update Staff Details</b></h4>
                                </div>
                                <div class="card-body">
                                    <?php
                                        /*if($flag==1)
                                        {
                                            echo'<div class="alert alert-success">
                                                  <strong>Success!</strong> Details updated successfully.
                                                </div>';
                                        }
                                        if($flag==2)
                                        {
                                            echo'<div class="alert alert-danger">
                                                  <strong>Error!</strong> Details not updated. Something went wrong.
                                                </div>';
                                        }
                                        
                                        if($flag==5)
                                        {
                                            echo'<div class="alert alert-danger">
                                            <strong>Error!</strong> Please Input Data in Required Fields.
                                          </div>';
                                        }*/
                                       
                                    ?>
                                    <form method="post" enctype="multipart/form-data">
                                    <?php
                                        $sql ="SELECT * FROM notifications WHERE id='".$id."'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) 
                                            {
                                                while($row = $result->fetch_assoc()) 
                                                    {
                                    ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Notification Title :- <span
                                                            style="color:red">*</span></label>
                                                    <input type="text" name="file_name" value="<?php echo $row['file_name']; ?>" class="form-control">
                                                    <?php if(isset($errors['noti'])) { ?>
                                                        <div class="error">
                                                            <?php echo $errors['noti'] ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <?php if($row['file']!=null) 
                                                    {  ?>
                                                        <h4 >Current File : <a href="<?php echo $row['file']; ?>" target="_blank">
                                                        <i class="fa fa-file-pdf-o fa-2x text-warning" aria-hidden="true"></i></a></h4>
                                                    <?php
                                                    }
                                                    else 
                                                    {
                                                         echo '<h4 >Current File : <i class="fa fa-ban fa-2x text-danger mt-2" aria-hidden="true"></i></h4>';
                                                    } 
                                                ?>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="bmd-label-floating">Select File <span
                                                        style="color:red">*</span></label>
                                                <input type="file" name="file" id="file">
                                                <?php if(isset($errors['document'])) { ?>
                                                    <div class="error">
                                                        <?php echo $errors['document']; ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <button type="submit" name="update" class="btn btn-success pull-right">Update</button>
                                    <?php }}?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("include/Pages/footer.php");?>
        </div>
    </div>
    <?php include("include/Pages/js.php");?>
    <script>
        $(document).ready( function() 
        {
            $('.alert').delay(3000).fadeOut();
        });  
    </script>
</body>

</html>
