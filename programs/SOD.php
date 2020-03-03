<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sum OF Digits</title>
</head>
<body>
<form method="POST" action="SOD.php">
	<label>Enter Number :-</label>
	<input type="text" name="number">
	<button type="submit" name="submit">SUM</button>
</form>
                            <!-- SUM OF DIGITS 1 -->
<?php  
$num = $_POST['number'];  
$sum=0; 
$rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  
 {  
   $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
  }  
  echo "Sum of digits is $sum";  
 ?>
<br>                        <!-- End SUM OF DIGITS 1 -->
                            <!-- SUM OF DIGITS 2 -->
<?php   
function getsum($n) 
{  
    $sum = 0; 
    while ($n != 0) 
    { 
        $sum = $sum + $n % 10; 
        $n = $n/10; 
    } 
    return $sum; 
} 
  
$n = $_POST['number']; 
$res = getsum($n); 
echo "Sum of digits is $res"; 
?><br>
                          <!-- End SUM OF DIGITS 2 -->
                          <!-- EVEN And ODD -->
<?php  
$number=$_POST['number'];  
if($number%2==0)  
{  
 echo "$number is Even Number";   
}  
else  
{  
 echo "$number is Odd Number";  
}   
?> <br> 

                          <!-- End EVEN And ODD -->
                          <!-- table of number -->
<?php    
   $number=$_POST['number'];
for($i=1; $i<=10; $i++)   
{  
  echo $i*$number;   
  echo '<br>';     
}  
?>  
                          <!-- End table of number -->
</body>
</html>