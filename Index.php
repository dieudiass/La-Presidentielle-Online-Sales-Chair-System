<?php
require_once("config.php");
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
	
	header("location: login.php");
	exit;
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
	<title>LA PRESIDENTIELLE</title>
	<meta content="PageBreeze Free HTML Editor (http://www.pagebreeze.com)" name="GENERATOR" />
	<meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type" />
	<style type="text/css">a.navwhite:link { text-decoration: none; color: #ffffff; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navwhite:visited { text-decoration: none; color: #ffffff; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navwhite:hover { text-decoration: underline; color: #ffffff; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navblack:link { text-decoration: none; color: #000000; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navblack:visited { text-decoration: none; color: #000000; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navblack:hover { text-decoration: underline; color: #000000; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
	</style>
	<style type="text/css">
h1 { font-family: Arial, sans-serif; font-size: 30px; color: #004080;}
h2 { font-family: Arial, sans-serif; font-size: 18px; color: #004080;}

body,p,b,i,em,dt,dd,dl,sl,caption,th,td,tr,u,blink,select,option,form,div,li { font-family: Arial, sans-serif; font-size: 12px; }

/* IE Specific */
body, textarea {
  scrollbar-3dlight-color: #808080;
  scrollbar-highlight-color: #808080;
  scrollbar-face-color: #004080;
  scrollbar-shadow-color: #808080;
  scrollbar-darkshadow-color: #805B32;
  scrollbar-arrow-color: #000000;
  scrollbar-track-color: #F8EFE2;
}
/* END IE Specific */

	</style>
</head>
<body background="images/gate.png" bgcolor="#ffffff" style="background-color: #ffffff">
<p>&nbsp;</p>

<table align="center" bgcolor="#004080" border="0" cellpadding="3" cellspacing="1" width="1300">
	<tbody>
		<tr>
			<td>
			<h1 align="center"><br />
			<center><font color="#ffffff">LA PRESIDENTIELLE</font></h1></center>
            
			<p>&nbsp;</p>
			</td>
		</tr>



		<tr>
			<td bgcolor="#c0c0c0">
			<p align="center">|&nbsp; |&nbsp;<a class="navblack" href="index.php"><font size="3">Home</font></a>&nbsp; |&nbsp; |&nbsp; 
				<a class="navblack" href="about.php"><font size="3">About Us</font>&nbsp;</a>&nbsp; |&nbsp; 
				<a class="navblack" href="contact.php"><font size="3">Contact Us</font>&nbsp;</a>&nbsp; |&nbsp; 
				<a class="navblack" href="catalogue.php"><font size="3">Catalogue</font></a>&nbsp; |&nbsp; 
				<!-- <a class="navblack" href="Login.php"><font size="3">Login</font></a>&nbsp; |&nbsp; 
				<a class="navblack" href="Register.php"><font size="3">Register</font></a> -->
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a class="" href="logout.php"><b><font size="3">Logout</font></b></a>
                <b><?php echo htmlspecialchars($_SESSION["firstname"]); ?></b>
            </p>
			</td>
		</tr>
		<tr>
			<td bgcolor="#ffffff">
			<table align="center" border="0" cellpadding="0" cellspacing="6" width="100%">
				<tbody>
					<tr>
						<td valign="top">
						<h2 align="left"><center>Welcome</center></h2>

						

						
						<p align="left">&nbsp;</p>
						

						<p align="left">&nbsp;</p>
                        <p align="center">&nbsp;<img border="0" height="400" src="images/IMG-20160317-WA0034.jpg" style="width: 728px; height: 200px" width="200" />

						<p align="left">&nbsp;</p>

						<p align="left">&nbsp;</p>

						<p align="left">&nbsp;</p>
</td>
						<td valign="top" width="150">
						<table align="center" bgcolor="#004080" border="0" cellpadding="5" cellspacing="1" style="width: 195px; height: 272px" width="195">
							<tbody>
								<tr>
									<td>
									<p align="center"><span style="color: #FFFFFF"><span style="font-family: comic sans ms,cursive"><strong><font size="+0"><span style="background-color: #004080">La Presidentielle</span></font></strong></span></span></p>
									</td>
                                                                     
								</tr>
                                                                
								<tr>
									<td bgcolor="#D3D3D3">
									<p>&nbsp;</p>
                                                                        
									<p>&nbsp; <marquee><img border="0" height="752" src="images/IMG-20160317-WA0021.jpg" style="width: 158px; height: 181px" width="1024" /></marquee></p>
                                                                        
									<p>&nbsp;</p>

									<p><font color="Black"><blink>Buy 1 and get 1 for free</blink></font></p>

									<p><font color="Black">from our website</font> <a class="0" href="Order.html">dido.co.za</a></p>

									<p>&nbsp;</p>

									<p>&nbsp;</p>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
				
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>



	</tbody>
<a href="adword.jpg"/></a>
</table>
<div>
<footer><center><img src="images/twit.jpg"/ height="60" width="100">
<img src="images/index.jpg"/ height="60" width="100"><p><a href="https://www.facebook.com"></center>
</footer>
</div>
<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>


</html>
