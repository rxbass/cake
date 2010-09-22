<?php
session_start(); 
 include("../config.php");
 if(isset($_SESSION['name']))
{
  
 if(isset($_GET['sav']))
 {
 	echo "<script language='javascript'>alert('Your New Has Been Saved')</script>";
 }
  if(isset($_GET['wrong']))
 {
 	echo "<script language='javascript'>alert('OLd password doesnt match')</script>";
 }
 ?>
<html>
<head>
<link rel="stylesheet" href="../css/quiz.css">
<script type="text/javascript">
function pas()
{
	var a=document.getElementById('newpass').value;
	var b=document.getElementById('conpass').value;
if(a!=b)
	{
		alert("Passwords Mismatch");
		return false;
	}
	else
	return true;
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
	else if(a!=b)
	{
		alert("Passwords Mismatch");
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
                <td width="494" align="left" valign="top"><p style="text-indent:100px; font-family:'Trebuchet MS'; font-size:14px; color:#FFFFFF;">
				<table width="256" height="114" align="center">
				<form action="change.php" method="post" onSubmit="return validate()">
				<tr><td class="table">Old Password</td>
				<td class="table"><input type="password" name="pass" id="pass" /></td></tr>
				<tr><td class="table">New Password</td>
				<td class="table"><input type="password" name="newpass" id="newpass" /></td></tr>
				<tr><td class="table">Confirm Password</td>
				<td class="table"><input type="password" name="conpass" id="conpass" onBlur="pas()" /></td></tr>			
				<tr><td class="table"></td>
				<td class="table"><input type="submit" name="submit" value="save settings" /></td></tr>
				</form>
				</table>
				
				
				</p>
                </td>
                <td width="225" align="left" valign="top"><img src="../images/online.png"   width="226" height="213" /></td>
              </tr>
            </table>
			<?php
						}
   else
 		echo "<script type='text/javascript'>window.location='../index.php'</script>";
		
 ?>
			</div>
			
		</div>
		
  <div class="footer">
		<hr color="#FFFFFF"  />
		
	<p class="bottom-text" style="text-indent:450px;">all rights reserved.&copy; PHOTON INFOTECH</p></div>

</div>
</body>
</html>