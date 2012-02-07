<?php

// Fill in with username, password and host of your mySQL server:

$username 	= "root";
$password 	= "root";
$dbhost		= "localhost:8889";


// Checks if SQL is OK
$tilkobling = mysql_connect($dbhost, $username, $password);
if (!$tilkobling) {
	die("MySQL error! Check you settings in the sql-connect.php file!");
	break;
}
?>