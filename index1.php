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
				<li><a href="status.php" target="_self">Your  Status</a></li>
			</ul>
			
		</div>
		
		<div class="content">
		
		  <div class="side_menu">
				<table class="table" width="247" height="136" >
					<tr>
					  <td height="39" colspan="2" style="font-size:16px; text-align:center">MENU</td>
					</tr>
					<tr>
					  <td height="27" align="left" style="text-indent:40px;">&gt;&gt; <a href="index1.php" target="_self" class="style1">Home</a> </td>
				  </tr>
					<tr>
					  <td align="left" style="text-indent:40px;">&gt;&gt; <a href="status.php" target="_self" class="style1">Your Status</a></td>
					</tr>
					<tr>
					  <td height="32" align="left" style="text-indent:40px;">&gt;&gt; <a href="logout.php" target="_self" class="style1">Logout</a> </td>
					</tr>
			</table>
          </div>
		  <div class="questions">
				
			<p style=" font-family:'Trebuchet MS'; font-size:16px; text-indent:200px; font-weight:bold; color:#FFFFFF;"><?php
			 $f="select * from user_tables where email_id='$_SESSION[name]'";
			 $g=mysql_query($f);
			 $h=mysql_fetch_array($g);
			echo "Welcome"." "."  ". $h['name']." "."!" ; 
			 
			?></p>
			<table width="735" height="388" border="0">
              <tr>
                <td width="494" align="left" valign="top"><p style="text-indent:100px; font-family:'Trebuchet MS'; font-size:12px; color:#FFFFFF;"><strong>Online quizzes</strong> are a popular form of entertainment for web  surfers. Online quizzes are generally free to play and for  entertainment purposes only though some online quiz websites offer  prizes. Websites feature online quizzes on many subjects.</p>
                  <p style="text-indent:100px; font-family:'Trebuchet MS'; font-size:12px; color:#FFFFFF;">The largest knowledge-based quiz website online in terms of both traffic and quizzes available is FunTrivia.</p>
                  <p style="text-indent:100px; font-family:'Trebuchet MS'; font-size:12px; color:#FFFFFF;">One popular type of online quiz is a personality quiz or relationship quiz which is similar to what can be found in many women's or teen magazines.</p></td>
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