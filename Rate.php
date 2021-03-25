<?php
require('connect.php');
$phoneworker=$_POST['phoneworker'];
$phoneuser=$_POST['phoneuser'];
$service=$_POST['service'];
$speed=$_POST['speed'];
$respect=$_POST['respect'];
$price=$_POST['price'];
$time=$_POST['time'];
$happyornot=$_POST['happyornot'];
$total=$_POST['total'];
$date=$_POST['date'];
$id=$_POST['id'];

$login='';
$statment1 = $connection->query("UPDATE `orders` SET `Rate` = 'yes' WHERE `orders`.`id` = '$id'");

$id =rand(0,2000000000);
$statment2=$connection->query("INSERT INTO `Rate` (`phoneworker`, `phoneuser`, `service`,  `speed` , `respect`, `price` , `time` , `happyornot`, `id`, `total`,`date`) 
VALUES ('$phoneworker','$phoneuser' ,'$service','$speed','$respect','$price','$time','$happyornot','$id','$total','$date')");

$count=$statment2 -> rowCount();
if($count>0){
    echo json_encode("sucsses add");}
?>