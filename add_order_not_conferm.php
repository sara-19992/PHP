<?php
require('connect.php');

$id=$_POST['id'];


$statment1=$connection->query("SELECT * FROM `all_order` WHERE `all_order`.`id` = '$id'");
$row1 = $statment1->fetch();
$phoneuser=$row1['phoneuser'];
$username=$row1['username'];
$phoneworker=$row1['phoneworker'];
$tokenuser=$row1['tokenuser'];
$tokenworker=$row1['tokenworker'];
$description=$row1['description'];
$date=$row1['date'];
$timestart=$row1['timestart'];
$timeend=$row1['timeend'];
$Am_Pm=$row1['Am_Pm'];
$datesend=$row1['datesend'];
$dateaccept=date('d-m-y');
$timesend=$row1['timesend'];
$timeaccept ='12:33:33';
$time=$row1['time'];

// $statment3=$connection->query("DELETE FROM `all_order` WHERE `all_order`.`id` = '$id'");

$statment2=$connection->query("INSERT INTO `orders` (`time`,`datesend`,`dateaccept`,`timesend`,`timeaccept`,`phoneuser`, `phoneworker`, `tokenuser`, `tokenworker`, `description`, `id`, `date`, `timestart`, `timeend`, `Am_Pm`, `username`) VALUES ('$time','$datesend','$dateaccept','$timesend','$timeaccept','$phoneuser', '$phoneworker', '$tokenuser', '$tokenworker', '$description', '$id', '$date', '$timestart' , '$timeend','$Am_Pm', '$username')");

echo json_encode("add sucsses");

?> 