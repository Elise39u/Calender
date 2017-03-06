<?php
$person = array();
$day = array();
$month = array();
$year = array();

$link = mysqli_connect('localhost', 'root', '', 'calendar');
if ($link->connect_errno) {
    echo "Failed to connect to MySQL: " . $link->connect_error;
} else {
	$res = $link->query("SELECT * FROM birthdays ORDER BY year ASC");
	while ($row = $res->fetch_assoc()) {
		array_push($person, $row['person']);
		array_push($day, $row['day']);
		array_push($month, $row['month']);
		array_push($year, $row['year']);
	}
}