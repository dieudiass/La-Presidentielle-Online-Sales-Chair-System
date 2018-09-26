<?php 
require_once("config.php");
$firstname = $lastname = $email = $password = $repassword = "";
$firstname_err = $lastname_err = $email_err = $password_err = $repassword_err = "";
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	# code...
	if (empty(trim($_POST["fname"]))) {
		# code...
		$firstname_err = "Please Enter Firstname";
	} else { 
		$sql = "SELECT id from account where firstname = ? ";
		if ($stmt = $mysqli->prepare($sql)) {
			
			$stmt->bind_param("s", $param_firstname);
			$param_firstname = trim($_POST["fname"]);
			if ($stmt->execute()) {
				if ($stmt->num_rows == 1) {
					# code...
					$firstname_err = "name exist";
				} else {
					$firstname = trim($_POST["fname"]);
				}
			} else {
			echo"something wrong";
		}
	}
	$stmt->close();
}

    if (empty(trim($_POST["lname"]))) {
    	
    	$lastname_err = "Please Enter Lastname";
    } else {
    	$sql = "SELECT id from account where lastname = ?";
    	if ($stmt = $mysqli->prepare($sql)) {
    		# code...

    		$stmt->bind_param("s", $param_lastname);
    		$param_lastname = trim($_POST["lname"]);
    		if ($stmt->execute()) {
    		    $stmt->store_result();
    			if ($stmt->num_rows == 1) {
    				
    				$lastname_err = "lastname exist";
    			} else {
    				$lastname = trim($_POST["lname"]);
    			}
    		}
    	} else {
    		echo "something wrong ";
    	}
    	$stmt->close();
    }

    /*if (empty(trim($_POST["email"])) != "") {
    	# code...
    	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
    	$email = filter_var($email, FILTER_VALIDATE_EMAIL);
    	$email = trim($_POST["email"]);
    	$email_err = "Invalid Email";
               if (empty(trim($_POST["email"]))) {
               	# code...
               	$email_err = "Please Enter Email";
               }
    } else {
    	$sql = "SELECT id from users where email = ?";
    	if ($stmt = $mysqli->prepare($sql)) {
    		
    		$stmt->bind_param("s", $param_email);
    		$param_email = trim($_POST["email"]);
    		if ($stmt->execute()) {
    			
    			$stmt->store_result();
    			if ($stmt->num_rows == 1) {
    				
    				$email_err = "Email exists";
    			}
    		}	
    }
    $stmt->close();
}*/
    if (empty(trim($_POST["email"]))) {
    	# code...
    	$email_err = "Please Enter Email";
    } else {
    	
    	$sql = "SELECT id from account where email = ?";
    	if ($stmt = $mysqli->prepare($sql)) {
    		
    		$stmt->bind_param("s", $param_email);
    		$param_email = trim($_POST["email"]);
    		if ($stmt->execute()) {
    			
    			$stmt->store_result();
    			if ($stmt->num_rows == 1) {
    				
    				$email_err = "Email exists";
    			} else {
    				
    			
    				$email  = trim($_POST["email"]);
    				
    			} 
    		} 
    	} else {
    			echo "Someting wrong";
    		}
    		$stmt->close();
    }

    if (empty(trim($_POST["password"]))) {
     	# code...
     	$password_err = "Please Enter password";
     } elseif(strlen(trim($_POST["password"])) < 6) {
     	$password_err = "password should be 6 or more characters";
     } else {
     	$password = trim($_POST["password"]);
     }
    

     if (empty(trim($_POST["repassword"]))) {
     	# code...
     	$repassword_err = "Please Enter Confirm password";
     } else {
     	$repassword = trim($_POST["repassword"]);
     	if ($password != $repassword) {
     	# code...
     	$repassword_err = "password doesn't match";
     }
 }

 if (empty($firstname_err) && empty($lastname_err) && empty($password_err)) {
 	# code...
 	$sql = "INSERT into account (firstname, lastname, email, password) values (?,?,?,?)";
 	if ($stmt = $mysqli->prepare($sql)) {
 		# code...
 	$stmt->bind_param("ssss", $param_firstname, $param_lastname, $param_email, $param_password);
    $param_firstname = $firstname;
    $param_lastname = $lastname;
    $param_email = $email;
    $param_password = password_hash($password, PASSWORD_DEFAULT);
 	
 	if ($stmt->execute()) {
 		# code...
 		header("location:login.php");
 	} else {
 		echo "someting wrong";
 	   }
    
 	}
 	
$stmt->close();
 }

