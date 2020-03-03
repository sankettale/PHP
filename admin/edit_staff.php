<?php 
    include('include/config.php');
    if(!isset($_SESSION['auth']['id']))
    {
      echo '<script type="text/javascript">
        window.location = "index"
        </script>';
    exit;
    }
    $flag=0;
    $id = $_GET['edit'];
    $file = $_GET["file"];
    $target_dir="images/uploads/staff/";
    if(isset($_POST['update']))
    {
        $errors = array();
        $errors = validate_staff_edit();
        if(!count($errors))
        {
            if($_POST)
            {
	            $name=$_POST['name'];
                $position=$_POST['position'];
                $qualification=$_POST['qualification'];
                if(empty($_FILES['fileToUpload']['size']))
                {
                    $sql = "UPDATE staff SET name='".$name."',position='".$position."',img='".$file."',qualification='".$qualification."',modified=NOW() WHERE id = '".$id."'";
                    if ($conn->query($sql) === TRUE) 
                    {
                        echo("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('Details updated successfully.')
                            </SCRIPT>");
                            echo("<SCRIPT LANGUAGE='JavaScript'>
                            window.location.href='staff_gallery';
                            </SCRIPT>");
                    }  
                    else 
                    {
                       $flag=2;
                    }
                }
                else
                {
                    $ext = explode('.', basename($_FILES['fileToUpload']['name']));   // Explode file name from dot(.)
                    
                    $file_extension = end($ext); // Store extensions in the variable.
                    
                    $target_file = $target_dir . md5(uniqid()) . "." .  $file_extension; // Set the target path with a new name of image.
                      
                    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) 
                    {
                        $sql = "UPDATE staff SET name='".$name."',position='".$position."',img='".$target_file."',qualification='".$qualification."',modified=NOW() WHERE id = '".$id."'";
                        if ($conn->query($sql) === TRUE) 
                        {
                            echo("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('Details updated successfully.')
                            </SCRIPT>");
                            echo("<SCRIPT LANGUAGE='JavaScript'>
                            window.location.href='staff_gallery';
                            </SCRIPT>");
                        } 
                    }
                    else
                    {
                       $flag=2; 
                    }
                }
            }
        }
    }
    
    $thisPage="staff";
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
        .error {color: #FF0000;}
    </style>
    <?php include("include/Pages/head-up.php");?>
    <title>
    Update Staff Details | Admin Panel
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
                                    <h4 class="card-title"><b>Update Notification Details</b></h4>
                                </div>
                                <div class="card-body">
                                    <?php
                                        if($flag==1)
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
                                        }
                                       
                                    ?>
                                    <?php if(isset($_SESSION['msg'])) { ?>
                                        <div class="flash alert alert-success" style="color:rgb(60, 179, 113);text-align:center;">
                                            <div class="message notice">
                                            <?php echo $_SESSION['msg']; 
                                            unset($_SESSION['msg']); ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <form method="post" enctype="multipart/form-data">
                                    <?php
                                        $sql1 ="SELECT * FROM staff WHERE id='".$id."'";
                                        $result = $conn->query($sql1);
                                        if ($result->num_rows > 0) 
                                            {
                                                while($row = $result->fetch_assoc()) 
                                                    {
                                    ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="bmd-label-floating">Name <span
                                                            style="color:red">*</span></label>
                                                    <input type="text" value="<?php echo $row['name']; ?>" name="name" class="form-control">
                                                     <?php if(isset($errors['nam'])) { ?>
                                                        <div class="error">
                                                        <?php echo $errors['nam']; ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                            <h4 >Current Photo : </h4>
                                                <img src='<?php echo $row['img']; ?>' style='width:120px;height:100px'/>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="bmd-label-floating">Update Photo </label>
                                                <input type="file" value="<img src='<?php echo $row['img']; ?>' style='width:120px;height:120px'/>" name="fileToUpload" id="fileToUpload">
                                                 <?php if(isset($errors['photo'])) { ?>
                                                        <div class="error">
                                                        <?php echo $errors['photo']; ?>
                                                        </div>
                                                    <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="bmd-label-floating">Qualification <span
                                                            style="color:red">*</span></label>
                                                    <input type="text" value="<?php echo $row['qualification']; ?>" name="qualification" class="form-control">
                                                    <?php if(isset($errors['qual'])) { ?>
                                                        <div class="error">
                                                        <?php echo $errors['qual']; ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="bmd-label-floating">Position <span
                                                            style="color:red">*</span></label>
                                                    <input type="text" value="<?php echo $row['position']; ?>" name="position" class="form-control">
                                                     <?php if(isset($errors['pos'])) { ?>
                                                        <div class="error">
                                                        <?php echo $errors['pos']; ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-md-4">
                                                <button type="submit" name="update"
                                                    class="btn btn-success pull-right">Update</button>
                                            </div>
                                        </div>
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
    <!--<script>
    $(document).ready( function()
    {
        window.history.pushState({}, document.title, "/" + "admin/edit_staff.php");
    })
    </script>-->
</body>

</html>
