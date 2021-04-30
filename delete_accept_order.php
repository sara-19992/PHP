<?php
require('connect.php');
$id=$_POST['id'];
$who=$_POST['who'];
$datecancel=$_POST['datecancel'];
$timecancel=$_POST['timecancel'];

 $update='cancel';

$statment1=$connection->query("SELECT * FROM `orders` WHERE `orders`.`id` = '$id'");
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

$statment2=$connection->query("DELETE FROM `orders` WHERE `orders`.`id` = '$id'");

$statment3=$connection->query("INSERT INTO `all_order` (`time`,`datesend`,`timesend`,`phoneuser`, `phoneworker`, `tokenuser`, `tokenworker`, `description`, `id`, `date`, `timestart`, `timeend`, `Am_Pm`, `username`,`whocancel`,`datecancel`,`timecancel`,`statues`) VALUES ('$time','$datesend','$timesend','$phoneuser', '$phoneworker', '$tokenuser', '$tokenworker', '$description', '$id', '$date', '$timestart' , '$timeend','$Am_Pm', '$username','$who','$datecancel','$timecancel','cancel')");


 echo json_encode($update);


?>
