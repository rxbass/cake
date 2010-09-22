<?php
session_start(); 
 include("../config.php");
  if(isset($_GET['sav']))
 {
 	echo "<script language='javascript'>alert('Your Question Has Been Deleted')</script>";
 }
 ?>
<html>
<head>
<link rel="stylesheet" href="../css/quiz.css">
<style type="text/css">
.nebk {
	font-size: 12px;
	color: #CCCCCC;
	text-decoration: none;
	font-family: "Trebuchet MS";
	font-weight: bold;
	text-align: right;
}
.nebk:hover {
	font-size: 12px;
	text-decoration:none;
	color:#0066FF;
	font-family: "Trebuchet MS";
	font-weight: bold;
	text-align: right;
}
</style>
<script type="text/javascript">
function pas()
{
if(a!=b)
	{
		alert("Passwords Mismatch");
		return false;
	}
	}
	
function validate()
{
	var a=document.getElementById('newpass').value;
	var b=document.getElementById('conpass').value;
	
	
	if(a=='')
	{
		alert('Please Enter your old password');
		return false;
	}
	else if(b=='')
	{
		alert('Please Enter your new password');
		return false;
	}
	else
	return true;
}

</script>
<style type="text/css">
<!--
.style2 {
	color: #FFFFFF;
	font-size: 12px;
}
</style>
</head>
<body>
<div class="main">
	
		<div class="header">
		
			<div class="logo">
			</div>
			
			<div class="title">
			  <p style="text-indent:50px;">ONLINE QUIZ EXAM </p>
		    </div>
			
		</div>
		
		<div id="nav-menu">
			<ul>
				<li><a href="changepassword.php">Settings</a></li>
				<li><a href="questions.php?pag=0">Questions</a></li>
				<li><a href="status.php">Candidates Status</a></li>
			</ul>
			
		</div>
		
		<div class="content">
		
		  <div class="side_menu">
				<table class="table" width="247" height="154" >
					<tr>
					  <td height="39" colspan="2" style="font-size:16px; text-align:center">MENU</td>
					</tr>
					<tr>
					  <td height="27" align="left" style="text-indent:40px;">&gt;&gt; <a href="index.php" target="_self" class="style1">Home</a> </td>
				  </tr>
					<tr>
					  <td align="left" style="text-indent:40px;">&gt;&gt; <a href="changepassword.php" target="_self" class="style1">Settings</a> </td>
					</tr>
					<tr>
					  <td height="27" align="left" style="text-indent:40px;">&gt;&gt; <a href="questions.php?pag=0" target="_self" class="style1">Questions </a></td>
				  </tr>
					<tr>
					  <td height="27" align="left" style="text-indent:40px;">&gt;&gt; <a href="logout.php" target="_self" class="style1">Logout</a> </td>
					</tr>
			</table>
          </div>
		  <div class="questions">
				
			<p style=" font-family:'Trebuchet MS'; font-size:16px; text-indent:200px; font-weight:bold; color:#FFFFFF;">Change Password -  Admin Panel </p>
			<table width="735" height="388" border="0">
              <tr>
                <td width="494" align="left" valign="top"><p style="font-family:'Trebuchet MS'; font-size:14px; color:#FFFFFF;">
				
				
				<?php
				     $az="select count(*) from quiz_questions";
			   $ax=mysql_query($az);
			   $ac=mysql_fetch_array($ax);
			   $rec_limit=2;
			   $rec_count=$ac[0];			  
			  $pag = $_REQUEST['pag'];			 
				$rec_start = $rec_limit*$pag;			
              $i="select * from quiz_questions limit $rec_start,$rec_limit";
			  $control1 = $rec_start+$rec_limit;
			  $control2 = $rec_start-$rec_limit;
      $j=mysql_query($i);
	  
     while ($k=mysql_fetch_array($j))
	{
         
   
		echo "<div class='table'>Q ".$k['qid']." ".$k['question']."<br /></div>";
		echo "<div class='table'>Options "." :"."<br />".$k['option1']."<br />".$k['option2']."<br />".$k['option3']."<br />".$k['option4']."<br /></div>";
		echo "<div class='table'><input type='checkbox' name='che[]' value='".$k[qid]."' /></div>";
	}
	$bpag=$pag-1;
	$npag=$pag+1;	
	if($control1 < $rec_count)
	{
		echo "<a href='questions.php?pag=$npag'  class='nebk'>||>>next|</a>";
	}
	if($control2 >= 0)
	{
		echo "<a href='questions.php?pag=$bpag' class='nebk'>|>>back||</a>";
	}
	
				?>
				
				  </p>
                </td>
                <td width="225" align="left" valign="top"><img src="../images/online.png"   width="226" height="213" /></td>
              </tr>
            </table>
			
			</div>
			
		</div>
		
  <div class="footer">
		<hr color="#FFFFFF"  />
		
	<p class="bottom-text" style="text-indent:450px;">all rights reserved.&copy; PHOTON INFOTECH</p></div>

</div>
</body>
</html>