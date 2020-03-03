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
    
   $target_dir="files/notifications/";
    if(isset($_POST['submit']))
    {
         $errors = array();
         
         $errors = validate_notification();
        if(!count($errors))
        {
            if($_POST)
            {
                $file_name=$_POST['file_name'];
                $target_file = $target_dir .basename($_FILES["file"]["name"]);
                move_uploaded_file ($_FILES["file"]["tmp_name"],$target_file);
                
                $sql = "INSERT INTO notifications (file_name,file,`created`)VALUES ('".$file_name."','".$target_file."',NOW())";
                if ($conn->query($sql) === TRUE) 
                {
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Notification added successfully.')
                    </SCRIPT>");
                } 
                else 
                {
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Notification not added. Something went wrong!')
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
    <?php include("include/Pages/head-up.php");?>
    <title>
        Add Notifications | Admin Panel
    </title>
    <?php include("include/Pages/head-down.php");?>
   <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>-->
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
                                <?php
                                    if($flag==3)
                                    {
                                        echo'<div class="alert alert-success">
                                        <strong>Success!</strong> Notification Deleted successfully.
                                      </div>';
                                    }
                                    if($flag==4)
                                    {
                                        echo'<div class="alert alert-danger">
                                              <strong>Error!</strong> Notification Not Deleted. Something went wrong.
                                            </div>';
                                    }
                                    ?>
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title"><b>Add Notifications</b></h4>
                                </div>
                                <div class="card-body">
                                    <?php
                                        if($flag==1)
                                        {
                                            echo'<div class="alert alert-success">
                                                  <strong>Success!</strong> Notification Added successfully.
                                                </div>';
                                        }
                                        if($flag==2)
                                        {
                                            echo'<div class="alert alert-danger">
                                                  <strong>Error!</strong> Notification not Added. Something went wrong.
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
                                        <!-- <div class="row"> -->
                                            <!-- <div class="col-md-10"> -->
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Notification Title :- <span style="color:red">*</span></label>
                                                    <input type="text" name="file_name" class="form-control">
                                                    <?php if(isset($errors['noti'])) { ?>
                                                        <div class="error">
                                                            <?php echo $errors['noti'] ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            <!-- </div> -->
                                      
                                            <!-- <div class="col-md-2"> -->
                                                <label class="bmd-label-floating">Select File <span
                                                        style="color:red">*</span>
                                                        </label>
                                                       <input type="file" name="file" id="file"><br>
                                                       <?php if(isset($errors['document'])) { ?>
                                                        <div class="error">
                                                            <?php echo $errors['document'] ?>
                                                        </div>
                                                    <?php } ?>
                                            <!-- </div> -->
                                        <!-- </div> -->
                                        <button type="submit" name="submit" class="btn btn-success pull-right">Upload</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title"><b>Notifications List</b></h4>
                                </div>
                                <div class="card-body">
                                    
                                    <div class="table-responsive">
                                        <table class="table" id="usetTable">
                                            <thead class=" text-primary">
                                                <th><b>Sr. No.</b></th>
                                                <th><b>Notification Title</b></th>
                                                <th><b>File</b></th>
                                                <th><b>Edit</b></th>
                                                <th><b>Delete</b></th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $b=1;
                                                    $sql = "SELECT * FROM notifications ORDER BY id DESC";
                                                    $result = $conn->query($sql);
                                                    $arr_users = [];
                                                    if ($result->num_rows > 0) 
                                                    {
                                                        $arr_users = $result->fetch_all(MYSQLI_ASSOC);
                                                    }
                                                ?>
                                                <?php if(!empty($arr_users)) { ?>
                                                    <?php foreach($arr_users as $user) { ?>
                                                        <tr>
                                                            <td><b><?php echo "$b"; ?></b></td>
                                                            <td><b><?php echo $user['file_name']; ?></td>
                                                            <td><a href="<?php echo $user['file']; ?>" target="_blank"  class="btn btn-warning">View</a></td>
                                                            <td><a href="edit_noti?edit=<?php echo $user['id']; ?>" onclick="return confirm('Do you want to Edit this Record?');" type="button"
                                                                    class="btn btn-info">Edit</a></td>
                                                            <td><a href="delete_noti?id=<?php echo $user['id'];?>" onclick="return confirm('Do you want to Delete this Record?');" type="button"
                                                                    class="btn btn-danger">Delete</a></td>
                                                            <?php $b++ ?>
                                                        </tr>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
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
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>-->
    <script>
        $(document).ready(function() {
            $('#usetTable').DataTable();
        } );
    </script>
    <script type="text/javascript"> 
          $(document).ready( function() {
            $('.alert').delay(3000).fadeOut();
          });
    </script>
</body>

</html>