$mysqli->close();

}
/*$Server = "localhost";
$Username = "root";
$Password = "";
$DB = "presidentielle";
$conn = mysql_connect($Server, $Username, $Password);
if(!$conn) {
	die ("Connection Problem. Please Try Again. ". mysql_error());
}

$db_selected = mysql_select_db($DB, $conn);

if(!$db_selected){
	die("Connect select db : " . mysql_error());
} 

if(isset($_Post['submit'])){
	$fname = $_Post['fname'];
	$lname = $_Post['lname'];
    $midname = $_Post['midname'];
    $tel = $_Post['tel'];
    $streetname = $_Post['streetname'];
    $houseno = $_Post['houseno'];
    $city = $_Post['city'];
    $suburb = $_Post['suburb'];
    $province = $_Post['province'];	
	$postno = $_Post['postno'];
	$country = $_Post['country'];
	$email = $_Post['email'];
	$password = $_Post['password'];
	$repassword = $_Post['re-password'];
	
	$sql = "insert into person (Firstname, Lastname, Middlename, Phone, Streetname, HouseNo, City, Suburb, Province, PostalCode, Country, Email, Password, RePassword) values ('$fname', '$lname', '$midname', '$tel', '$streetname', '$houseno', '$city', '$suburb', '$province', '$postno', '$country', '$email', '$password', '$repassword')";
    mysql_query($sql);
    echo "<script>Person added successfully! </script>";*/

	
	
	
// } 
//$sql1 = "insert into product values (4, 'Orange')";
?>
<!DOCTYPE HTML>
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
			<p align="center">&nbsp;<a class="navblack" href="HomeP.php"><font size="3">Home</font></a>&nbsp; |&nbsp; |&nbsp; <a class="navblack" href="about.php"><font size="3">About Us</font>&nbsp;</a>&nbsp; |&nbsp; |&nbsp;<a class="navblack" href="contact.php"><font size="3">Contact Us</font>&nbsp;</a>&nbsp; |&nbsp; <a class="navblack" href="catalogue.php"><font size="3">Catalogue</font></a>&nbsp; |&nbsp; <a class="navblack" href="Login.php"><font size="3">Login</font></a>&nbsp; |&nbsp; <a class="navblack" href="Register.php"><font size="3">Register</font></a></p></font> 
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
<td><h1>Register</h1>

 <div class="panel" id="contactus">

 <form id="OrderUserForm" name="submit" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="Post">
 	<fieldset>
         <p>
         <div class="<?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
            <label for="Fname">First Name</label>
            <input id="fname" name="fname" type="text" class="text" value="" />
            <span><?php echo $firstname_err; ?></span>
        </div>
         </p>
		 
        <p>
        	<div class="<?php echo (!empty($lastname_err)) ? 'has-error' : ''; ?>">
            <label for="Lname">Last Name</label>
            <input id="lname" name="lname" type="text" class="text" value="" />
            <span><?php echo $lastname_err; ?></span>
        	</div>
            
         </p>
        
         <p>
         	<div class="<?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" class="text" value="" />
            <span><?php echo $email_err; ?></span>
         	</div>
         </p>
        
         <p><div class="<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <label for="password">Password</label>
            <input id="password" name="password" class="text" type="password" />
            <span><?php echo $password_err ?></span>
            </div>
         </p>
		 
		 <p>
		 	<div class="<?php echo (!empty($repassword_err)) ? 'has-error' : ''; ?>">
            <label for="repassword">Re-Password</label>
            <input id="re-password" name="repassword" class="text" type="password" />
            <span><?php echo $repassword_err ?></span>
		 	</div>
         </p>
         
         <p>
            <button id="registerNew" name="submit" type="submit" value="Add new value">Submit</button> &nbsp; &nbsp; &nbsp;
            <a href="login.php"> Login </a>
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

