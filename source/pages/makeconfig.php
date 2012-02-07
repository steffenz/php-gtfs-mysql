<script type="text/javascript">
function submitform()
{
  document.sqlsettings.submit();
}
</script>

<h1 style="text-align:center">Create a new configuration file.</h1>

	<p><b>What this is:</b> In order for this script to work I need to have some information about your MySQL database to store in a config.php file. This file will be created automatically, so no worries. Also, I kind of need to modify your PHP settings, but we will deal with that later.
	<?php
	if($_GET['error'] == "sql") {
	echo "
	<br/><br/>
	<span style='color:red'><b>Error:</b> Connection to MySQL could not be established. Are you sure you entered them correctly?</span>
	";
	}
	
	if($_GET['error'] == "nodbname") {
	echo "
	<br/><br/>
	<span style='color:red'><b>Error:</b> Please provide a name for the database. If it does not exists, it will be created.</span>
	";
	}
	?>
	</p>	
	<form id="sqlsettings" name="sqlsettings"action="source/pages/checkForm.php" method="post">
	
	<table cellpadding="5" id="mysqlnfo">
		<tr>
			<td>Database name:</td>
			<td><input type="text" autocomplete="off" placeholder="travelagency-gtfs" name="dbname" id="dbname"></td>
			<td class="info">Either a new or an existing DB.</td>
		</tr>
	
		<tr>
			<td>Username:</td>
			<td><input type="text" autocomplete="off" placeholder="Username.." name="username" id="username"></td>
			<td class="info">Your MySQL username.</td>
		</tr>
		

		<tr>
			<td>Password:</td>
			<td><input type="password" autocomplete="off" placeholder="Password.." name="password" id="password"></td>
			<td class="info">Your MySQL password.</td>
		</tr>
		
		<tr>
			<td>Host:</td>
			<td><input type="text" autocomplete="off" value="localhost" name="host" id="host"></td>
			<td class="info">Typically localhost.</td>
		</tr>
		
	</table>
	<a onclick="submitform()"style="margin-left:230px; margin-top:20px; margin-bottom:20px;" class="button">Check settings and continue</a>
	</form>
