<?php
$id = $_GET['id'];

$link = mysqli_connect('localhost', 'root', '', 'calendar');
if ($link->connect_errno) {
    echo "Failed to connect to MySQL: " . $link->connect_error;
} else {
	$res = $link->query("SELECT * FROM birthdays WHERE id=$id");
	while ($row = $res->fetch_assoc()) {
		$person = $row['person'];
		$day =    $row['day'];
		$month =  $row['month'];
		$year =   $row['year'];
		$id =     $row['id'];
	}
}

if (isset($_POST['submit'])) {
	echo "Person: " . $person . " Has succesfel been updated";
	$Person = $_POST['person'];
	$Day    = $_POST['day'];
	$Month  = $_POST['month'];
	$Year   = $_POST['year'];
	$update = $link->query("Update birthdays SET person='$Person', day='$Day', month='$Month', year='$Year' WHERE id=$id");
}