<?php 
  include_once ('inc/code.php');
  include_once ('inc/delete_code.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title> Birthdays </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<h1> Do you want to delete this person ?</h1>
<form method="post">
    Name:
	<input type="text" name="person" value='<?php echo htmlspecialchars($person); ?>' readonly> <br>
	day:
	<input type="text" name="day" value='<?php echo htmlspecialchars($day); ?>' readonly> <br>
	month:
	<input type="text" name="month" value='<?php echo htmlspecialchars($month); ?>' readonly> <br>
	year:
	<input type="text" name="year" value='<?php echo htmlspecialchars($year); ?>' readonly>
	<input type="submit" name="yes" value="Yes"> 
	<input type="submit" name="no"  value="No">
	<a href="index.php" class="button"> Go back </a>
	</form>
</body>
</html>
