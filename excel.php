<?php
require "config.php";
$output = '';
if(isset($_POST["export"])){
                  // ----* type 1 but in this code bug occur no cell borders in the excel. ----*
	// $sql = "SELECT * FROM `task1`";
	// $result= mysqli_query($con,$sql);
	// if(mysqli_num_rows($result)>0)
	// {

	// 	$output.='
	// 	<table class="table" bordered="1">
	// 	<tr>
	// 	<th>id</th>
	// 	<th>user</th>
	// 	<th>pass</th>
	// 	<tr>';
	// 	while($row=mysqli_fetch_array($result))
	// 	{
	// 		$output.='
	// 		<tr>
	// 		<td>'.$row["id"].'</td>
	// 		<td>'.$row["user"].'</td>
	// 		<td>'.$row["pass"].'</td>
	// 		<tr>';
	// 	}
	// 	$output .='</table>';

	// 	header("Content-Description:File Transfer");
	// 	header("Content-Type:application/xls");
	// 	header("Content-Disposition:attachment;filename=download.xls");
	// 	echo $output;
	// }

									// --* type 2 --*

							$file_name="Download.csv";
							header("Content-Description:File Transfer");
							header("Content-Disposition:attachment;filename=$file_name");
							header("Content-Type:application/csv;");
							$file=fopen("php://output", "w");
							$header=array("id","user","pass");
							fputcsv($file, $header);
							$query1="SELECT * FROM `task1` ";
							$fireQuery1=mysqli_query($con,$query1);
							
							while($resQuery1=mysqli_fetch_array($fireQuery1))
								{
								$data=array();$i=1;
								// $data[]=$i;
								$data[]=$resQuery1['id'];
								$data[]=$resQuery1['user'];
								$data[]=$resQuery1['pass'];
								// $data[]=$resQuery1['order_date'];
								// $i++;
								fputcsv($file, $data);
								}
								
								fclose($file);
								exit;
						
						
					


}
?>