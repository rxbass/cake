<?php

session_start(); 
 include("../config.php");

foreach($_POST[che] as $val)
{

  
$a="delete from quiz_questions where qid = $val";
$b="delete from quiz_answers where qid = $val";
 $cq=mysql_query($a); 
  $cq1=mysql_query($b); 

}
 echo "<script language='javascript'>window.location='deleteques.php?sav=1&pag=0'</script>"; 

?>