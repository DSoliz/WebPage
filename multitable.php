<!DOCTYPE html>
<?php
function printTable(){
	echo '<table>';
	for ($i = 1; $i <= 100; $i++) {
		echo '<tr>';
		for ($j = 1; $j <= 100; $j++) {
			echo '<td>';
			echo $j*$i;
			echo '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
}
?>

<html>
<body>
	<h1>Table</h1>
	<br>
	<?php printTable(); ?>
</body>
</html>


