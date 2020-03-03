<?php
include('include/config.php');
if(!isset($_SESSION['auth']['id']))
    {
      echo '<script type="text/javascript">
        window.location = "index"
        </script>';
    exit;
    }
$thisPage="dashboard";
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include("include/Pages/head-up.php");?>
    <title>
        Dashboard | Admin
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
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-header-primary text-center">
                                    <h3 class="card-title"><b>Visitors</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <?php
                                        include('include/config.php');
                                        $flag=0;
                                        $sql = "SELECT * FROM counter_table";
                                        $result = $conn->query($sql);
                                        if(!$result)
                                        {
                                            die();
                                        }
                                        $total=mysqli_num_rows($result);
                          
                                    ?>        
                                        <div class="col-md-12 text-center">
                                            <h3><b><?php echo $total; ?></b></h3>
                                        </div>
                                        <?php 
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-header-primary text-center">
                                    <h3 class="card-title"><b>Notification</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <?php
                                        include('include/config.php');
                                        $flag=0;
                                        $sql = "SELECT * FROM notifications";
                                        $result = $conn->query($sql);
                                        if(!$result)
                                        {
                                            die();
                                        }
                                        $total=mysqli_num_rows($result);
                          
                                    ?>        
                                        <div class="col-md-12 text-center">
                                            <h3><b><?php echo $total; ?></b></h3>
                                        </div>
                                        <?php 
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-header-primary text-center">
                                    <h3 class="card-title"><b>Important Link</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <?php
                                        include('include/config.php');
                                        $flag=0;
                                        $sql = "SELECT * FROM links";
                                        $result = $conn->query($sql);
                                        if(!$result)
                                        {
                                            die();
                                        }
                                        $total=mysqli_num_rows($result);
                          
                                    ?>        
                                        <div class="col-md-12 text-center">
                                            <h3><b><?php echo $total; ?></b></h3>
                                        </div>
                                        <?php 
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-header-primary text-center">
                                    <h3 class="card-title"><b>Staff</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <?php
                                        include('include/config.php');
                                        $flag=0;
                                        $sql = "SELECT * FROM staff";
                                        $result = $conn->query($sql);
                                        if(!$result)
                                        {
                                            die();
                                        }
                                        $total=mysqli_num_rows($result);
                          
                                    ?>        
                                        <div class="col-md-12 text-center">
                                            <h3><b><?php echo $total; ?></b></h3>
                                        </div>
                                        <?php 
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-header-primary text-center">
                                    <h3 class="card-title"><b>Gallery</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <?php
                                        include('include/config.php');
                                        $flag=0;
                                        $sql = "SELECT * FROM gallery";
                                        $result = $conn->query($sql);
                                        if(!$result)
                                        {
                                            die();
                                        }
                                        $total=mysqli_num_rows($result);
                          
                                    ?>        
                                        <div class="col-md-12 text-center">
                                            <h3><b><?php echo $total; ?></b></h3>
                                        </div>
                                        <?php 
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-header-primary text-center">
                                    <h3 class="card-title"><b>Enquiry Messages</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <?php
                                        include('include/config.php');
                                        $flag=0;
                                        $sql = "SELECT * FROM student_enqury";
                                        $result = $conn->query($sql);
                                        if(!$result)
                                        {
                                            die();
                                        }
                                        $total=mysqli_num_rows($result);
                          
                                    ?>        
                                        <div class="col-md-12 text-center">
                                            <h3><b><?php echo $total; ?></b></h3>
                                        </div>
                                        <?php 
                                        ?>
                                    </div>
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
</body>

</html>
