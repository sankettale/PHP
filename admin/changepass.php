<?php 
    include('include/config.php');
    
    $flag=0;
    
    $id=$_SESSION['auth']['id'];
    
    if(!isset($id))
    {
      echo '<script type="text/javascript">
        window.location = "index"
        </script>';
    exit;
    }
    
    
    if(isset($_POST['submit']))
    {
        $errors = array();
        $errors = validate_changepass();
        if(!count($errors))
        {
            if($_POST)
            {
                $newpass=$_POST['newpass'];
                $confpass=$_POST['confpass'];
                $oldpass=$_POST['oldpass'];
                
                $sql = "SELECT password FROM registration WHERE id='$id'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
                    while($row = $result->fetch_assoc())
    
                    {
                        if(md5($oldpass)==$row['password'])
                        {
                            $sql1 = "UPDATE registration SET password='".md5($newpass)."',modified=NOW() WHERE id='$id'";
                    
                            if ($conn->query($sql1) === TRUE) 
                            {
                                $flag=1;
                            } 
                            else 
                            {
                                $flag=2;
                            }
                        }
                        else 
                        {
                            $flag=3;
                        }
                    }
                }
            }
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include("include/Pages/head-up.php");?>
    <title>
        Change Password | Admin Panel
    </title>
    <?php include("include/Pages/head-down.php");?>
    <style>
        .f {
            font-size: 30px;
        }
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
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title"><b>Change Password</b></h4>
                                </div>
                                <div class="card-body">
                                    <?php
                                        if($flag==1)
                                        {
                                            echo'<div class="alert alert-success">
                                                  <strong>Success!</strong> Password changed successfully.
                                                </div>';
                                        }
                                        if($flag==2)
                                        {
                                            echo'<div class="alert alert-danger">
                                                  <strong>Error!</strong> Something went wrong.
                                                </div>';
                                        }
                                        
                                    ?>
                                    <form method="post" action="" enctype="multipart/form-data">
                                        <div class="row">
                                    <?php
                                        $sql1 = "SELECT * FROM registration WHERE id='$id'";
                                        $result1 = $conn->query($sql1);
                        
                                        if ($result1->num_rows > 0) 
                                        {
                                            while($row1 = $result1->fetch_assoc())
                                
                                            {
                                    ?>                                    
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Member Name</label>
                                                    <input type="text" value="<?php echo $row1['name']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Old Password <span style="color:red">*</span></label>
                                                    <input type="password" name="oldpass" maxlength="15" class="form-control" value="<?php echo isset($_POST['oldpass']) ? $_POST['oldpass']: '';?>" required>
                                                    <?php 
                                                    if($flag==3)
                                                    {
                                                        echo'<div class="error">
                                                             Please enter correct old password.
                                                            </div>';
                                                    }
                                        
                                                    ?>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">New Password <span style="color:red">*</span></label>
                                                    <input type="password" name="newpass" maxlength="15" class="form-control" value="<?php echo isset($_POST['newpass']) ? $_POST['newpass']: '';?>" required>
                                                    <?php if(isset($errors['np'])) { ?>
                                                        <div class="error">
                                                            <?php echo $errors['np']; ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Confirm Password <span style="color:red">*</span></label>
                                                    <input type="password" name="confpass" maxlength="15" class="form-control" value="<?php echo isset($_POST['confpass']) ? $_POST['confpass']: '';?>" required>
                                                    <?php if(isset($errors['cp'])) { ?>
                                                        <div class="error">
                                                            <?php echo $errors['cp']; ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary pull-right">Change Password</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="images/logo/logo.png" />
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-category text-gra"><?php echo $row1['name']; ?></h6>
                                    <h4 class="card-title"><?php echo $row1['email']; ?></h4>
                                    <p class="card-description"><?php echo $row1['mobile']; ?></p>
                                </div>
                            </div>
			<?php }}?>
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
