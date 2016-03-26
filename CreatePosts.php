<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "dsolizca", "Mygenericpass", "dsolizca");
$UserName = $_POST['UserName'];
$Post_id = $_POST['post_id'];
$Post_content = $_POST['new_post'];

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$exists = "SELECT * FROM Users where user_id = '". $UserName ."'";

$max_id = "SELECT MAX(post_id) FROM Posts";

$num = $mysqli->query($max_id)->fetch_row();

echo "Result! <br>";
if($mysqli->query($exists)->fetch_row() != NULL){
    $num[0]++;
    echo $num;
    $query = "INSERT INTO Posts (post_id,content,author_id) VALUES ('".$num[0]."','".$Post_content."','".$UserName."')";
    if ($mysqli->query($query) === TRUE) {
        echo "Posted successfully";
    } else {
        echo "Error while Posting";
    }
}else{
    echo "User Name does no exists.";
}


/* close connection */
$mysqli->close();
?>
