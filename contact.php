
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
	<style type="text/css"><!--
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
-->


	</style>
</head>
<body background="images/home.jpg" bgcolor="#ffffff" style="background-color: #ffffff">
<p>&nbsp;</p>

<table align="center" bgcolor="#004080" border="0" cellpadding="3" cellspacing="1" width="1300">
	<tbody>
		<tr>
			<td>
			<h1 align="center"><br />
			<font color="#ffffff">LA PRESIDENTIELLE</font></h1>

			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td bgcolor="#c0c0c0">
			<p align="center">&nbsp;<a class="navblack" href="index.php"><font size="3">Home</font></a>&nbsp; |&nbsp; 
				<a class="navblack" href="about.php"><font size="3">About Us</font>&nbsp;</a>&nbsp; |&nbsp; |&nbsp;
				<a class="navblack" href="contact.php"><font size="3">Contact Us</font>&nbsp;</a>&nbsp; |&nbsp; |&nbsp;
				<a class="navblack" href="catalogue.php"><font size="3">Catalogue</font></a>&nbsp; |&nbsp;
				<!-- <a class="navblack" href="Login.php"><font size="3">Login</font></a>&nbsp; |&nbsp; 
				<a class="navblack" href="Register.php"><font size="3">Register</font></a> -->
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a class="" href="logout.php"><b><font size="3">Logout</font></b></a>
                <b><?php echo htmlspecialchars($_SESSION["firstname"]); ?></b>
			</td>
		</tr>
		<tr>
			<td bgcolor="#ffffff">
			<table align="center" border="0" cellpadding="0" cellspacing="6" width="100%">
				<tbody>
					<tr>
						<td valign="top">
						<p align="left">&nbsp;&gt;</p>


<h2 class="about"><center>LA PRESIDENTIELLE</center></h2>


<center>
<h2 class="about">Contact Us:</h2>
<p>P.O.Box 0042</p>
<p>JohannesBurg</p>
<p>Johnson av, 96(Fourways)</p>
<p>Tel/Fax: 012 044 48756</p>
<a href="mailto:admin@schools.com">Click here to send us email</a>
<p>Facebook: La Presidentielle</p>
<p>Twitter:La PresidentielleSA</p>
<p class="more"></p>
</center>


						<p align="left">&nbsp;</p>

						<p align="left">&nbsp;</p>

						<p align="left">&nbsp;</p>

						<p align="left">&nbsp;</p>

						<p align="left">&nbsp;</p>

						<p align="left">&nbsp;</p>
					
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
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>


</body>
</html>
