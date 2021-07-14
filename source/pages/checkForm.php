<?php

$username = $_POST['username'];
$password = $_POST['password'];
$host = $_POST['host'];
$dbname = $_POST['dbname'];

if(empty($dbname)) {
header("Location: ../../index.php?error=nodbname");
die();
}


$tilkobling = mysqli_connect("$host", "$username", "$password");
if (!$tilkobling) {
	header("Location: ../../index.php?error=sql");
}

else {
$fh = fopen("../../config.php", 'w') or die("can't open file");
$stringData = '<?php 
$username = ' . "\"$username\"" . ';
$password = ' . "\"$password\"" . ';
$host = ' . "\"$host\"" . ';
$dbname = ' ."\"$dbname\"" .';
?>';
fwrite($fh, $stringData);
header("Location: ../../index.php");
}

?>