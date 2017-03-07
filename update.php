<?php 
  include_once ('inc/code.php');
  include_once ('inc/update_code.php');
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
	<input type="text" name="person" value='<?php echo htmlspecialchars($person); ?>'> <br>
	day:
	<input type="text" name="day" value='<?php echo htmlspecialchars($day); ?>'> <br>
	month:
	<input type="text" name="month" value='<?php echo htmlspecialchars($month); ?>'> <br>
	year:
	<input type="text" name="year" value='<?php echo htmlspecialchars($year); ?>'>
	<input type="submit" name="submit" value="update">
	<a href="index.php" class="button"> Go back </a>
</form>
</body>
</html>