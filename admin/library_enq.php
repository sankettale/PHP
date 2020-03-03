<?php 
    include('include/config.php');
    if(!isset($_SESSION['auth']['id']))
    {
      echo '<script type="text/javascript">
        window.location = "index"
        </script>';
    exit;
    }
    if(isset($_GET["delete"]))
    {
        $delete = $_GET["delete"];
       
        $sql = "DELETE FROM library_enq WHERE id=$delete";
   
        if ($conn->query($sql) === TRUE)
        {
            $flag= 3;  
        }
        else 
        {
            $flag=4;
        }
   
    }
    $thisPage="messages";
?>

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include("include/Pages/head-up.php");?>
    <title>
        Library Messages | Admin Panel
    </title>
    <?php include("include/Pages/head-down.php");?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
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
                        <div class='card'>
                            <div class='card-header card-header-warning'>
                                <h4 class='card-title text-center'><b>View Enquires</b></h4>
                            </div>
                            <div class='card-body'>
                                <?php
                                    if($flag==3)
                                    {
                                        echo'<div class="alert alert-success">
                                        <strong>Success!</strong> Message Deleted successfully.
                                      </div>';
                                    }
                                    if($flag==4)
                                    {
                                        echo'<div class="alert alert-danger">
                                              <strong>Error!</strong> Message Not Deleted. Something went wrong.
                                            </div>';
                                    }
                                    ?>
                                <div class='table-responsive'>
                                    <table class='table' id="usetTable">
                                        <thead class='text-primary'>
                                        <th>Sr.No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile no</th>
                                            <th>Message</th>
                                             <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $b=1;
                                                $sql = "SELECT * FROM library_enq";
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
                                                        <td><?php echo $user['lname']; ?></td>
                                                        <td><?php echo $user['lemail']; ?></td>
                                                        <td><?php echo $user['lnumber']; ?></td>
                                                        <td><?php echo $user['lmessage']; ?></td>
                                                        <td><a href="?delete=<?php echo $user['id']; ?>" onclick="return confirm('Do you want to Delete this Record?');" type="button" class="btn btn-danger">Delete</a></td>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
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