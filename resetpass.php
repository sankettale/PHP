<?php

if(isset($_POST['pass'])){
$pass = $_POST['pass'];
$name=$_POST['name'];  

// $con=mysqli_connect("xxx","xxx","xxx","xxx");
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'adminpanel');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = mysqli_query($con,"select * from signup where name='$name'")
or die(mysqli_error($con)); 

if (mysqli_num_rows ($query)==1) 
{
$query3 = mysqli_query($con,"update signup set password='$pass' where name='$name'")
or die(mysqli_error($con)); 
echo 'Password Changed';
}
else
{
echo 'Wrong CODE';
}
}
?>

<form action="resetpass.php" method="POST">
<p>New Password:</p><input type="password" name="pass" />
<input type="submit"  name="submit" value="Signup!" />
<input type="hidden" name="name" value="<?php echo $_GET['name'];?>" />
</form>