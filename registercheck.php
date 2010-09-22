<?php
include("config.php");
?>
<html>
<head>
<link rel="stylesheet" href="css/quiz.css">
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
				
			<p style=" font-family:'Trebuchet MS'; font-size:16px; text-indent:200px; font-weight:bold; color:#FFFFFF;">CHECKING REGISTER DETAILS </p>
			<table width="735" height="388" border="0">
              <tr>
                <td width="494" align="left" valign="top"><p style="text-indent:100px; font-family:'Trebuchet MS'; font-size:12px; color:#FFFFFF;">
                  </p>
                 <?php
 
 
if(isset($_POST['submit']))
{

   $name=$_POST['name'];
   $emailid=$_POST['email'];
   $password=$_POST['pass'];
    $age=$_POST['age']; 
    
   
   $qualify=$_POST['qualify'];
  

  
 echo $a="insert into user_tables(name,email_id,password,age,qualification) values('$name','$emailid',md5('$password'),'$age','$qualify')";
  $b=mysql_query($a) or die(mysql_error()) ;
  
	  if($b==true)
	      {
		  $aa="select uid from user_tables where email_id='$emailid'";
		  $bb=mysql_query($aa);
		  $cc=mysql_fetch_array($bb);
		  $uid=$cc[uid];
		echo "Congrats!!! You have been Registered Successfully in Photon Infotech Quiz.....";
		
		echo "<script language='javascript'>window.location='quiz.php?uid=$uid&qid=1'</script>";
	      }
		  
		  
	
}
?>
				
				
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