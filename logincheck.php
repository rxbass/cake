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
				<li><a href="index.php" target="_self">Home</a></li>
				<li><a href="startquiz.php" target="_self">Take Quiz</a></li>
				<li><a href="status.php" target="_self">Candidates Status</a></li>
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
					  <td height="32" align="left" style="text-indent:40px;">&gt;&gt; <a href="status.php" class="style1">Candidate Status</a> </td>
					</tr>
			</table>
          </div>
		  <div class="questions">
				
			<p style=" font-family:'Trebuchet MS'; font-size:16px; text-indent:200px; font-weight:bold; color:#FFFFFF;">LOGIN STATUS</p>
			<table width="735" height="388" border="0">
              <tr>
                <td width="494" align="left" valign="top"><p style="text-indent:100px; font-family:'Trebuchet MS'; font-size:12px; color:#FFFFFF;"><?php
				
				if(isset($_POST['submit']))
				{
					 $email=$_POST['email'];
					  $pass=$_POST['pass'];
					
					  $a="select * from user_tables where email_id='$email' and password=md5('$pass')";
					$b=mysql_query($a);
					$c=mysql_num_rows($b);
					$d="select * from admin_table where email_id='$email' and password=md5('$pass')";
					$e=mysql_query($d);
					 $f=mysql_num_rows($e);
					if($c==1)
					{
						$_SESSION['name']=$_POST['email'];
						echo "<script language='javascript'>window.location='index1.php'</script>";
					}
					else if($f==1)
					{
						$_SESSION['name']=$_POST['email'];
						echo "<script language='javascript'>window.location='admin/index.php'</script>";
					}
					else
					{
						echo "INvalid email id or Password";
					}
				}
				?>
				</p>
                </td>
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