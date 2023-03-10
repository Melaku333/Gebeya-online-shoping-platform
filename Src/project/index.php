<?php 
session_start();


 if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  header("Location:Homeed.php");
 exit();
}
 else{
     header("Location: Homein.php");
     exit();
}
 ?>


