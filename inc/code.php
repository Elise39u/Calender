<?php
$person = array();
$day = array();
$month = array();
$year = array();
$ids  = array();

$link = mysqli_connect('localhost', 'root', '', 'calendar');
if ($link->connect_errno) {
    echo "Failed to connect to MySQL: " . $link->connect_error;
} else {
	$res = $link->query("SELECT * FROM birthdays ORDER BY month ASC");
	while ($row = $res->fetch_assoc()) {
		array_push($ids, $row['id']);
		array_push($person, $row['person']);
		array_push($day, $row['day']);
		array_push($month, $row['month']);
		array_push($year, $row['year']);
	}
}

function Person($person) {
	global $person;
    foreach ($person as $persons) {
		return $persons;
	}
}

function Days($day) {
	global $day;
	foreach ($day as $days) {
		return $days;
	}
}

function Years($year) {
	global $year;
	foreach ($year as $years) {
		return $years;
	}
}

function MakeMonth($month) {
	global $persons;
	global $days;
	global $years;
	$person = Person($persons);
	$day = Days($days);
	$year = Years($years);
	foreach ($month as $months) { 
		echo '<h1>', $months = date('F', mktime(0, 0, 0, $months, 10)), '</h1>'; echo "<br/>";
		echo "$person \n\r\t $day \n\r\t $year";
	}
}