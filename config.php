<?php // login.php
/*$db_hostname = "Localhost";
$db_username = "root";
$db_password = "";
$db_database = "testing";*/


define('servername' , 'localhost');
define('username' , 'root');
define('password' ,  '');
define('dbname' , 'presidentielle');

$mysqli = new mysqli(servername, username, password, dbname);

if ($mysqli == false) {
	# code...
	echo "Couldn't reach database";
}
?>