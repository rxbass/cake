<?php
session_start(); 
 include("../config.php");
 
 if(isset($_POST['submit']))
 {
 $quesid=$_GET['quesid'];
 $question=$_POST['ques'];
 $op1=$_POST['op1'];
 $op2=$_POST['op2'];
 $op3=$_POST['op3'];
 $op4=$_POST['op4'];
echo $a="update quiz_questions set question='$question',option1='$op1',option2='$op2',option3='$op3',option4='$op4' where qid=$quesid";
$b=mysql_query($a);
if($b==1)
{
	echo "<script language='javascript'>window.location='editques.php?sav=1'</script>";
}
}
 ?>
