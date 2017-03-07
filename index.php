<?php 
  include_once ('inc/code.php')
?>
<!DOCTYPE html>
<html>
<head>
  <title> Birthdays </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<table>
<tr>
        <td>Person</td> <td> Month </td> <td> Day </td> <td> Year </td> <td> Update </td> <td> Delete</td> <td> Add </td>
</tr>
<tr>
<td><?php foreach ($person as $persons) { echo $persons, "<br/>";} ?></td>
<td><?php foreach ($month as $months) { echo $months, "<br/>";} ?></td>
<td><?php foreach ($day as $days) { echo $days, "<br/>";} ?></td>
<td><?php foreach ($year as $years) { echo $years, "<br/>";} ?></td>
<td><?php foreach ($ids as $id) {printf('<a href=update.php?id="%s"> x </a>' ,$id).PHP_EOL; echo "<br/>";} ?> </td> 
<td><?php foreach ($ids as $id) {printf('<a href=delete.php?id="%s"> x </a>' ,$id).PHP_EOL; echo "<br/>";} ?> </td> 
<td><a class="button" href="insert.php"> Add Birthday </a></td>
</table>
</body>
</html>

<!-- echo '<a href=update.php?id=$id target="."_blank".">x</a>', "<br/>"; -->