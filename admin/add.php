<?php
session_start(); 
 include("../config.php");
 if(isset($_SESSION['name']))
{
  
 
 if(isset($_POST['submit']))
 {
 $ans=$_POST['ans'];
 $question=$_POST['ques'];
 $op1=$_POST['op1'];
 $op2=$_POST['op2'];
 $op3=$_POST['op3'];
 $op4=$_POST['op4'];
echo $a="insert into quiz_questions(question,option1,option2,option3,option4) values('$question','$op1','$op2','$op3','$op4')";
echo $b=mysql_query($a);
if($b==1)
{	
	echo $ss="select * from quiz_questions order by qid desc";
	$ss2=mysql_query($ss);
	$ss3=mysql_fetch_array($ss2);
	 $qid=$ss3['qid'];
	echo $aa="insert into quiz_answers(answer,qid) values ($ans,$qid)";
	$bb=mysql_query($aa);
	if($bb==true)
	{
	echo "<script language='javascript'>window.location='addques.php?sav=1'</script>";
}
}
}
			}
   else
 		echo "<script type='text/javascript'>window.location='../index.php'</script>";
		
 ?>
