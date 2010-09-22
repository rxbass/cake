<?php

include("config.php");

   $uid=$_GET['uid'];
    $quesid=$_GET['quesid'];
    $ansid=$_GET['ansid'];
   $aa2="select answer from quiz_answers where qid=$quesid";
   $bb2=mysql_query($aa2);
   $cc2=mysql_fetch_array($bb2);
    $answer=$cc2['answer'];
   if($ansid==$answer)
   {
   $mark=10;
   }
   else
   {
    $mark=0;
   }
  $aa="insert into user_answers(user_id,marks) values($uid,$mark)";
    $ba=mysql_query($aa) or die(mysql_error());

    
  if($ba==true)
    {
		
	 $quesid++;
	 $a="select COUNT(*) from quiz_questions";
	  $b=mysql_query($a);
	  $c=mysql_fetch_array($b);
	  $tot=$c[0];
	  if($tot<$quesid )
	  {
      echo "<script language='javascript'>window.location='thanks.php'</script>";
		}
		else
		{
			echo "<script language='javascript'>window.location='quiz.php?qid=$quesid&uid=$uid'</script>";
		}
    } 



?> 