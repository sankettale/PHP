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
    
    /*Edited By Sanket*/
    
    if(isset($_POST['submit']))
    {
        $errors = array();
        $errors = validate_addadmin();
        if(!count($errors))
        {
            if($_POST)
            {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $conf_password=$_POST['conf_password'];
                // $mobile=$_POST['mobile']; 
                $acc_type=$_POST['acc_type'];
                $auth_gallery = $_POST['auth_gallery'];
                $auth_staff = $_POST['auth_staff'] ;
                $auth_notification = $_POST['auth_notification'] ;
                $auth_link = $_POST['auth_link'] ;
                $auth_enquiry = $_POST['auth_enquiry'] ;
                
                 $duplicate=mysqli_query($conn,"SELECT email FROM registration WHERE email='$email'");
                if (mysqli_num_rows($duplicate)>0)
                {
                    $_SESSION['type'] = "danger";
                    $_SESSION['msg'] = "<strong>Error!</strong> Email already in use";
                    
                }
               elseif($password==$conf_password)
                { 
                    $sql = "INSERT INTO registration (name, email, password, acc_type, auth_gallery, auth_staff, auth_notification, auth_link, auth_enquiry, created)
                    VALUES ('".$name."', '".$email."', '".md5($password)."','".$acc_type."','".$auth_gallery."','".$auth_staff."','".$auth_notification."','".$auth_link."','".$auth_enquiry."',NOW())";
                   
                      if ($conn->query($sql) === TRUE) 
                    {
                        $_SESSION['type'] = "success";
                        $_SESSION['msg'] = "<strong>Success!</strong> Member added successfully .";
                        header("location:viewadmin");
                    } 
                    else 
                    {
                        $_SESSION['type'] = "danger";
                        $_SESSION['msg'] = "<strong>Error!</strong> Member not added."; 
                    }
                }
            }
        }
    }
    $thisPage="admin"; 
   
    /*--close--*/
    
    // if(isset($_POST['submit']))
    // {
    //     $errors = array();
    //     $errors = validate_addadmin();
    //     if(!count($errors))
    //     {
    //         if($_POST){
    //             $name=$_POST['name'];
    //             $email=$_POST['email'];
    //             $password=$_POST['password'];
    //             $conf_password=$_POST['conf_password'];
    //             $mobile=$_POST['mobile'];            
                
    //             if($password==$conf_password)
    //             { 
    //                 $sql = "INSERT INTO registration (name, email, password, mobile)VALUES 
    //                     ('".$name."', '".$email."', '".md5($password)."',".$mobile.")";
    //                     if ($conn->query($sql) === TRUE) 
    //                     {
    //                         echo("<SCRIPT LANGUAGE='JavaScript'>
    //                         window.alert('Member added successfully.')
    //                         </SCRIPT>");
    //                         echo("<SCRIPT LANGUAGE='JavaScript'>
    //                         window.location.href='viewadmin';
    //                         </SCRIPT>");
    //                     } 
    //                     else 
    //                     {
    //                         $flag=2;
    //                     }
                   
    //             }
    //             else 
    //             {
    //                 $flag=3;
    //             }
    //         }
    //     }
        
    // }
    // $thisPage="admin"; 
?>


