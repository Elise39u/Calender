<?php
$monthNames = array(
	'Onbekend', 'Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus',
	'September', 'Oktober', 'November', 'December'
);

$birthdays =  array();

$link = mysqli_connect('localhost', 'root', '', 'calendar');
if ($link->connect_errno) {
    echo "Failed to connect to MySQL: " . $link->connect_error;
} else {
	$res = $link->query("SELECT * FROM birthdays ORDER BY month, day ASC");
	$birthdays = $res->fetch_all(PDO::FETCH_NUM);
}

function GetData($birthdays, $monthNames){
	$lastmonth = '';
	$lastday = '';
	foreach ($birthdays as $birthday) {
			if ($birthday['month'] != $lastmonth) {
				echo "<h1>" . $monthNames[$birthday['month']] . "</h1>";
			}
			if ($birthday['day'] != $lastday) {
				echo '<h2>' . $birthday['day'] . '</h2>';
    		}

		$id = $birthday['id'];
		echo "<p> <a href='update.php?id=" . $id . "'>" . $birthday['person'] . "(" . $birthday['year'] . ")</a>";
		echo "<a href='delete.php?id=" . $id . "'>X</a> </p>";
		
		$lastmonth = $birthday['month'];
		$lastday = $birthday['day'];
	};
}