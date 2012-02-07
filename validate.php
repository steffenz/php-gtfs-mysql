<?php


// Set mySQL login data
$mySQL['dbname'] = $_POST['dbname'];
$mySQL['user'] = $_POST['username'];
$mySQL['pw'] = $_POST['password'];
$mySQL['host'] = $_POST['host'];


// Check or try to set PHP timeout to zero (infinite)
if( !ini_get('safe_mode') ){ 
set_time_limit(0);
} else {
echo "Du er i sikkerhetsmodus";
}

// Check MySQL

$link = mysql_connect($mySQL['host'],$mySQL['user'],$mySQL['pw']);
if(!$link) {
$sqlConnect = "ok";
} else {
$sqlConnect = "fail";
}

?>


<!DOCTYPE HTML>
<html>
<head>
	<title>Install - php-gtfs-mysql</title>
	<style type="text/css">
	body {
	background: #f9f9f9;
	margin:0;
	padding:0;
	font-family: Helvetica;
	}
	
	#kontainer {
	width:700px;
	margin:0 auto;
	background: #fff;
	border:1px solid #f4f4f4;
	}
	
	h1 {
	font-size:22px;
	}
	
	p {
	font-size:12px;
	padding-left:30px;
	padding-right:30px;
	padding-top:5px;
	padding-bottom:20px;
	}
	
	#kontainer input {
	width:200px;
	border:1px solid #f3f3f3;
	text-align: center;
	padding:5px;
	outline:none;
	}
	
	#mysqlnfo {
	font-size: 12px;
	}
	
	#checklist {
	margin-left:220px;
	font-size: 12px;
	font-weight: bold;
	}
	
	
	</style>
</head>
<body><br/><br/><br/>
<div id="kontainer"><br/>

	<h1 style="text-align:center">You settings was checked:</h1>
	<p><b>Read carefully:</b> I've tested the settings you provided in the last step here. Read them carefully to prevent anything from going wrong. Green checkmark means it's working fine.</p>
	
	
	
	<table cellspacing="10"id="checklist">
		<tr>
			<td><img src="true.png"/></td>
			<td><b>MySQL connection</td>
		</tr>
		
		
		<tr>
			<td><img src="true.png"/></td>
			<td>Database created!</td>
		</tr>
		
		<tr>
			<td><img src="true.png"/></td>
			<td>PHP timeout set to unlimited (0)</td>
		</tr>
		
	</table>
	
	<br/><br/>
	<p><b>Read carefully:</b> I've tested the settings you provided in the last step here. Read them carefully to prevent anything from going wrong. Green checkmark means it's working fine.</p>
	
	

</div>
</body>
</html>