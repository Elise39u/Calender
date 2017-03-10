<!--
<table>
<tr>
        <td class="kop">Person</td> <td class="kop"> Month </td> <td class="kop"> Day </td> <td class="kop"> Year </td> <td class="kop"> Update </td> <td class="kop"> Delete</td> <td class="kop"> Add </td>
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

echo '<a href=update.php?id=$id target="."_blank".">x</a>', "<br/>"; -->

$persons = array();
$days = array();
$months = array();
$years = array();
$ids  = array();

function Person($persons) {
	return implode(" ",$persons);
	/*
	global $persons;
    foreach ($persons as $person) {
    	 echo "$person";
		 return $person;
	}
	*/
}

function Days($days) {
	return implode(" ",$days);
	/*
	global $day;
	foreach ($days as $day) {
		 echo "$day";
		 return $day;
	}
	*/
}
function Years($years) {
	return implode(" ",$years);
	/*
	global $years;
	foreach ($years as $year) {
	var_dump($year);
		// echo "$year";
		 return array_values($year);
	}
	*/
}

function MakeMonth($months) {
	global $persons;
	global $days;
	global $years;
	$person = Person($persons);
	$day = Days($days);
	$year = Years($years);
	$filteredMonths = array_unique($months);

	foreach ($filteredMonths as $month) { 
		echo '<h1>', $month = date('F', mktime(0, 0, 0, $month, 10)), '</h1>'; echo "<br/>";
		echo "$person <br /> \n\r\t $day <br />\n\r\t $year";
	}
}