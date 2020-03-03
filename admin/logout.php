<?php
   session_start();
   session_destroy();
   unset($_SESSION["email"]);
   unset($_SESSION["password"]);
   
   //header('Refresh: 2; URL = index.php');
   echo '<script type="text/javascript">
        window.location = "index"
        </script>';
?>