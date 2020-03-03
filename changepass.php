<?php
include('includes/pages/config.php');
if(!isset($_SESSION['auth']['id']))
    {
      echo '<script type="text/javascript">
        window.location = "index.php"
        </script>';
    exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Change Password</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <!-- <div class="se-pre-con"></div> -->
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php include('includes/sidebar.php'); ?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <?php include("includes/topbar.php"); ?>
            <!--// top-bar -->
            
            <!-- Forms content -->
            <section class="forms-section">

                <!-- Forms-3 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">ADD USER</h4>

                     <div class="card-body">
                            <?php if(isset($_SESSION['msg'])) { ?>
                                <div class="flash alert alert-<?php echo $_SESSION['type']; ?>" role="alert">
                                    <?php echo $_SESSION['msg']; 
                                          unset($_SESSION['msg']);
                                    ?>
                                </div>
                            <?php } ?>

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="inputusername4" placeholder="Username" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name']: '';?>">
                                <?php if(isset($errors['nam'])) { ?>
                                    <small class="error">
                                        <?php echo $errors['nam']; ?>
                                    </small>
                                <?php } ?>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email']: '';?>">
                                <?php if(isset($errors['em'])) { ?>
                                    <small class="error">
                                        <?php echo $errors['em']; ?>
                                    </small>
                                <?php } ?>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password']: '';?>">
                                <?php if(isset($errors['pass'])) { ?>
                                    <small class="error">
                                        <?php echo $errors['pass']; ?>
                                    </small>
                                <?php } ?>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password" name="conf_password" value="<?php echo isset($_POST['conf_password']) ? $_POST['conf_password']: '';?>">
                                <?php if(isset($errors['pass'])) { ?>
                                    <small class="error">
                                        <?php echo $errors['pass']; ?>
                                    </small>
                                <?php } ?>
                            </div>
                            
                            <div class="form-group"> &nbsp;
                                <input type="hidden" name="acc_type" value="user">
                                <label class="checkbox-inline"><b> Authority :- </b>&nbsp;</label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="auth_gallery"  id="auth_gallery">&nbsp; Gallery &nbsp;
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="auth_video"  id="auth_video">&nbsp; video &nbsp;
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="auth_facilities"  id="auth_facilities">&nbsp; Facilities &nbsp;
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="auth_staff"  id="auth_staff"> &nbsp; Staff
                                </label>
                            </div>
                        </div>    
                        <?php if(isset($errors['auth'])) { ?>
                            <small class="error">
                                <?php echo $errors['auth']; ?>
                            </small>
                        <?php } ?>                 
                        <div class="text-right"><!-- 
                            <input type="submit" name="submit" class="btn btn-success"> -->
                        <button type="submit"name="submit" class="btn btn-success">ADD</button>
                    </div>
                    </form>
                </div>
                <!--// Forms-3 -->
                
            </section>

            <!--// Forms content -->
            
            <!-- Copyright -->
           <?php include('includes/footer.php'); ?>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->
    
    <!-- loading-gif Js -->
    <script src="js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->
    <!-- profile-widget-dropdown js-->
    <script src="js/script.js"></script>
    <!--// profile-widget-dropdown js-->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>