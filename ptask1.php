<?php
include('config.php');
if(isset($_POST['submit']))
{
$name=$_POST['user'];
$pass=$_POST['pass'];
$q="SELECT * from `task1`";
}

?>
<html>
<title>php1</title>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <script src="jquery-3.4.1.min.js"></script>
</head>
<body>

  

<div class="container">

                                              <!-- insert -->


<?php
// if(isset($_POST['submit']))
// {
//   if($_POST){
// $name=$_POST['user'];
// $pass=$_POST['pass'];
// $i= 'INSERT INTO  `task1`(`user`,`pass`) values("'.$name.'","'.$pass.'")';
// $sql=mysqli_query($con,$i);
// if($sql)
// {
//  echo "Successful";
//  header('location:ptask1.php');
// }
// else{ 
//   echo 'Failed';

// }
// }
// }


 
            if(isset($_POST['submit']))
            {    
               // $errors = array();
               // $errors = validate_register();
               // if(!count($errors)){
                          // if($_POST){
                          $name = $_POST["user"];                
                          $pass = $_POST["pass"];
                          $sql= 'INSERT INTO `task1`(`user`,`pass`) VALUES ("'.$name.'","'.$pass.'")';
                          $res=mysqli_query($con,$sql);
                            if($res){
                                 $_SESSION['msg'] = "Succesfully Register.";
                                 // header('location:ptask1.php');
                                 // echo '<script> $("#staticModal").modal("show");</script>';
                            }
                            else
                            {
                             echo("<SCRIPT LANGUAGE='JavaScript'>
                             window.alert('Could not Added')
                             window.location.href='register.php';
                             </SCRIPT>");
                            }
                          // }
                }    
            

   ?>
        <div id="mydiv" >
            <?php if(isset($_SESSION['msg'])) { ?>
              <div class="flash alert alert-success" style="color:rgb(60, 179, 113);text-align:center;">

                <div class="message notice">
                  <?php echo $_SESSION['msg'];
                   unset($_SESSION['msg']); ?>
                </div>
            </div>
            <?php } ?>
          </div>

          <!-- validation -->
<style>
.error {color: #FF0000;}
</style>
 <?php
$nameErr="";
$name="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(empty($_POST["name"])){
    $nameErr = "Name is required";
  }
  else{
    $name=test_input($_POST["name"]);
  }
}
// function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
 ?>
  <form method="POST">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="user">
      <span class="error">*<?php echo $nameErr;?></span>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pass" required="">
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="submit">
  </form>
</div>


                                                    <!-- fetch -->

<div class="container">
  <div class="col-lg-12">
    <h1 class="text-center text-warning mt-5">DISPLAY</h1><br>
    <table class="table table-striped table-hover table-bordered ">
      
      <tr class="text-center">
        <th>ID</th>
        <th>User</th>
        <th>Pass</th>
        <th>Update</th>
        <th>Delete</th>        
      </tr>
<?php
include('config.php');
$q="SELECT * from `task1`";
$result=mysqli_query($con,$q);
while($res=mysqli_fetch_array($result)){

?>


      <tr class="text-center">
        <td><?php echo $res['id'];?></td>
        <td><?php echo $res['user'];?></td>
        <td><?php echo $res['pass'];?></td>


        <td> <!-- <button class="btn btn-success"> -->
         <a href="update1.php?id=<?php echo $res['id'];?>& name=<?php echo $res['user'];?>& pass=<?php echo $res['pass'];?>" class="text-white"><button class="btn btn-success"> Update</button></a></td>


        <td><!--  <button class="btn btn-danger"> --> 
          <a href="delete.php?id=<?php echo $res['id'];?>" class="text-white"><button class="btn btn-danger"> Delete</button></a></td>
        
      </tr> 


      <?php
          }

      ?> 
    </table>
    

  </div>
</div>
</body>
</html>