<?php 

session_start();
  if($_SESSION['isConnect'] = 'admin' || $_SESSION['isConnect'] = 'non'){
  session_destroy();   // function that Destroys Session 
  header('Location: ../../index.php');
}

?>