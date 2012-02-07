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
	
	
	
	</style>
</head>
<body><br/><br/><br/>
<div id="kontainer"><br/>

	<h1 style="text-align:center">Add GTFS to MySQL</h1>
	<p><b>Note:</b> Fill out your MySQL settings, and unzip your GTFS feed to the GTFS folder and hit Continue to proceed the setup. Application will attempt to change your default php timeout. If this fails, you'll need to change in manually in the PHP ini file.</p>
	<form  action="validate.php" method="post">
	
	<table id="mysqlnfo">
		<tr>
			<td>Database name:</td>
			<td><input type="text" value="company-gtfs" name="dbname" id="dbname"></td>
			<td>The database you wish to install you GTFS data into.</td>
		</tr>
	
		<tr>
			<td>Username:</td>
			<td><input type="text" placeholder="Username.." name="username" id="username"></td>
			<td>Your MySQL username.</td>
		</tr>
		

		<tr>
			<td>Password:</td>
			<td><input type="password" placeholder="Password.." name="password" id="password"></td>
			<td>Your MySQL password.</td>
		</tr>
		
		<tr>
			<td>Host:</td>
			<td><input type="text" value="localhost" name="host" id="host"></td>
			<td>Typically localhost.</td>
		</tr>
		
	</table>
	
	<input type="submit" value="Continue">
	</form>

</div>
</body>
</html>