<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include("include/Pages/head-up.php");?>
    <title>
        Add New Member | Admin Panel
    </title>
    <?php include("include/Pages/head-down.php");?>
    <style type="text/css">
        .error {color: #FF0000;}
    </style>
    
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
                                    <h4 class="card-title text-center"><b>Add Admin</b></h4>
                                </div>
                                <!--Edited By Sanket-->
                                
                                 <div class="card-body">
                                    <?php if(isset($_SESSION['msg'])) { ?>
                                        <div class="flash alert alert-<?php echo $_SESSION['type']; ?>" role="alert">
                                            <?php echo $_SESSION['msg']; 
                                                unset($_SESSION['msg']);
                                            ?>
                                        </div>
                                    <?php } ?>
                                    
                                    <!----close---->
                                <div class="card-body">
                                    <?php
                                        if($flag==1)
                                        {
                                            echo'<div class="alert alert-success">
                                                  <strong>Success!</strong> Member added successfully.
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
                                                  <strong>Error!</strong> Password must be same.
                                                </div>';
                                        }
                                        else if($flag==4)
                                        {
                                            echo'<div class="alert alert-danger">
                                                  <strong>Note : </strong> All * marked fields are mandatory.
                                                </div>';
                                        }
                                        else if($flag==5)
                                        {
                                            echo'<div class="alert alert-danger">
                                                  <strong>Error!</strong> Enter valid mobile number.
                                                </div>';
                                        }
                                    ?>
                                    <!--<?php if(isset($_SESSION['msg'])) { ?>
                                        <div class="flash alert alert-success" style="color:rgb(60, 179, 113);text-align:center;">
                                            <div class="message notice">
                                                <?php echo $_SESSION['msg']; 
                                                unset($_SESSION['msg']); ?>
                                            </div>
                                        </div>
                                    <?php } ?>-->
                                    <form method="post" enctype="multipart/form-data">
                                        
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">User Name <span
                                                            style="color:red">*</span></label>
                                                    <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $_POST['name']: '';?>">
                                                    <?php if(isset($errors['nam'])) { ?>
                                                        <small class="error">
                                                            <?php echo $errors['nam']; ?>
                                                        </small>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            
                                            <!--edited by sanket-->
                                            
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Email <span
                                                            style="color:red">*</span></label>
                                                    <input type="email" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $_POST['email']: '';?>">
                                                    <?php if(isset($errors['em'])) { ?>
                                                        <small class="error">
                                                            <?php echo $errors['em']; ?>
                                                        </small>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="row">-->
                                        <!--    <div class="col-md-6">-->
                                        <!--        <div class="form-group">-->
                                        <!--            <label class="bmd-label-floating">Email <span-->
                                        <!--                    style="color:red">*</span></label>-->
                                        <!--            <input type="email" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $_POST['email']: '';?>">-->
                                        <!--            <?php if(isset($errors['em'])) { ?>-->
                                        <!--                <div class="error">-->
                                        <!--                    <?php echo $errors['em']; ?>-->
                                        <!--                </div>-->
                                        <!--            <?php } ?>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-6">-->
                                        <!--    <div class="form-group">-->
                                        <!--            <label class="bmd-label-floating">Mobile <span-->
                                        <!--                    style="color:red">*</span></label>-->
                                        <!--            <input type="number" name="mobile" class="form-control" onkeypress="return isNumberKey(event)" maxlength="10" minlength="10" value="<?php echo isset($_POST['mobile']) ? $_POST['mobile']: '';?>">-->
                                        <!--            <?php if(isset($errors['mob'])) { ?>-->
                                        <!--                <div class="error">-->
                                        <!--                    <?php echo $errors['mob']; ?>-->
                                        <!--                </div>-->
                                        <!--            <?php } ?>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Password <span
                                                            style="color:red">*</span></label>
                                                    <input type="password" name="password" class="form-control" maxlength="15" value="<?php echo isset($_POST['password']) ? $_POST['password']: '';?>">
                                                    <?php if(isset($errors['pass'])) { ?>
                                                    <small class="error">
                                                        <?php echo $errors['pass']; ?>
                                                    </small>
                                                <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Confirm Password <span
                                                            style="color:red">*</span></label>
                                                    <input type="password" name="conf_password" class="form-control" maxlength="15" value="<?php echo isset($_POST['conf_password']) ? $_POST['conf_password']: '';?>">
                                                    <?php if(isset($errors['pass'])) { ?>
                                                    <small class="error">
                                                        <?php echo $errors['pass']; ?>
                                                    </small>
                                                <?php } ?>
                                                </div>
                                            </div>
                                            
                                            
                                            <!--Edited By Sanket-->
                                            
                                            <input type="hidden" name="acc_type" value="user"/>
                                            <div class="col-md-12">
                                                <div class="form-row">
                                                    <div class="form-group col-2">
                                                        <label class="text-dark">Authority</label>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                          <input type="checkbox" class="custom-control-input" id="auth_gallery"  value="1" name="auth_gallery">
                                                          <label class="custom-control-label text-dark" for="auth_gallery">Gallery</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                          <input type="checkbox" class="custom-control-input" id="auth_staff"  value="1" name="auth_staff">
                                                          <label class="custom-control-label text-dark" for="auth_staff">Staff</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                          <input type="checkbox" class="custom-control-input" id="auth_notification"  value="1" name="auth_notification">
                                                          <label class="custom-control-label text-dark" for="auth_notification">Notification</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                          <input type="checkbox" class="custom-control-input" id="auth_link"  value="1" name="auth_link">
                                                          <label class="custom-control-label text-dark" for="auth_link">Important link</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                          <input type="checkbox" class="custom-control-input" id="auth_enquiry"  value="1" name="auth_enquiry">
                                                          <label class="custom-control-label text-dark" for="auth_enquiry">Enquiry</label>
                                                        </div>
                                                    </div>
                                                    <?php if(isset($errors['auth'])) { ?>
                                                    <small class="error">
                                                        <?php echo $errors['auth']; ?>
                                                    </small>
                                                     <?php } ?>
                                                </div>
                                            </div>
                                            
                                            <!----close---->
                                            
                                            
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary pull-right">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include("include/Pages/footer.php");?>
                </div>
            </div>
            <?php include("include/Pages/js.php");?>
        </div>
    </div>
     <script>
        $(document).ready( function() 
        {
            $('.alert').delay(3000).fadeOut();
        });  
    </script>
    
</body>

</html>
