<meta charset="UTF-8">
<?php
include('sql-connect.php');
mysql_select_db("gtfs-demo");
mysql_set_charset('utf8'); 


function makeSQL($fileName, $tablename) {
	$raw = file_get_contents("gtfs/$fileName");
	$lines = explode("\n", $raw);
	$tableHeaders = $lines[0];
	unset($lines[0]);
	
	foreach($lines as $line) {
	$data = explode(",", $line);
	$sqlValues = "VALUES(";
		
		foreach($data as $element) {
		$sqlValues .=  "'$element',";
		}
		$sqlValues = substr($sqlValues, 0, -1) . ")";
		$sqlSyntax = "INSERT INTO $tablename ($tableHeaders) $sqlValues";
		
		mysql_query($sqlSyntax);
	}
	
}


makeSQL("calendar_dates.txt", "calendar_dates");



?>