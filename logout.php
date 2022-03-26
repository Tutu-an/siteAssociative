
<!--
<?php

/*
if(isset($_SESSION['email'])){
  unset($_SESSION['email']);   
}
header("Location: index.php");*/

session_start(); //to ensure you are using same session

if(isset($_SESSION['email'])){
  unset($_SESSION['email']); 
  session_destroy();  
}
 //destroy the session
header("Location:index.php"); //to redirect back to "index.php" after logging out
exit();

?>
