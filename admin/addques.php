<?php
session_start(); 
 include("../config.php");
 if(isset($_SESSION['name']))
{
  
 if(isset($_GET['sav']))
 {
 	echo "<script language='javascript'>alert('Your Question Has Been Added')</script>";
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
				
			<p style=" font-family:'Trebuchet MS'; font-size:16px; text-indent:200px; font-weight:bold; color:#FFFFFF;">Add Question -  Admin Panel </p>
			<table width="735" height="388" border="0" class="table">
              <tr>
                <td width="494" align="left" valign="top"><p style="font-family:'Trebuchet MS'; font-size:14px; color:#FFFFFF;">
				<form action="add.php" method="post">
				<table width="482">
				  <tr class="table">
			      <td width="145">Enter Question</td><td width="325"><textarea cols="30" rows="3" name="ques" ></textarea></td></tr>
				  <tr class="table">
			      <td>Enter Option1</td><td><input type="text" name="op1" id="op1" /></td></tr>
				  <tr class="table">
			      <td>Enter Option2</td><td><input type="text" name="op2" id="op2" /></td></tr>
				  <tr class="table">
			      <td>Enter Option3</td><td><input type="text" name="op3" id="op3" /></td></tr>
				  <tr class="table">
			      <td>Enter Option4</td><td><input type="text" name="op4" id="op4" /></td></tr>
				   <td>Enter Answer</td><td><input type="text" name="ans" id="ans" /></td></tr>
				  <tr><td></td><td><input type="submit" name="submit" value="ADD" /></td></tr>
				  </table>
				</form>
				
				
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