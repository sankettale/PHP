<?php
session_start();
if(!isset($_SESSION['auth']['id'])){
echo '<script type="text/javascript">
   window.location.href = "login.php"
   </script>';
   exit; 
}
require_once "adminconfig.php";

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="AdminLTE-2.4.5/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-2.4.5/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="AdminLTE-2.4.5/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-2.4.5/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="AdminLTE-2.4.5/dist/css/skins/skin-blue.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini"><b>A</b>LT</span> -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            
            </a>
            <ul class="dropdown-menu">
              <!-- <li class="header">You have 4 messages</li> -->
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="AdminLTE-2.4.5/dist/img/avatar.png" class="img-circle" alt="User Image">
                      </div>
                  
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
           
            <ul class="dropdown-menu">
              <!-- <li class="header">You have 10 notifications</li> -->
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <!-- <i class="fa fa-users text-aqua"></i> 5 new members joined today -->
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span> -->
            </a>
            <ul class="dropdown-menu">
              <!-- <li class="header">You have 9 tasks</li> -->
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <!-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
        </div>
        <div class="pull-left info">
          <!-- <p>Alexander Pierce</p> -->
          <!-- Status -->
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="adminsignup.php"><i class="fa fa-link"></i> <span>ADD</span></a></li>
        <li class="active"><a href="addstud.php"><i class="fa fa-link"></i> <span>ADD Student</span></a></li>
      
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- fetch -->

<div class="container">
  <div class="col-lg-12">
    <!-- <h1 class="text-center text-warning mt-5">DISPLAY</h1><br> -->
    <table class="table table-striped table-hover table-bordered ">
      
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center" colspan="3">Action</th>        
      </tr>
<?php
include('adminconfig.php');
$select="SELECT * from `signup`";
$result=mysqli_query($con,$select);
while($res=mysqli_fetch_array($result)){

?>


      <tr class="text-center">
        <td><?php echo $res['id'];?></td>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $res['email'];?></td>
      


        <td><a href="adminupdate.php?id=<?php echo $res['id'];?>& name=<?php echo $res['name'];?>& email=<?php echo $res['email'];?>&<?php echo $res['password'];?>" class="text-white"><button class="btn btn-success"> Edit</button></a></td>


        <td><a href="admindelete.php?id=<?php echo $res['id'];?>" class="text-white"><button class="btn btn-danger"> Delete</button></a></td>
        
        <td><a href="chnagepassword.php?id=<?php echo $res['id'];?>" class="text-white"><button class="btn btn-primary">Change password</button></a></td>

      </tr> 


      <?php
          }

      ?> 
    </table>
    

  </div>
</div>
    </section>


      <section class="content-header">
      <!-- fetch -->

<div class="container">
  <div class="col-lg-12">
    <!-- <h1 class="text-center text-warning mt-5">DISPLAY</h1><br> -->
    <table class="table table-striped table-hover table-bordered ">
      
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Name</th>
        <th class="text-center">Address</th>
        <th class="text-center">City</th>
        <th class="text-center">Mobile</th>
        <th class="text-center">Email</th>
        <th class="text-center">DOB</th>
        <th class="text-center">Gender</th>
        <th class="text-center">Sports</th>
        <th class="text-center">Image</th>        
        <th class="text-center" colspan="3">Action</th>        
      </tr>
<?php
include('adminconfig.php');
$select="SELECT * from `student_info`";
$result=mysqli_query($con,$select);
while($res=mysqli_fetch_array($result)){

?>


      <tr class="text-center">
        <td><?php echo $res['id'];?></td>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $res['address'];?></td>
        <td><?php echo $res['city'];?></td>
        <td><?php echo $res['mobile'];?></td>
        <td><?php echo $res['email'];?></td>
        <td><?php echo $res['dob'];?></td>
        <td><?php echo $res['gender'];?></td>
        <td><?php echo $res['sports'];?></td>
        <td><img src="<?php echo $res['uploadimg'];?>"height="100px" width="100px"></td>

      


        <td><a href="adminupdate.php?id=<?php echo $res['id'];?>& name=<?php echo $res['name'];?>" class="text-white"><button class="btn btn-success"> Edit</button></a></td>


        <td><a href="admindelete.php?id=<?php echo $res['id'];?>" class="text-white"><button class="btn btn-danger"> Delete</button></a></td>
        

      </tr> 


      <?php
          }

      ?> 
    </table>
    

  </div>
</div>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="AdminLTE-2.4.5/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-2.4.5/dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>