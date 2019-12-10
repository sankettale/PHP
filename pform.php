	<?php
require "config.php";
if (isset($_POST['submit']))
 {
$fullname=$_POST['fullname'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];

$select='SELECT * from `task2` where `fullname` = "'.$fullname.'" && `address` = "'.$address.'" && `mobile` = "'.$mobile.'" && `email` ="'.$email.'" ';

$result=mysqli_query($con,$select);
$num=mysqli_num_rows($result);

if($num==1){
	echo "<h4 class='text-center bg-danger text-danger'>Duplicate Data</h4>";
}
else{
	$insert='INSERT INTO task2( `fullname`,`address`,`mobile`,`email`) VALUES("'.$fullname.'","'.$address.'","'.$mobile.'","'.$email.'")';
	$res=mysqli_query($con,$insert);
	
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHPFORM</title>
	
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="jquery-3.4.1.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- sweetalert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<style>
  .background{
    background-image: linear-gradient(#feada6,#f5efef);
  }
</style>

</head>
<body>


             <div class="container-fluid background">
                <div class="container">
                  	<h1 class="text-center">Form</h1>

                  <form method="POST">
                  	
                  	<div class="form-group">
                      <label for="name">Full Name:</label>
                      <input type="text" class="form-control" id="fname1" name="fullname">
                      <h6 id="fnamecheck"> </h6>
                    </div>

                    <div class="form-group">
                      <label for="add">Address:</label>
                      <input type="text" class="form-control" id="add" name="address">
                      <h6 id="addcheck"> </h6>
                    </div>
                  
                    <div class="form-group">
                      <label for="mob">Mobile No.:</label>
                      <input type="number" class="form-control" id="mobile" name="mobile">
                      <h6 id="mobcheck"> </h6>
                    </div>
                  
                    <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" id="email" name="email">
                      <h6 id="mailcheck"> </h6>
                    </div>       

                    <div class="form-group text-right">      
                      <input type="reset" name="reset" class="btn btn-default btn-danger rese" value="Reset">
                      <input type="submit" name="submit" class="btn btn-default btn-success sub" value="Submit">
                    </div>

                  </form>
                </div>
             <br>





                                                    <!-- fetch -->

<div class="container">
  <div class="col-lg-12">
    <h1 class="text-center mt-5">Fetch</h1><br> 
    <table class="table table-striped table-hover table-bordered ">
      
      <tr class="text-center">
        <th>ID</th>
        <th>Full Name</th>
        <th>Address</th>
        <th>Mobile NO.</th>
        <th>Email</th>
        <th>Update</th>
        <th>Delete</th>        
      </tr>
<?php
include('config.php');
$select="SELECT * from `task2`";
$result=mysqli_query($con,$select);
while($res=mysqli_fetch_array($result)){

?>


      <tr class="text-center">
        <td><?php echo $res['id'];?></td>
        <td><?php echo $res['fullname'];?></td>
        <td><?php echo $res['address'];?></td>
        <td><?php echo $res['mobile'];?></td>
        <td><?php echo $res['email'];?></td>


        <td>
         <a href="formupdate.php?id=<?php echo $res['id'];?>& fullname=<?php echo $res['fullname'];?>& address=<?php echo $res['address'];?>& mobile=<?php echo $res['mobile'];?>& email=<?php echo $res['email'];?>" class="text-white"><button class="btn btn-success"> Update</button></a></td> 


        <td> 
          <a href="formdelete.php?id=<?php echo $res['id'];?>" class="text-white"><button class="btn btn-danger"> Delete</button></a></td> 
        
      </tr> 


      <?php
          }

      ?> 
    </table>
</div>

         </body>
    </html>