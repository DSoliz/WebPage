<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "dsolizca", "Mygenericpass", "dsolizca");
	$UserName = $_POST['my_select'];

	/* check connection */
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	$max_id = "SELECT * FROM Posts where author_id ='".$UserName."'";
	$num = $mysqli->query($max_id);

	while($row = $num->fetch_row()){
		echo "Post ID: ".$row[0];
		echo "<p>".$row[1]."</p>";
		echo "<br>";
	}
	$mysqli->close();
?>
