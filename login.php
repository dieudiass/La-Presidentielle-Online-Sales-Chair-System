<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$fname = $password = "";
$fname_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["fname"]))){
        $fname_err = 'Please enter firstname.';
    } else{
        $fname = trim($_POST["fname"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($fname_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, firstname, password FROM account WHERE firstname = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_fname);
            
            // Set parameters
            $param_fname = $fname;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $fname, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["firstname"] = $fname;
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $fname_err = 'No account found with that firstname.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
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
			<p align="center">&nbsp;<a class="navblack" href="index.php"><font size="3">Home</font></a>&nbsp; |&nbsp; |&nbsp; 
				<a class="navblack" href="about.php"><font size="3">About Us</font>&nbsp;</a>&nbsp; |&nbsp; |&nbsp;
				<a class="navblack" href="contact.php"><font size="3">Contact Us</font>&nbsp;</a>&nbsp; |&nbsp; 
				<a class="navblack" href="catalogue.php"><font size="3">Catalogue</font></a>&nbsp; |&nbsp; 
				<a class="navblack" href="Login.php"><font size="3">Login</font></a>&nbsp; |&nbsp; 
				<a class="navblack" href="Register.php"><font size="3">Register</font></a></p></font> 
			</td>
		</tr>
		<tr>
			<td bgcolor="#ffffff">
			<table align="center" border="0" cellpadding="0" cellspacing="6" width="100%">
				<tbody>
					<tr>
						<td valign="top">
<center>
<table width="700" height="200" border="3" bgcolor="white"
cellpadding="1" cellspacing="1">
<tr valign="top" align="left">
<td><h1>Login</h1>

 <div class="panel" id="contactus">
			<form id="RegisterUserForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
 	<fieldset>
         <p>
         	<div <?php echo (!empty($fname_err)) ? 'has-error' : ''; ?> class="" >
            <label for="name">first name</label>
            <input id="name" name="fname" type="text" class="text" value="" />
            <span id="name" color="#808080"> <?php echo $fname_err ?> </span>
            </div>
         </p>
        
        
         <p>
         	<div <?php echo (!empty($password_err)) ? 'has-error' : ''; ?> class="">
            <label for="password">Password</label>
            <input id="password" name="password" class="text" type="password" />
            <span id="name" color="#808080"> <?php echo $password_err ?> </span>
            </div>
         </p>
        
         <!-- <p><input id="rememberme" name="rememberme" type="checkbox" />
            <label for="acceptTerms">
               Remember Me
            </label>
         </p> -->
        
         <p>
            <button id="login" type="submit">login</button> &nbsp; &nbsp; &nbsp;
            <a id="login" href="register.php" type="submit">register</a>
         </p>
 	</fieldset>

 </form></td>
</tr>
</center>

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
