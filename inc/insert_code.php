<?php
$link = mysqli_connect('localhost', 'root', '', 'calendar');
if ($link->connect_errno) {
    echo "Failed to connect to MySQL: " . $link->connect_error;
}

if (isset($_POST['submit'])) {
	$Person = $_POST['person'];
	$Day    = $_POST['day'];
	$Month  = $_POST['month'];
	$Year   = $_POST['year'];
	$insert = $link->query("INSERT INTO birthdays (person, day, month, year) VALUES('$Person', '$Day', '$Month', '$Year')");
}