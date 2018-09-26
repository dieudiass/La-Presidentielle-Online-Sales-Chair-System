<?php
require_once("config.php");
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
	
	header("location: login.php");
	exit;
}
?>
<!DocType HTML>
<html>
<head>
      <title> LA PRESIDENTIELLE </title>
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
			<p align="center">&nbsp;<a class="navblack" href="index.php"><font size="3">Home</font></a>&nbsp; |&nbsp; |&nbsp; 
				<a class="navblack" href="about.php"><font size="3">About Us</font>&nbsp;</a>&nbsp; |&nbsp; |&nbsp;
				<a class="navblack" href="contact.php"><font size="3">Contact Us</font>&nbsp;</a>&nbsp; |&nbsp; 
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
					
<center>
<h2 class="About">About Us</center></h2>
<p align="center">La Presidentielle specializes in selling office chairs.
We promise our customers to provide quality and comfortable chairs in their offices at satisfying prices. <br>
La Presidentielle, we all come to work everyday because we want to solve the biggest problem in offices. <br>
"Everyone is guessing".
INVENTORS do not know which chairs to build, how to monetize them, even what to price them at. <br>
ACUSTOMERS don't know where  to find good quality n comfortable chairs. <br>
Throughout the history of business, people use chairs in order to make important decisions. <br>
Our mission at LA PRESIDENTIELLE is to solve this office misery by providing the best office chairs. <br>
We had our customer's trust for 5 years of good service delivery. 
</p>
</center>

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
