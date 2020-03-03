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
    
    $target_dir="images/uploads/staff/";
    if(isset($_POST['submit']))
    {
        
        $errors = array();
        $errors = validate_staff();
        if(!count($errors))
        {
            if($_POST)
            {
            
	        $name=$_POST['name'];
            $position=$_POST['position'];
            $qualification=$_POST['qualification'];
            $types=array('png','jpg','jpeg');
            //$type=$_POST['type'];
            $target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
            move_uploaded_file ($_FILES["fileToUpload"]["tmp_name"],$target_file);
                
            $sql = "INSERT INTO staff (name,position,img,qualification)VALUES ('".$name."','".$position."','".$target_file."','".$qualification."')";
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
    // if(isset($_GET["delete"]))
    // {
    //     $delete = $_GET["delete"];
    //     $file= $_GET["file"];
    //     $sql = "DELETE FROM staff WHERE id=$delete";
   
    //     if ($conn->query($sql) === TRUE)
    //     {
    //         $flag= 3;
    //     }
    //     else 
    //     {
    //         $flag=4;
    //     }
   
    // }
   
    
    $thisPage="staff";
?>


<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include("include/Pages/head-up.php");?>
    <title>
        Staff Details | Admin Panel
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
                                    <h4 class="card-title"><b>Add Staff Details</b></h4>
                                </div>
                                <div class="card-body">
                                    
                                    <?php
                                   if($flag==3)
                                   {
                                       echo'<div class="alert alert-success">
                                       <strong>Success!</strong> Member Deleted successfully.
                                     </div>';
                                     $flag=0;
                                   }
                                   if($flag==4)
                                   {
                                       echo'<div class="alert alert-danger">
                                             <strong>Error!</strong> Member Not Deleted. Something went wrong.
                                           </div>';
                                   }
                                  
                                ?>
                                    <?php
                                        if($flag==1)
                                        {
                                            echo'<div class="alert alert-success">
                                                  <strong>Success!</strong> Member Added successfully.
                                                </div>';
                                        }
                                        if($flag==2)
                                        {
                                            echo'<div class="alert alert-danger">
                                                  <strong>Error!</strong> Member not Added. Something went wrong.
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
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Name <span
                                                            style="color:red">*</span></label>
                                                    <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $_POST['name']: '';?>">
                                                    <?php if(isset($errors['nam'])) { ?>
                                                <div class="error">
                                                    <?php echo $errors['nam']; ?>
                                                </div>
                                            <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="bmd-label-floating">Select Photo <span
                                                        style="color:red">*</span></label>
                                                <input type="file" name="fileToUpload" id="fileToUpload"><br>
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
                                                    <label class="bmd-label-floating">Qualification </label>
                                                    <input type="filtexte" name="qualification" class="form-control" value="<?php echo isset($_POST['qualification']) ? $_POST['qualification']: '';?>">
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
                                                    <input type="text" name="position" class="form-control" value="<?php echo isset($_POST['position']) ? $_POST['position']: '';?>">
                                                    <?php if(isset($errors['pos'])) { ?>
                                                <div class="error">
                                                    <?php echo $errors['pos']; ?>
                                                </div>
                                            <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!--<div class="col-md-8">-->
                                            <!--    <div class="form-group">-->
                                            <!--    <label class="bmd-label-floating">Type :- <span-->
                                            <!--                style="color:red">*</span></label>-->
                                            <!--        <select class="form-control" name="type">-->
                                                    
                                            <!--            <option class="form-control" value="Faculty Member">Faculty-->
                                            <!--                Member</option>-->
                                            <!--            <option class="form-control" value="Office Staff">Office Staff-->
                                            <!--            </option>-->
                                            <!--            <option class="form-control" value="Library Staff">Library Staff-->
                                            <!--            </option>-->
                                            <!--        </select>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <div class="col-md-4">
                                                <button type="submit" name="submit"
                                                    class="btn btn-success pull-right">Upload</button>
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
                                    <h4 class="card-title"><b>Staff Details List</b></h4>
                                </div>
                                <div class="card-body table-responsive">
                                    
                                    
                                    <table class="table" id="userTable">
                                        <thead class=" text-primary">
                                            <th>Sr. No.</th>
                                            <th>Image</th>
                                             <th>Position</th>
                                            <th>Name</th>
                                            <th>Qualification</th>
                                             <!--<th>Type</th>-->
                                            <th>Edit</th>
                                            <th class="text-center">Delete</th>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $b=1;
                                            $sql = "SELECT * FROM staff";
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
                                                    
                                                    <td><img src='<?php echo $user['img']; ?>' style='width:120px;height:120px'/></td>
                                                    
                                                     <td><b><?php echo $user['position']; ?></td>
                                                    
                                                    <td><b><?php echo $user['name']; ?></td>
                                                    
                                                    <td><b><?php echo $user['qualification']; ?></td>
                                                    
                                                    
                                                    
                                                    <!--<td><b><?php echo $user['type']; ?></b></td>-->
                                                    
                                                    <td><p class="text-center"><a href="edit_staff?edit=<?php echo $user['id']; ?> & file=<?php echo $user['img']; ?>" click="return confirm('Do you want to Edit this Record?');">
                                                        <i class="fa fa-pencil-square-o fa-3x text-info" aria-hidden="true"></i></a></p></td>
                                                        
                                                    <td><p class="text-center"><a href="delete_staff?id=<?php echo $user['id'];?> & file=<?php echo $user['img']; ?>" onclick="return confirm('Do you want to Delete this Record?');">
                                                        <i class="fa fa-trash-o fa-3x text-danger"aria-hidden="true"></i></a></td>
                                                    
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
           <?php include("include/Pages/footer.php");?>
        </div>
    </div>
    <?php include("include/Pages/js.php");?>
    
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>-->
    <script>
        $(document).ready(function() {
            $('#userTable').DataTable();
        } );
    </script>
    <script type="text/javascript"> 
          $(document).ready( function() {
            $('.alert').delay(3000).fadeOut();
          });
    </script>
</body>

</html>
