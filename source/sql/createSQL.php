<meta charset="UTF-8">
<?php

ini_set('memory_limit', '512M');
set_time_limit(0);

$files = $_GET['files'];

if(substr($files, -1) == ";") {
$files = substr($files,0, -1);
}

$addFiles = explode(";", $files);

include('../../sql-connect.php');
mysql_select_db("$dbname");
mysql_set_charset('utf8'); 


function makeSQL($fileName, $tablename) {
	$raw = file_get_contents("../../gtfs/$fileName");
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

foreach ($addFiles as $file) {
$nameOnly = explode(".", $file);
makeSQL("$file", "$nameOnly[0]");
}

echo "Done!";

?>