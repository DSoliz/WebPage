<!DOCTYPE html>
<html>
<body>
<?php
	$points = 0;
	$q1_value = $_GET['q1'];
	if($q1_value == "b"){
		$points = $points + 20;
	}
	$q2_value = $_GET['q2'];
	if($q2_value == "c"){
		$points = $points + 20;
	}
	$q3_value = $_GET['q3'];
	if($q3_value == 'a'){
		$points = $points + 20;
	}
	$q4_value = $_GET['q4'];
	if($q4_value == 'b'){
		$points = $points + 20;
	}
	$q5_value = $_GET['q5'];
	if($q5_value == 'b'){
		$points = $points + 20;
	}
?>
	<h1>Results</h1>
	<br>
	
You got a total of: <br>
	<?php echo $points; ?>/100 points

</body>
</html>
