<?php

$data=$_POST['name'].",".$_POST['email'].$_POST['date-of-birth'].",".$_POST['gender'].",".$_POST['country'];

$file = "./userdata.csv";
$handle = fopen($file, "w");
fwrite($handle, $data);
fclose($handle);


$handle = fopen($file, "r");
$user_data = fread($handle, filesize($file));
print_r($user_data);
fclose($handle);

?>

