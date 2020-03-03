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
    
    $target_dir="images/uploads/gallery/";
    if(isset($_POST['submit']))
    {
        $errors = array();
        $errors = validate_gallery();
        if(!count($errors))
        {
            if($_POST)
            {
                $category = $_POST['category'];
                $target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
                move_uploaded_file ($_FILES["fileToUpload"]["tmp_name"],$target_file);
                $types=array('image/jpg','image/gif','image/png');    
                $sql = "INSERT INTO gallery (img, category )VALUES ('".$target_file."','".$category."')";
                if ($conn->query($sql) === TRUE) 
                {
                    $flag=1;
                } 
                else 
                {
                    $flag=2;
                }
            }
        }
    }
$thisPage="gallery";
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include("include/Pages/head-up.php");?>
    <title>
        Update Profile | Admin Panel
    </title>
    <?php include("include/Pages/head-down.php");?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
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
                                    <h4 class="card-title"><b>Add Gallery Photos</b></h4>
                                </div>
                                <div class="card-body">
                                    <?php
                                   if($flag==3)
                                   {
                                       echo'<div class="alert alert-success">
                                       <strong>Success!</strong> Image Deleted successfully.
                                     </div>';
                                   }
                                   if($flag==4)
                                   {
                                       echo'<div class="alert alert-danger">
                                             <strong>Error!</strong> Image Not Deleted. Something went wrong.
                                           </div>';
                                   }
                                  
                                ?>
                                    <?php
                                        if($flag==1)
                                        {
                                            echo'<div class="alert alert-success">
                                                  <strong>Success!</strong> Image uploaded successfully.
                                                </div>';
                                        }
                                        if($flag==2)
                                        {
                                            echo'<div class="alert alert-danger">
                                                  <strong>Error!</strong> Image not uploaded. Something went wrong.
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
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="bmd-label-floating">Select Photo</span></label>
                                                <input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo isset($_POST['fileToUpload']) ? $_POST['fileToUpload']: '';?>">
                                                <?php if(isset($errors['photo'])) { ?>
                                                <div class="error">
                                                    <?php echo $errors['photo']; ?>
                                                </div>
                                            <?php } ?>
                                            
                                            </div>
                                            <div class="col-md-4">
                                                <label  class="bmd-label-floating">Select category</label>
                                                <select class="form-control" name="category">
                                                    <option value="Infrastructure">Infrastructure</option>
                                                    <option value="Curriculum">Curriculum</option>
                                                    <option value="TeacherStaff">Teacher Staff</option>
                                                </select>
                                                <?php if(isset($errors['cat'])) { ?>
                                                <div class="error">
                                                    <?php echo $errors['cat']; ?>
                                                </div>
                                            <?php } ?>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="submit" name="submit" class="btn btn-success pull-right">Upload</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title"><b>Gallery photos List</b></h4>
                                </div>
                                <div class="card-body table-responsive">
                                        <table class="table" id="usetTable">
                                            <thead class=" text-primary">
                                                <th><b>Sr. No.</b></th>
                                                <th><b>Image</b></th>
                                                <th><b>Category</b></th>
                                                <th><b>Delete</b></th>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $b=1;
                                                $sql = "SELECT * FROM gallery ORDER BY id DESC";
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
                                                        <td><img src='<?php echo $user['img']; ?>' style='width:250px;height:200px'/></td>
                                                        <td><?php echo $user['category']; ?></td>
                                                        <td><a href="delete_gallery?id=<?php echo $user['id'];?>" onclick="return confirm('Do you want to Delete this Record?');" type="button" class="btn btn-danger">Delete</a></td>
                                                        <?php $b++ ?>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                        </table>
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