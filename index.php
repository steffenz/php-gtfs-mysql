
<!DOCTYPE HTML>
<html>
<head>
	<title>Install - php-gtfs-mysql</title>
	<link rel="stylesheet" href="source/css/main.css"/>
</head>
<body><br/><br/><br/>
<div id="kontainer"><br/>
<?php

if(!file_exists("config.php")) {
include('source/pages/makeconfig.php');
}
else {
include('source/pages/createTables.php');
}
?>
	
</div>
</body>
</html>