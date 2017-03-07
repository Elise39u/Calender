<?php 
  include_once ('inc/code.php');
  include_once ('inc/insert_code.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title> Birthdays </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<form method="post">
    Name:
	<input type="text" name="person" value=''>
	day:
	<input type="text" name="day" value=''>
	month:
	<input type="text" name="month" value=''>
	year:
	<input type="text" name="year" value=''>
	<input type="submit" name="submit" value="add">
	<a href="index.php" class="button"> Go back </a>
</form>
</body>
</html>