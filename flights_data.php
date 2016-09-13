<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Flights Data</title>
</head>

<body>

<?php

$link = mysql_connect("rerun", "potiro", "pcXZb(kL");
if(!$link)
	die("Could not connect to Server");
mysql_select_db("poti", $link);

$query_string = "select * from flights";
$result = mtsql_query($query_string);

$num_row = mysql_num_rows($result);

if ($num_row > 0){
	print "<table border="0">;
	while ( $a_row = mysql_fetch_row($result)){
		print "<tr>\n";
		foreach ($a_row as $field)
			print "\t<td>$field</td>\n";
		print "</tr>";
	}
	print "</table>";
}

mysql_close($link);
?>

</body>
</html>