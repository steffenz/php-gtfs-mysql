<?php

include('config.php');

// Connects
$tilkobling = mysqli_connect($host, $username, $password);
if (!$tilkobling) {
	die("MySQL error! Check your config.php file!");
}
?>
