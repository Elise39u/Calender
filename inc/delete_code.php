<?php
$id = $_GET['id'];

$link = mysqli_connect('localhost', 'root', '', 'calendar');
if ($link->connect_errno) {
    echo "Failed to connect to MySQL: " . $link->connect_error;
} else {
	$res = $link->query("SELECT * FROM birthdays WHERE id=$id");
	$row = $res->fetch_assoc();
	$person = $row['person'];
		$day =    $row['day'];
		$month =  $row['month'];
		$year =   $row['year'];
		$id =     $row['id'];
	}

if (isset($_POST['yes'])) {
	echo "Person " . $person . " Has been deleted";
	$del = $link->query("DELETE FROM birthdays WHERE id=$id");
} elseif (isset($_POST['no'])) {
	echo "Okay now press the back button";
}