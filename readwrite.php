<!DOCTYPE html>
<html>
<body>

 <?php
$myfile = fopen("rw_file.txt", "a+");
echo '<br>' . fread($myfile,filesize("rw_file.txt")) . '<br>';
$date = date('l jS \of F Y h:i:s A') . "<br>" ."\n";
fwrite($myfile, $date);
echo 'Current Time: ' . $date;

fclose($myfile);
?>


</body>
</html>
