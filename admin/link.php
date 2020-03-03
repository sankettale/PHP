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
    
    if(isset($_POST['submit']))
    {
        if(empty($_POST['link']))
        {
            $flag=5;
        }
        else 
        {
	        $link=$_POST['link'];
            
            $sql = "INSERT INTO links (link) VALUES ('".$link."')";
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
   
    // if(isset($_GET["delete"]))
    // {
    //     $delete = $_GET["delete"];
       
    //     $sql = "DELETE FROM links WHERE id=$delete";
   
    //     if ($conn->query($sql) === TRUE)
    //     {
    //         $flag= 3;  
    //     }
    //     else 
    //     {
    //         $flag=4;
    //     }
   
    // }
    $thisPage="link";
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include("include/Pages/head-up.php");?>
    <title>
        Add Link | Admin Panel
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
                                    <h4 class="card-title"><b>Add Important Link</b></h4>
                                </div>
                                <div class="card-body">
                                    <?php
                                        if($flag==1)
                                        {
                                            echo'<div class="alert alert-success">
                                                  <strong>Success!</strong> Link Added successfully.
                                                </div>';
                                        }
                                        if($flag==2)
                                        {
                                            echo'<div class="alert alert-danger">
                                                  <strong>Error!</strong> Link not Added. Something went wrong.
                                                </div>';
                                        }
                                        
                                        if($flag==5)
                                        {
                                            echo'<div class="alert alert-danger">
                                            <strong>Error!</strong> Please Input Data in Required Fields.
                                          </div>';
                                        }
                                    ?>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Add Link :- <span
                                                            style="color:red">*</span></label>
                                                    <input type="url" name="link" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        
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
                                    <h4 class="card-title"><b>Important Link List</b></h4>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if($flag==3)
                                    {
                                        echo'<div class="alert alert-success">
                                        <strong>Success!</strong> Link Deleted successfully.
                                      </div>';
                                    }
                                    if($flag==4)
                                    {
                                        echo'<div class="alert alert-danger">
                                              <strong>Error!</strong> Link Not Deleted. Something went wrong.
                                            </div>';
                                    }
                                    ?>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>Sr. No.</th>
                                                <th>Link</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i=1;
                                                $sql = "SELECT * FROM links  ORDER BY id DESC ";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0)  
                                                    {
                                                        while($row = $result->fetch_assoc()) 
                                                        {
                                                            
                                            ?>
                                                <tr>
                                                    <td><b><?php echo "$i"; ?></b></td>
                                                    <td><b><?php echo $row['link']; ?></td>
                                                    
                                                    <td><a href="edit_link?edit=<?php echo $row['id']; ?>" onclick="return confirm('Do you want to Edit this Record?');" type="button"
                                                            class="btn btn-info">Edit</a></td>
                                                    <td><a href="delete_link?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you want to Delete this Record?');" type="button"
                                                            class="btn btn-danger">Delete</a></td>
                                                    <?php $i++ ?>
                                                </tr>
                                                <?php } } ?>
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
    
    <script type="text/javascript"> 
          $(document).ready( function() {
            $('.alert').delay(3000).fadeOut();
          });
    </script>
</body>

</html>
