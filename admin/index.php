<?php 
    include('include/config.php');
    $flag=0;


   if(isset($_POST['submit']))
    {

        $error = array();
        $errors=validate_login();
        if(!count($errors))
        { 
            $sql = "select * from registration where email='".$_POST['email']."' and password='".md5($_POST['password'])."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            if(isset($row['id']))
            {
                unset($row['password']);
                $_SESSION['auth']=$row;

                echo("<SCRIPT LANGUAGE='JavaScript'>
                    window.location.href='dashboard';
                    </SCRIPT>");
            }
            else
            {
                $flag=1;
            }
        }   
    }
?>

<!DOCTYPE html>
<html lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include("include/Pages/head-up.php");?>
    <title>
        Admin SignIn
    </title>
    <?php include("include/Pages/head-down.php");?>
    <style>
       /* body
        {
            background-image: linear-gradient(#711118, #453f40);
        }*/
        .col-md-3{
            margin-left:auto;
            margin-right:auto;
            margin-top:15%;
            
            
        }
        .error {color: #FF0000;}
    
    </style>
</head>

<body>
    <div class="wrapper ">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-profile">
                            <div class="card-avatar" style="width:100%">
                                <a href="#pablo">
                                    <img class="img" src="images/logo/logo.png" />
                                </a>
                            </div>
                            <div class="card-body">
                                <?php
                                        if($flag==1)
                                        {
                                            echo'<div class="alert alert-danger">
                                                  <strong>Error!</strong> Credential are not correct !
                                                </div>';
                                        }
                                ?>
                                <form action="" method="POST">
                                    <div class="input-group flex-nowrap rounded" style="color:black;">
                                        <div class="input-group-prepend" style="background-color:#771219">
                                            <span class="input-group-text" style="color:white;padding-right:20px" id="addon-wrapping"><b><i class="fa fa-user" aria-hidden="true"></i></b></span>
                                        </div>
                                        <input class="form-control" type="email" name="email" placeholder="Email" style="padding-left:8px"><br>
                                        
                                    </div>
                                    <?php if(isset($errors['em'])) { ?>
                                            <div class="error">
                                                <?php echo $errors['em']; ?>
                                            </div>
                                        <?php } ?>
                                    <br>
                                    <div class="input-group flex-nowrap rounded" style="color:black;">
                                        <div class="input-group-prepend" style="background-color:#771219">
                                            <span class="input-group-text" style="color:white" id="addon-wrapping"><b><i class="fa fa-key" aria-hidden="true"></i></b></span>
                                        </div>
                                        <input type="password" class="form-control" name="password" placeholder="Password" style="padding-left:8px"><br>
                                        
                                    </div>
                                    <?php if(isset($errors['pass'])) { ?>
                                            <div class="error">
                                                <?php echo $errors['pass']; ?>
                                            </div>
                                        <?php } ?>
                                    <br>
                                    <button type="submit" class="btn btn-success" name="submit"><b>Sign In</b></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <?php include("include/Pages/js.php");?>
    <script type="text/javascript"> 
          $(document).ready( function() {
            $('.alert').delay(3000).fadeOut();
          });
    </script>
</body>

</html>
