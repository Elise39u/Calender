<?php 
  include_once ('code.php')
?>
<!DOCTYPE html>
<html>
<head>
  <title> Birthdays </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<table>
<tr><td><h1>Name</h1><?php foreach ($person as $persons) { echo $persons, "<br/>";} ?></td></tr>
<tr><td><h1>Month</h1><?php foreach ($month as $months) { echo $months, "<br/>";} ?></td></tr>
<tr><td><h1>Day</h1><?php foreach ($day as $days) { echo $days, "<br/>";} ?></td></tr>
<tr><td><h1>Year</h1><?php foreach ($year as $years) { echo $years, "<br/>";} ?></td></tr>
</table>
</body>
</html>