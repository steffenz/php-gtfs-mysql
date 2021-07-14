<h1 style="text-align:center">All set! Lets fill in your data!</h1>

	<p>All the SQL tables have been created in your database. Now we need to fill them with your provided GTFS data. This might take some time to execute.<br/><br/>Here is a list of files in your GTFS folder. Green labels means that the file is found, and red means its not<br/><br/>
	<b>Warning: </b>Some files may not exist because they isn't required/implemented. If you are absolutely sure that this is the package as you've downloaded it, you can safely ignore the red files. I'll figure out whats missing, and won't waste any of your time with it.</p>


	<?php
	 if( !ini_get('safe_mode') ){

	 }

	 else {
		 echo "<p><span style='color:red'><b>Warning:</b> PHP is in safe mode! The script might exhaust the PHP memory, or time out during query. Please switch off safe mode, or manually adjust the timeout and max memory usage in php.ini</p>";
	 }
	?>

	<ul>
	<li>Files in /gtfs folder:</li>
		<ul>
			<li><?php
			if(file_exists("gtfs/agency.txt")){
			echo "<span style='color:green'>";
			$files = "agency.txt;";
			}else {echo "<span style='color:red'>";}
			?>agency.txt</span></li>

			<li><?php
			if(file_exists("gtfs/stops.txt")){
			echo "<span style='color:green'>";
			$files .= "stops.txt;";
			}else {echo "<span style='color:red'>";}
			?>stops.txt</span></li>

			<li><?php
			if(file_exists("gtfs/routes.txt")){
			echo "<span style='color:green'>";
			$files .= "routes.txt;";
			}else {echo "<span style='color:red'>";}
			?>routes.txt</span></li>

			<li><?php
			if(file_exists("gtfs/trips.txt")){
			echo "<span style='color:green'>";
			$files .= "trips.txt;";
			}else {echo "<span style='color:red'>";}
			?>trips.txt</span></li>

			<li><?php
			if(file_exists("gtfs/stop_times.txt")){
			echo "<span style='color:green'>";
			$files .= "stop_times.txt;";
			}else {echo "<span style='color:red'>";}
			?>stop_times.txt</span></li>

			<li><?php
			if(file_exists("gtfs/calendar.txt")){
			echo "<span style='color:green'>";
			$files .= "calendar.txt;";
			}else {echo "<span style='color:red'>";}
			?>calendar.txt</span></li>

			<li><?php
			if(file_exists("gtfs/calendar_dates.txt")){
			echo "<span style='color:green'>";
			$files .= "calendar_dates.txt;";
			}else {echo "<span style='color:red'>";}
			?>calendar_dates.txt</span></li>

			<li><?php
			if(file_exists("gtfs/fare_attributes.txt")){
			echo "<span style='color:green'>";
			$files .= "fare_attributes.txt;";
			}else {echo "<span style='color:red'>";}
			?>fare_attributes.txt</span></li>

			<li><?php
			if(file_exists("gtfs/fare_rules.txt")){
			echo "<span style='color:green'>";
			$files .= "fare_rules.txt;";
			}else {echo "<span style='color:red'>";}
			?>fare_rules.txt</span></li>

						<li><?php
			if(file_exists("gtfs/shapes.txt")){
			echo "<span style='color:green'>";
			$files .= "shapes.txt;";
			}else {echo "<span style='color:red'>";}
			?>shapes.txt</span></li>

			<li><?php
			if(file_exists("gtfs/frequencies.txt")){
			echo "<span style='color:green'>";
			$files .= "frequencies.txt;";
			}else {echo "<span style='color:red'>";}
			?>frequencies.txt</span></li>

			<li><?php
			if(file_exists("gtfs/transfers.txt")){
			echo "<span style='color:green'>";
			$files .= "transfers.txt;";
			}else {echo "<span style='color:red'>";}
			?>transfers.txt</span></li>

			<li><?php
			if(file_exists("gtfs/feed_info.txt")){
			echo "<span style='color:green'>";
			$files .= "feed_info.txt;";
			}else {echo "<span style='color:red'>";}
			?>feed_info.txt</span></li>

		</ul>
	</ul>
	<a href="source/sql/createSQL.php?files=<?php echo $files ?>"style="margin-left:280px; margin-top:20px; margin-bottom:20px;" class="button">Add data to MySQL..</a>
</div>
</body>
</html>
