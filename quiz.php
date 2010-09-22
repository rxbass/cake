<?php
include("config.php");

?>
<html>
<head>
<link rel="stylesheet" href="css/quiz.css">
<script type="text/javascript">
function answer(str)
{


var a=document.getElementById('userid').value;
var b=document.getElementById('quesid').value;

window.location='quiz1.php?uid='+a+'&ansid='+str+'&quesid='+b;

}
</script>
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
					  <td height="32" align="left" style="text-indent:40px;">&gt;&gt; <a href="status.php" target="_self" class="style1">Candidate Status</a> </td>
					</tr>
			</table>
          </div>
		  <div class="questions">
				
			<p style=" font-family:'Trebuchet MS'; font-size:16px; text-indent:200px; font-weight:bold; color:#FFFFFF;">About Online Quiz</p>
			<table width="735" height="388" border="0">
              <tr>
                <td align="left" valign="top"><p style="font-family:'Trebuchet MS'; font-size:12px; color:#FFFFFF;">
				
				<?php
				$uid=$_GET['uid'];
				$qid=$_GET['qid'];
				echo "<form><input type='hidden' name='userid' id='userid' value='".$uid."'</form>";
				$a="select * from quiz_questions where qid=$qid";
				$b=mysql_query($a);

				$c=mysql_fetch_array($b);
				echo "<table>";
				echo "<th>Q .".$c['qid'].". ".$c['question']."</th>";
				echo "<form><input type='hidden' name='quesid' id='quesid' value='".$c['qid']."'</form>";
				echo "<tr><td style='font-size:12px;color:#FFFFFF;'><input type='radio'  id='ans' name='ans' value='1' onClick='answer(this.value)' />".$c['option1']."</td></tr>";
				echo "<tr><td style='font-size:12px;color:#FFFFFF;'><input type='radio' name='ans'  id='ans' value='2' onClick='answer(this.value)' />".$c['option2']."</td></tr>";
				echo "<tr><td style='font-size:12px;color:#FFFFFF;'><input type='radio' name='ans'  id='ans' value='3' onClick='answer(this.value)' />".$c['option3']."</td></tr>";
				echo "<tr><td style='font-size:12px;color:#FFFFFF;'><input type='radio' name='ans'  id='ans' value='4' onClick='answer(this.value)' />".$c['option4']."</td></tr>";
								
			?>	
				
				</p>                </td>
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