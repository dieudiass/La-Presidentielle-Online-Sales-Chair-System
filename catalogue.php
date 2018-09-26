
<?php

session_start();
require_once("config.php");
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
	

	header("location: login.php");
	exit;
}
if (isset($_POST["add_to_cart"])) {
	# code...
	if (isset($_SESSION["shopping_cart"])) {
		# code...
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if (!in_array($_GET["id"], $item_array_id)) {
			# code...
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array('item_id' => $_GET["id"], 
			'item_name' => $_POST["hidden_name"],
			'item_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"]);
			$_SESSION["shopping_cart"][$count] = $item_array;
		} else {
			echo '<script>alert("Item Already Added")</script>';
		}
	} else {
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		); $_SESSION["shopping_cart"][0] = $item_array;
	}
}
if (isset($_GET["action"])) {
	# code...
	if ($_GET["action"] == "delete") {
		# code...
        foreach ($_SESSION["shopping_cart"] as $key => $value) {
        	# code...
        	if ($value["item_id"] == $_GET["id"]) {
        		
        		unset($_SESSION["shopping_cart"][$key]);
        		echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="catalogue.php"</script>';
        	}
        }
	}
}
/*if (isset($_POST["order"])) {
	# code...
	$serialized_cart = serialize($_SESSION["shopping_cart"]);
$sql = "INSERT INTO order () VALUES ('" . mysql_real_escape_string($serialized_cart) . "')";
mysql_query($sql)
  or die("Query to store cart failed");
}*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
	<title>LA PRESIDENTIELLE</title>
	<meta content="PageBreeze Free HTML Editor (http://www.pagebreeze.com)" name="GENERATOR" />
	<meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
			<p align="center">&nbsp;<a class="navblack" href="Index.php"><font size="3">Home</font></a>&nbsp; |&nbsp;  
				<a class="navblack" href="about.php"><font size="3">About Us</font>&nbsp;</a>&nbsp; |&nbsp; 
				<a class="navblack" href="contact.php"><font size="3">Contact Us</font>&nbsp;</a>&nbsp; |&nbsp; |&nbsp;
				<a class="navblack" href="catalogue.php"><font size="3">Catalogue</font></a>&nbsp; |&nbsp; |&nbsp;
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
						<p align="left">&nbsp;</p>


<center><h1>Shop Online</h1></center>
<?php
$sql = "SELECT * FROM tbl_product ORDER BY id ASC";
$result = $mysqli->query($sql);
if (mysqli_num_rows($result) > 0) {
	# code...
	while ($row = mysqli_fetch_array($result)) {
		# code...


?>

<div class="col-md-4">
				<form method="post" action="catalogue.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
	}
}
?>
        <div style="clear:both" align="center"></div>
			<br />
					<h3 align="center">Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered" align="center">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php if (!empty($_SESSION["shopping_cart"])){ 
                    
                    $total = 0;
                    
                    foreach ($_SESSION["shopping_cart"] as $key => $value) {
                    	# code...	
					?>
					<tr>
						<td><?php echo $value["item_name"]; ?></td>
						<td><?php echo $value["item_quantity"]; ?></td>
						<td>$ <?php echo $value["item_price"]; ?></td>
						<td>$ <?php echo number_format($value["item_quantity"] * $value["item_price"], 2);?></td>
						<td><a href="catalogue.php?action=delete&id=<?php echo $value["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
                    	
					<?php
                        $total = $total + ($value["item_quantity"] * $value["item_price"]);
						}
					 ?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php 
                    }
					?>
				</table>
				<form method="post">
                  <button id="order" style="margin-top:5px;" class="btn btn-success" name="order" type="submit">Order</button>
				</form>
                
			</div>	
		</div>			

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
