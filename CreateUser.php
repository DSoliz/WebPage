<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "dsolizca", "Mygenericpass", "dsolizca");
$UserName = $_POST['UserName'];

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "INSERT INTO Users (user_id) VALUES ('".$UserName."')";

echo "Result! <br>";
if ($mysqli->query($query) === TRUE) {
    echo "Username created successfully";
} else {
    echo "User Name Taken Try Again";
}


/* close connection */
$mysqli->close();
?>
