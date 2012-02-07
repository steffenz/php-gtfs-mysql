<?php
include('config.php');

if($_GET['tables'] == "ready") {
include('source/pages/fillTables.php');
die();
}
?>
<h1 style="text-align:center">Lets create the tables.</h1>

	<p> Everything seems to be going our way. Now we need to create the table skeleton for our MySQL schema/tables Hit the "Create tables" button to continue.</p>
	<br/<br/>
	
	<ul>
	<li><?php echo $dbname ?></li>
		<ul>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#agency_fields">agency</a></li>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#calendar_fields">calendar</a></li>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#calendar_dates_fields">calendar_dates</a></li>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#routes_fields">routes</a></li>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#stop_times_fields">stop_times</a></li>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#stops_fields">stops</a></li>
		<li><a target="_blank" href="https://developers.google.com/transit/gtfs/reference#trips_fields">trips</a></li>
		</ul>
	</ul>
	<a href="source/sql/makeTables.php"style="margin-left:280px; margin-top:20px; margin-bottom:20px;" class="button">Create MySQL tables..</a>
</div>
</body>
</html>