<?php
session_start();
include("config.php");
?>
<html>
<head>
<link rel="stylesheet" href="css/quiz.css">
<script type="text/javascript">
function validate()
{
	var a=document.getElementById('email').value;
	var b=document.getElementById('pass').value;
	
	if(a=='')
	{
		alert('Please Enter your email id');
		return false;
	}
	else if(b=='')
	{
		alert('Please Enter your password');
		return false;
	}
	else
	return true;
}

</script>
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
				<li><a href="index.php">Home</a></li>
				<li><a href="startquiz.php">Take Quiz</a></li>
				<li><a href="status.php">Candidates Status</a></li>
			</ul>
			
		</div>
		
		<div class="content">
		
		  <div class="side_menu">
				<table class="table" width="247" height="136" >
					<tr>
					  <td height="39" colspan="2" style="font-size:16px; text-align:center">MENU</td>
					</tr>
					<tr>
					  <td height="27" align="left" style="text-indent:40px;">&gt;&gt; <a href="index.php" target="_self" class="style1">Home</a> </td>
				  </tr>
					<tr>
					  <td align="left" style="text-indent:40px;">&gt;&gt; <a href="startquiz.php" target="_self" class="style1">Take Quiz</a> </td>
					</tr>
					<tr>
					  <td height="32" align="left" style="text-indent:40px;">&gt;&gt; <a href="index.php" class="style1">Candidate Status</a> </td>
					</tr>
			</table>
		        <table class="table" width="246" height="122" >
				<form action="logincheck.php" method="post" onSubmit="return validate()">
                  <tr>
                    <td height="39" colspan="2" style="font-size:16px; text-align:center"> LOGIN AREA </td>
                  </tr>
                  <tr>
                    <td height="35" align="left" valign="middle">Email ID</td>
                    <td><input type="text" name="email" id="email"  /></td>
                  </tr><tr><td></td><td><div id="p"></div></td></tr>
                  <tr>
                    <td height="38">Password</td>
					  <td><input type="password" name="pass" id="pass"  /></td>
                  </tr><tr><td></td><td><div id="p"></div></td></tr>
				  <tr><td></td><td><input type="submit" name="submit" value="Login" /></td></tr>
                </form>
			</table>
		  </div>
			<div class="questions">
				
			<p style=" font-family:'Trebuchet MS'; font-size:16px; text-indent:200px; font-weight:bold; color:#FFFFFF;">About Online Quiz</p>
			<table width="735" height="388" border="0">
              <tr>
                <td width="494" align="left" valign="top"><p style="text-indent:100px; font-family:'Trebuchet MS'; font-size:12px; color:#FFFFFF;">&nbsp;</p>
                  <p style="text-indent:100px; font-family:'Trebuchet MS'; font-size:12px; color:#FFFFFF;"><strong>Thanks for attending online quiz in photon infotech....You will be contacted shortly ... </strong></p>
                  <p style="text-indent:100px; font-family:'Trebuchet MS'; font-size:12px; color:#FFFFFF;"><strong>Please remember to login to see your status... </strong></p></td>
                <td width="225" align="left" valign="top"><img src="images/online.png"   width="226" height="213" /></td>
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