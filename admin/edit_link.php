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
    
    $id = $_GET['edit'];
    
    if(isset($_POST['update']))
    {
        if(empty($_POST['link']))
        {
            $flag=5;
        }
        else 
        {
	        $link=$_POST['link'];
            
            $sql = "UPDATE links SET link='".$link."'WHERE id = '".$id."'";
            if ($conn->query($sql) === TRUE) 
            {
                echo("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Link updated successfully.')
            </SCRIPT>");
            echo("<SCRIPT LANGUAGE='JavaScript'>
            window.location.href='link';
            </SCRIPT>");
            } 
            else 
            {
                $flag=2;
            }
            
        }
    }
    
    $thisPage="links";
    
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include("include/Pages/head-up.php");?>
    <title>
        Edit Links | Admin Panel
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
                                    <h4 class="card-title"><b>Add News</b></h4>
                                </div>
                                <div class="card-body">
                                    <?php
                                        if($flag==1)
                                        {
                                            echo'<div class="alert alert-success">
                                                  <strong>Success!</strong> Link Updated successfully.
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
                                                  <strong>Error!</strong> Insert data in refields.
                                                </div>';
                                        }
                                    ?>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row">
                                        <?php
                                        $sql1 ="SELECT * FROM links WHERE id='".$id."' ";
                                        $result = $conn->query($sql1);
                                        if ($result->num_rows > 0) 
                                            {
                                                while($row = $result->fetch_assoc()) 
                                                    {
                                        ?>
                                            <div class="col-md-12">
                                                <label class="bmd-label-floating">Update Link</span></label>
                                                <input class="form-control" type="url" name="link" value="<?php echo $row['link']; ?>">
                                            </div>
                                        <?php }}?>    
                                        </div>
                                        <button type="submit" name="update" class="btn btn-success pull-right">Update</button>
                                    </form>
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
    <script>
        $(document).ready( function() 
        {
            $('.alert').delay(3000).fadeOut();
        });  
    </script>
</body>

</html>