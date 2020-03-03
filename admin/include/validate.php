<?php

    // Validate addadmin
    function  validate_addadmin() 
		{
			$errors = array();
		    
            if(empty($_POST['name']))
            {
              $errors['nam'] = "Please enter Name";
            }
			
			elseif(ctype_alpha(str_replace(' ', '', $_POST['name']))=== false)
			{
			    $errors['nam'] = "Please enter valid Name";
			}
		    elseif(empty($_POST['email']))
            {
              $errors['em'] = "Please enter Email ID";
            }
		    elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/",$_POST['email']))
			{
				$errors['em'] = "Please enter valid email address";
			}
            elseif(empty($_POST['password']))
            {
              $errors['pass'] = "Please enter Password";
            }
            elseif(empty($_POST['conf_password']))
            {
              $errors['conf_password'] = "Please enter Password";
            }
		    elseif(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['password']))
			{
				$errors['pass'] = "Please enter valid Password";
			}
			elseif(!isset($_POST['auth_gallery']) && !isset($_POST['auth_staff']) && !isset($_POST['auth_notification']) && !isset($_POST['auth_link']) && !isset($_POST['auth_enquiry']) )
            {
                $errors['auth'] = "Please select atleast one chechbox !";
            }
            return $errors;


	    }
	    // Validation for change password
	    function validate_changepass(){
	        
             if(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['newpass']))
			{
				$errors['np'] = "Please enter valid Password";
			}
			if(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['confpass']))
			{
				$errors['cp'] = "Please enter valid Password";
			}
			elseif($_POST['confpass'] != $_POST['newpass']){
			    $errors['cp'] = "New Password and Confirm Password should be same.";
			}
			return $errors;
	    }

    // Validation for admin
    
	    function  validate_login() 
		{
			$errors = array();
		    
			if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/",$_POST['email']))
			{
				$errors['em'] = "Please enter valid email address";
			}
			
			/*if(!preg_match('/^[0-9]{10}+$/', $_POST['mobile']))
			{
			   $errors['mob'] = "Please enter valid Mobile number"; 
			}
			*/
		    if(!preg_match("#^[-A-Za-z0-9']*$#",$_POST['password']))
			{
				$errors['pass'] = "Please enter valid Password";
			}
			
		    return $errors;
	    }
	   
    // Validation for Add Staff
    
        function validate_staff()
        {   
          	$errors = array();
         
           /* if(ctype_alpha(str_replace(' ', '', $_POST['name']))=== false)
			{
			    $errors['nam'] = "Please enter valid Name";
			}
			if(ctype_alpha(str_replace(' ', '', $_POST['position']))=== false)
			{
			    $errors['pos'] = "Please enter valid Position";
			}*/
			 if(empty($_POST['name']))
            {
               $errors['nam'] = "Please Enter Name";
            }
            if(empty($_POST['qualification']))
            {
               $errors['qual'] = "Please Enter Qualification";
            }
             if(empty($_POST['position']))
            {
               $errors['pos'] = "Please Enter Position";
            }
			 if(empty($_FILES['fileToUpload']['name']))

			  {

				$errors['photo']="Please select photo.<br>";

			  }

             elseif($_FILES['fileToUpload']['error']==0)

			  {

				$types=array('image/jpeg','image/gif','image/png');

				if(!in_array($_FILES['fileToUpload']['type'],$types))
				{

				 $errors['photo']="please select photo of type only jpeg ,png, gif.<br>";
				}

			  }
			 elseif($_FILES["fileToUpload"]["size"] < 20000){
			     $errors['photo']="Please selecct photo of max size 2mb.<br>";
			 }
	
            
            return $errors;
          }


          function validate_gallery(){
            $errors = array();

			if(empty($_FILES['fileToUpload']['name']))

			  {

				$errors['photo']="Please select photo.<br>";

			  }

             elseif($_FILES['fileToUpload']['error']==0)

			  {

				$types=array('image/jpeg','image/gif','image/png');

				if(!in_array($_FILES['fileToUpload']['type'],$types))
				{

				 $errors['photo']="please select photo of type only jpeg ,png, gif.<br>";
				}

			  }
			 elseif($_FILES["fileToUpload"]["size"] < 20000){
			     $errors['photo']="Please select photo of max size 2mb.<br>";
			 }
            elseif(!isset($_POST['category']))
            {
                 $errors['cat']="Please select category.<br>";
            }
		    return $errors;

		 }  
		 
        function  validate_profile() 
		{
			$errors = array();
			 if(empty($_POST['name']))
            {
               $errors['nam'] = "Please Enter Name.";
            }
		    elseif(ctype_alpha(str_replace(' ', '', $_POST['name']))=== false)
			{
			    $errors['nam'] = "Please enter valid Name";
			}
             elseif(empty($_POST['email']))
            {
               $errors['em'] = "Please Enter Email.";
            }
		    
			elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/",$_POST['email']))
			{
				$errors['em'] = "Please enter valid email address";
			}
			
			elseif(!isset($_POST['auth_gallery']) && !isset($_POST['auth_staff']) && !isset($_POST['auth_notification']) && !isset($_POST['auth_link']) && !isset($_POST['auth_enquiry']) )
            {
                $errors['auth'] = "Please select atleast one chechbox !";
            }
			
			return $errors;
	    }
        function validate_staff_edit()
        {
            $errors = array();
         
            /*if(ctype_alpha(str_replace(' ', '', $_POST['name']))=== false)
			{
			    $errors['nam'] = "Please enter valid Name";
			}*/
			/*if(ctype_alpha(str_replace(' ', '', $_POST['position']))=== false)
			{
			    $errors['pos'] = "Please enter valid Position";
			}*/
			
            if(empty($_POST['name']))
            {
               $errors['nam'] = "Please Enter Name";
            }
            if(empty($_POST['qualification']))
            {
               $errors['qual'] = "Please Enter Qualification";
            }
             if(empty($_POST['position']))
            {
               $errors['pos'] = "Please Enter Position";
            }
             if ($_FILES['fileToUpload']['error'] == 0)
            {
                $types = array('image/jpeg', 'image/gif', 'image/png');
                if (!in_array($_FILES['fileToUpload']['type'], $types)) {
                $errors['photo'] = "Please select photo of type only jpeg ,png, gif,jpg !";
                }
            }
            elseif($_FILES['fileToUpload']['size'] > 2000000) // Approx. 2MB files can be uploaded.
            {
                $errors['photo'] = "Invalid Size of photo ! Max. Size of Image should be 2MB";
            }
                
            return $errors;
        }
        
        function validate_notification()
        {
            $errors = array();

			if(empty($_FILES['file']['name']))
            {
                $errors['document']="Please select file.<br>";
            }
            elseif($_FILES['file']['error']==0)
            {
			    $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
                $extensions= array("pdf","doc","docx");
                if(in_array($file_ext,$extensions)=== false){
                    $errors['document']="extension not allowed, please choose a pdf, doc, docx file.";
                }
            }
            elseif(empty($_POST['file_name']))
            {
                $errors['noti'] = "Please enter Title";
            }
            return $errors;
        }
		function validate_edit_notification()
		{
            $errors = array();
            if($_FILES['file']['error']==0)
            {
                $maxsize    = 5000000;
                $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
                $extensions= array("pdf","doc","docx");
                if(in_array($file_ext,$extensions)=== false){
                    $errors['document']="extension not allowed, please choose a  pdf, doc, docx file.";
                }
                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)){
                
                    $errors['document'] = 'File too large. File must be less than 2 megabytes.';
                }
            }
			if(empty($_POST['file_name']))
            {
               $errors['noti'] = "Please enter Title";
            }
            return $errors;
		    
		}
            
        