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

function MakeMonth($month) {
	foreach ($month as $months) { 
		echo $months = date('F', mktime(0, 0, 0, $months, 10)); echo "<br/>";
	}
}

function PersonDay($day) {
	foreach (array_merge($day, $person) as $element) {
		echo "$element test <br />";
	}
}