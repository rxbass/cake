<?php
session_start(); 
session_unset(); 
$a=session_destroy();
 include("config.php");
 
  if($a==true)
  {
  echo "<script type='text/javascript'>window.location='../index.php'</script>";
  }
  
 

?> 