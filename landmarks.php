<?php
header('Content-type: application/json');

$server = "localhost";
$username = "root";
$password = "tembok";
$database = "landmarks";

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());
mysql_select_db($database, $con);

$sql = "SELECT id, name AS name, latitude AS latitude, longitude AS longitude FROM landmarks ORDER BY name";
$result = mysql_query($sql) or die ("Query error: " . mysql_error());

$records = array();

while($row = mysql_fetch_assoc($result)) {
	$records[] = $row;
}

mysql_close($con);

echo json_encode($records);
?>
