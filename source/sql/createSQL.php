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
mysqli_select_db($tilkobling, "$dbname");
mysqli_set_charset($tilkobling, 'utf8');


function makeSQL($connection, $fileName, $tablename) {
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

		mysqli_query($connection, $sqlSyntax);
	}
}

foreach ($addFiles as $file) {
$nameOnly = explode(".", $file);
makeSQL($tilkobling, "$file", "$nameOnly[0]");
}

echo "Done!";

?>
