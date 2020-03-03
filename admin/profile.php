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
    
    /*Edited BY Sanket*/
    
     if(isset($_POST['update']))
    {
        $errors = array();
        $errors = validate_profile();
        if(!count($errors))
        {
                $name=$_POST['name'];
                $email=$_POST['email'];
                if(isset($_POST['auth_gallery'])) { $auth_gallery = $_POST['auth_gallery']; } else{ $auth_gallery = $row['auth_gallery']; }
                if(isset($_POST['auth_staff'])) { $auth_staff = $_POST['auth_staff']; } else{ $auth_staff = $row['auth_staff']; }
                if(isset($_POST['auth_link'])) { $auth_link = $_POST['auth_link']; } else{ $auth_link = $row['auth_link']; }
                if(isset($_POST['auth_notification'])) { $auth_notification = $_POST['auth_notification']; } else{ $auth_notification = $row['auth_notification']; }
                if(isset($_POST['auth_enquiry'])) { $auth_enquiry = $_POST['auth_enquiry']; } else{ $auth_enquiry = $row['auth_enquiry']; }
                
             $sql1 = "UPDATE registration SET name='".$name."', email='".$email."',auth_gallery='".$auth_gallery."', auth_staff='".$auth_staff."', auth_link='".$auth_link."',
                      auth_notification='".$auth_notification."',auth_enquiry='".$auth_enquiry."', modified=NOW() WHERE id = '".$id."'";  
                            
             if ($conn->query($sql1) === TRUE) 
                    {
                        echo("<SCRIPT LANGUAGE='JavaScript'>
                                window.alert('Admin Updated successfully.')
                            </SCRIPT>");

                        echo("<SCRIPT LANGUAGE='JavaScript'>
                            window.location.href='viewadmin';
                        </SCRIPT>");

                    } 
                    else 
                    {
                        $flag=2;
                        echo mysqli_error();
                    }
        }}
    
    /*--close--*/

    // $sql ="SELECT password FROM registration WHERE id='".$id."' ";
    // $result = $conn->query($sql);
    // if ($result->num_rows > 0) 
    // {
    //     while($row = $result->fetch_assoc()) 
    //     {
    //         $current_pass = $row['password'];
    //     }
    // }
    
               
    // if(isset($_POST['update']))
    // {
    //     $errors = array();
    //     $errors = validate_profile();
    //     if(!count($errors))
    //     {
    //         if($_POST)
    //         {
    //             $name=$_POST['name'];
    //             $email=$_POST['email'];
    //             $password=$_POST['password'];
    //             $mobile=$_POST['mobile'];  
        
    //         if($password==$current_pass)
    //         { 
    //             $sql1 = "UPDATE registration SET name='".$name."', email='".$email."', mobile=".$mobile." WHERE id = '".$id."'";
                    
    //                 if ($conn->query($sql1) === TRUE) 
    //                 {
    //                     echo("<SCRIPT LANGUAGE='JavaScript'>
    //                         window.alert('Data updated successfully.')
    //                         </SCRIPT>");
    //                         echo("<SCRIPT LANGUAGE='JavaScript'>
    //                         window.location.href='viewadmin';
    //                         </SCRIPT>");
    //                 } 
    //                 else 
    //                 {
    //                     $flag=2;
    //                 }
                
    //         }
    //         else 
    //         {
    //             $flag=3;
    //         }
    //     }
    // }
    // }
    
    
?>




<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
        .error {color: #FF0000;}
    </style>
    <?php include("include/Pages/head-up.php");?>
    <title>
        Update Profile | Admin Panel
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
                                    <h4 class="card-title text-center"><b>Edit Profile</b></h4>
                                </div>
                                <div class="card-body">
                                    <?php
                                        if($flag==1)
                                        {
                                            echo'<div class="alert alert-success">
                                                  <strong>Success!</strong> Data Updated successfully.
                                                </div>';
                                        }
                                        else if($flag==2)
                                        {
                                            echo'<div class="alert alert-danger">
                                                  <strong>Error!</strong> Something went wrong.
                                                </div>';
                                        }
                                        else if($flag==3)
                                        {
                                            echo'<div class="alert alert-danger">
                                                  <strong>Error!</strong> Current Password is Wrong.
                                                </div>';
                                        }
                                        else if($flag==5)
                                        {
                                            echo'<div class="alert alert-danger">
                                                  <strong>Error!</strong> Enter valid mobile number.
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
                                        $sql ="SELECT * FROM registration WHERE id='".$id."' ";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) 
                                            {
                                                while($row = $result->fetch_assoc()) 
                                                    {
                                    ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">User Name <span style="color:red">*</span></label>
                                                    <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
                                                    <?php if(isset($errors['nam'])) { ?>
                                                        <div class="error">
                                                        <?php echo $errors['nam']; ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Email <span style="color:red">*</span></label>
                                                    <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
                                                    <?php if(isset($errors['em'])) { ?>
                                                        <div class="error">
                                                        <?php echo $errors['em']; ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                                <div class="col-md-12">
                                                <div class="form-row">
                                                    <div class="form-group col-2">
                                                        <label class="text-dark">Authority</label>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                          <input type="checkbox" class="custom-control-input" id="auth_gallery"  value="1" name="auth_gallery" <?php if($row['auth_gallery']=="1") { echo "checked"; } ?>>
                                                          <label class="custom-control-label text-dark" for="auth_gallery">Gallery</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                          <input type="checkbox" class="custom-control-input" id="auth_staff"  value="1" name="auth_staff" <?php if($row['auth_staff']=="1") { echo "checked"; } ?>>
                                                          <label class="custom-control-label text-dark" for="auth_staff">Staff</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                          <input type="checkbox" class="custom-control-input" id="auth_notification"  value="1" name="auth_notification"  <?php if($row['auth_notification']=="1") { echo "checked"; } ?>>
                                                          <label class="custom-control-label text-dark" for="auth_notification">Notification</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                          <input type="checkbox" class="custom-control-input" id="auth_link"  value="1" name="auth_link"  <?php if($row['auth_link']=="1") { echo "checked"; } ?>>
                                                          <label class="custom-control-label text-dark" for="auth_link">Important link</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                          <input type="checkbox" class="custom-control-input" id="auth_enquiry"  value="1" name="auth_enquiry" <?php if($row['auth_enquiry']=="1") { echo "checked"; } ?>>
                                                          <label class="custom-control-label text-dark" for="auth_enquiry">Enquiry</label>
                                                        </div>
                                                    </div>
                                                    <?php if(isset($errors['auth'])) { ?>
                                                    <div class="error">
                                                        <?php echo $errors['auth']; ?>
                                                    </div>
                                                     <?php } ?>
                                                </div>
                                            </div>
                                        <button type="submit" name="update" class="btn btn-primary pull-right">Update</button>
                                        <?php } } ?>                                    
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
    <script type="text/javascript"> 
          $(document).ready( function() {
            $('.alert').delay(3000).fadeOut();
          });
    </script>
    <!--<script>
    $(document).ready( function()
    {
        window.history.pushState({}, document.title, "/" + "admin/profile.php");
    })
    </script>-->
</body>

</html>