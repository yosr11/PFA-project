
<?php
   session_start();
   unset($_SESSION["email"]);
   unset($_SESSION["password"]);
   
   header('Refresh: 1; URL = login.php');
?>