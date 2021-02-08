<?php
    require_once('admin/config.php');
    if(isset($_POST['submit'])){
	 
	$name = $_POST['name'];  	
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    
    $duplicate=mysqli_query($conn,"SELECT email FROM downloadbrouchers WHERE email=$email");
    if(mysqli_num_rows($duplicate)>0)
    {
        echo "Email alredy in use";
    }
	else
	    {
	        $sql = "INSERT INTO downloadbrouchers (name, email, mobile, created)
                    VALUES ('".$name."', '".$email."', '".$mobile."', NOW())";

		    if (mysqli_query($conn, $sql))
		    {
		        header('Content-type: application/pdf');

                // It will be called downloaded.pdf
                header('Content-Disposition: attachment; filename="assets/broucher/ca-intermediat-brochurewihtfee.pdf"');
                
                // The PDF source is in original.pdf
                readfile('assets/broucher/ca-intermediat-brochurewihtfee.pdf');
                header('Location:course-ca-foundation.html');
            } 
            else
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
	    }
    }
?>