<html>
<head>
<link rel="stylesheet" href="css/quiz.css">
<script type="text/javascript">
function validate()
{
	var a=document.getElementById('name').value;
	var b=document.getElementById('email').value;
	var a=document.getElementById('pass').value;
	var b=document.getElementById('age').value;
	var a=document.getElementById('qualify').value;

	
	if(a=='')
	{
		alert('Please Enter your name');
		return false;
	}
	else if(b=='')
	{
		alert('Please Enter your email id');
		return false;
	}
	else if(c=='')
	{
		alert('Please Enter your password');
		return false;
	}
	else if(d=='')
	{
		alert('Please Enter your age');
		return false;
	}
	else if(e=='')
	{
		alert('Please Enter your qualification');
		return false;
	}
	else
	return true;


}
function nam()
{
   
   var af=document.getElementById('name').value;
   var bf=/^[A-Za-z]+$/;
        
   if(!af.match(bf))
	  {
	    document.getElementById('n').innerHTML="please enter characters only";
	  }
    else 
	{
	    document.getElementById('n').innerHTML=" ";
	 }
}
 function qua()
{
   
   var af=document.getElementById('qualify').value;
   var bf=/^[A-Za-z]+$/;
        
   if(!af.match(bf))
	  {
	    document.getElementById('q').innerHTML="please enter characters only";
	  }
    else 
	{
	    document.getElementById('q').innerHTML=" ";
	 }
} 

function ag()
{
   
   var al=document.getElementById('age').value;
   var bl=/^[0-9]+$/;
   
   
   if(al=="")
{
    document.getElementById('a').innerHTML="please fill empty fields";
}  
   else if(!al.match(bl))
	  {
	    document.getElementById('a').innerHTML="please enter numbers only";
	  }
    else {
	    document.getElementById('a').innerHTML=" ";
	 }
}

function pas()
{
   
   var ap=document.getElementById('pass').value;
   var bp=/^[A-Za-z0-9] +$/;
   
     
    if(ap.length<6)
	  {
	    document.getElementById('p').innerHTML="please enter above 6 characters";
	  }
    
    else {
	    document.getElementById('p').innerHTML=" ";
	 }
}



function emai()
{
var bse=/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/;
var ase=document.getElementById('email').value;

if(ase=="")
{
    document.getElementById('e').innerHTML="please fill empty fields";
}  
else if(!ase.match(bse))
{
document.getElementById('e').innerHTML="Please enter valid email";
}
else
	{
	    document.getElementById('e').innerHTML=" ";
	 }

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
					  <td height="32" align="left" style="text-indent:40px;">&gt;&gt; <a href="status.php" class="style1">Candidate Status</a> </td>
					</tr>
			</table>
		       
		  </div>
		 <div class="questions">
				
			<p style=" font-family:'Trebuchet MS'; font-size:16px; text-indent:200px; font-weight:bold; color:#FFFFFF;">PLEASE REGISTER HERE </p>
			<table width="735" height="388" border="0">
              <tr>
                <td width="494" align="left" valign="top"><p style="text-indent:100px; font-family:'Trebuchet MS'; font-size:12px; color:#FFFFFF;"><table width="359" height="388" border="0" align="center">
			<form action="registercheck.php" method="post" onSubmit="return validate()">
              <tr>
                <td class="table" width="144" align="left" valign="top">
                <tr>
                  <td class="table">Name</td>
                    <td width="581" class="table"><input type="text" name="name" id="name" onblur="nam()" /></td>
                  </tr><tr><td class="table"></td>
                  <td class="table"><div id="n"></div></td></tr>
                  <tr>
                    <td class="table">Email ID</td>
                    <td class="table"><input type="text" name="email" id="email" onblur="emai()" /></td>
                  </tr><tr><td class="table"></td>
                  <td class="table"><div id="e"></div></td></tr>
                  <tr>
                    <td class="table">Password</td>
                    <td class="table"><input type="password" name="pass" id="pass" onblur="pas()" /></td>
                  </tr><tr><td class="table"></td>
                  <td class="table"><div id="p"></div></td></tr>
                  <tr>
                    <td class="table">Age</td>
                    <td class="table"><input type="text" name="age" id="age" onblur="ag()" /></td>
                  </tr><tr><td class="table"></td>
                  <td class="table"><div id="a"></div></td></tr>
                  <tr>
                    <td class="table">Qualification</td>
                    <td class="table"><input type="text" name="qualify" id="qualify" onblur="qua()" /></td>
                  </tr><tr><td class="table"></td>
                  <td class="table"><div id="q"></div></td></tr>
                  <tr>
                    <td class="table"></td>
                    <td class="table"><input type="submit" name="submit" value="register"  /></td>
                  </tr>
		      </form>
              </table>   </p>
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