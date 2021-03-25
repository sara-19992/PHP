<?php
require('connect.php');

 $id=$_POST['id'];
$description=$_POST['description'];
$phoneuser=$_POST['phone'];
$tokenuser=$_POST['tokenuser'];
$tokenworker=$_POST['tokenworker'];
$phoneworker=$_POST['phoneworker'];
$username=$_POST['username'];
$datesend=$_POST['datesend'];
$timesend=$_POST['timesend'];
$statment1=$connection->query("SELECT * FROM `slot` WHERE `slot`.`id` = '$id'");
$row1 = $statment1->fetch();
$timestart=$row1['timestart'];
$timeend=$row1['timeend'];
$Am_Pm=$row1['Am_Pm'];
$date=$row1['date'];
$time=$row1['time'];
$statment2=$connection->query("UPDATE `slot` SET `states` ='yes' WHERE `slot`.`id` = '$id'");

$statment3=$connection->query("INSERT INTO `all_order` (`time`,`datesend`,`timesend`,`phoneuser`, `phoneworker`, `tokenuser`, `tokenworker`, `description`, `id`, `date`, `timestart`, `timeend`, `Am_Pm`, `username`) VALUES ('$time','$datesend','$timesend','$phoneuser', '$phoneworker', '$tokenuser', '$tokenworker', '$description', '$id', '$date', '$timestart' , '$timeend','$Am_Pm', '$username')");

echo json_encode("add sucsses");

?> 