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
        if(!empty($_POST['news']))
        {
            $news=$_POST['news'];

            $sql = "INSERT INTO news (news) VALUES ('".$news."')";
            if ($conn->query($sql) === TRUE) 
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
            $flag=5;
        }
    }
    
   /* if(isset($_GET["delete"]))
    {
        $delete = $_GET["delete"];
       
        $sql = "DELETE FROM news WHERE id=$delete";
   
        if ($conn->query($sql) === TRUE)
        {
            $flag= 3;  
        }
        else 
        {
            $flag=4;
        }
   
    }*/
    $thisPage="news";
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include("include/Pages/head-up.php");?>
    <title>
        Upload News| Admin Panel
    </title>
    <?php include("include/Pages/head-down.php");?>
   <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>-->
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
                                    <h4 class="card-title"><b>Add News</b></h4>
                                </div>
                                <div class="card-body">
                                    <?php
                                        if($flag==1)
                                        {
                                            echo'<div class="alert alert-success">
                                                  <strong>Success!</strong> News uploaded successfully.
                                                </div>';
                                        }
                                        if($flag==2)
                                        {
                                            echo'<div class="alert alert-danger">
                                                  <strong>Error!</strong> News not uploaded. Something went wrong.
                                                </div>';
                                        }
                                        
                                        if($flag==5)
                                        {
                                            echo'<div class="alert alert-danger">
                                                  <strong>Error!</strong> Please insert news !.
                                                </div>';
                                        }
                                    ?>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="bmd-label-floating">Type News</span></label>
                                                <textarea class="form-control" name="news" placeholder="Enter news" id="description"></textarea>
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
                                    <h4 class="card-title"><b>News List</b></h4>
                                </div>
                                <div class="card-body table-responsive">
                                <?php
                                   if($flag==3)
                                   {
                                       echo'<div class="alert alert-success">
                                       <strong>Success!</strong> News Deleted successfully.
                                     </div>';
                                   }
                                   if($flag==4)
                                   {
                                       echo'<div class="alert alert-danger">
                                             <strong>Error!</strong> News Not Deleted. Something went wrong.
                                           </div>';
                                   } 
                                ?>
                                        <table class="table" id="usetTable">
                                            <thead class=" text-primary">
                                                <th>Sr. No.</th>
                                                <th>News</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $b=1;
                                                    $sql = "SELECT * FROM news ORDER BY id DESC";
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
                                                            <td><b><?php echo $user['news']; ?></td>
                                                            <td><a href="edit_news?edit=<?php echo $user['id']; ?>" onclick="return confirm('Do you want to Edit this Record?');" type="button"
                                                                    class="btn btn-info">Edit</a></td>
                                                            <td><a href="delete_news?id=<?php echo $user['id'];?>" onclick="return confirm('Do you want to Delete this Record?');" type="button"
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