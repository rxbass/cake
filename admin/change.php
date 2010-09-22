<?php
session_start(); 
 include("../config.php");
 
 if(isset($_POST['submit']))
 {
  $newpas=$_POST['newpass'];

echo $a="update admin_table set password=md5('$newpas') where email_id='$_SESSION[name]'";
$b=mysql_query($a);
if($b==1)
{
	echo "<script language='javascript'>window.location='changepassword.php?sav=1'</script>";
}

else
{
	echo "<script language='javascript'>window.location='changepassword.php?wrong=1'</script>";
}
}
 ?>
