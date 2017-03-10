<?php 
  include_once ('inc/code.php')
?>
<!DOCTYPE html>
<html>
<head>
  <title> Birthdays </title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

<?php  echo GetData($birthdays, $monthNames); ?>
<p> <a href="insert.php"> Add a birthday </a></p>

</body>
</html>