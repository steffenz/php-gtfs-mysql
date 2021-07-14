<?php
include('config.php');

if($_GET['tables'] == "ready") {
include('source/pages/fillTables.php');
die();
}
?>
<h1 style="text-align:center">Lets create the tables.</h1>

	<p> Everything seems to be going our way. Now we need to create the table skeleton for our MySQL schema/tables Hit the "Create tables" button to continue.
	<br/><br/>Data will be imported into: <?php echo $dbname ?>
</p>
	<p>Links to Google GTFS fields reference:</p>
		<ul>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#agencytxt">agency</a></li>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#calendartxt">calendar</a></li>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#calendar_datestxt">calendar_dates</a></li>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#routestxt">routes</a></li>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#shapestxt">shapes</a></li>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#stop_timestxt">stop_times</a></li>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#stopstxt">stops</a></li>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#tripstxt">trips</a></li>
		</ul>
	<a href="source/sql/makeTables.php"style="margin-left:280px; margin-top:20px; margin-bottom:20px;" class="button">Create MySQL tables..</a>
</div>
</body>
</html>
