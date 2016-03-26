<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "dsolizca", "Mygenericpass", "dsolizca");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$userq = "SELECT * FROM Users";
$arr = $mysqli->query($userq);

while($row = $arr->fetch_row()){
	echo $row[0]."<br>";
}
/* close connection */
$mysqli->close();
?>
