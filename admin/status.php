<?php
session_start();
 if(isset($_SESSION['name']))
{
include("..\config.php");
?>
<html>
<head>
<link rel="stylesheet" href="../css/quiz.css">
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

</script></head>
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
				<table class="table" width="247" height="136" >
					<tr>
					  <td height="39" colspan="2" style="font-size:16px; text-align:center">MENU</td>
					</tr>
					<tr>
					  <td height="27" align="left" style="text-indent:40px;">&gt;&gt; <a href="#" target="_self" class="style1">Home</a> </td>
				  </tr>
					<tr>
					  <td align="left" style="text-indent:40px;">&gt;&gt; <a href="../logout.php" target="_self" class="style1">Logout</a> </td>
					</tr>
					<tr>
					  <td height="32" align="left" style="text-indent:40px;">&gt;&gt; <a href="changepassword.php" target="_self" class="style1">Settings</a></td>
					</tr>
			</table>
          </div>
		  <div class="questions">
				
			<p style=" font-family:'Trebuchet MS'; font-size:16px; text-indent:200px; font-weight:bold; color:#FFFFFF;">CANDIDATE STATUS </p>
			<table width="735" height="388" border="0">
              <tr>
                <td width="494" align="left" valign="top"><p style="text-indent:100px; font-family:'Trebuchet MS'; font-size:12px; color:#FFFFFF;">
				<table class='table' border="1" width='300'><th>Name</th><th>Percentage</th><th>Status</th>
				<?php
				$a="select distinct uid,percentage,status from user_status";
				$b=mysql_query($a);
				
				while($c=mysql_fetch_array($b))
				{
					 $userid=$c['uid'];
					$aa="select * from user_tables where uid=$userid";
					$bb=mysql_query($aa);
					$cc=mysql_fetch_array($bb);
					$name=$cc['name'];
				echo "<tr><td> $name</td><td>$c[percentage]</td><td>$c[status]</td></tr>";
				
				
				
				
						
				}
				
				?>
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