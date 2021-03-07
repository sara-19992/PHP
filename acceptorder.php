<?php
require('connect.php');

$id=$_POST['id'];


$statment=$connection->query("SELECT * FROM `all_order` WHERE `all_order`.`id` = '$id'");
$row1 = $statment->fetch();
$phoneuser=$row1['phoneuser'];
$phoneworker=$row1['phoneworker'];
$tokenuser=$row1['tokenuser'];
$tokenworker=$row1['tokenworker'];
$description=$row1['description'];
$date=$row1['date'];
$timestart=$row1['timestart'];
$timeend=$row1['timeend'];
$Am_Pm=$row1['Am_Pm'];
$username=$row1['username'];
echo $phoneuser;
echo $description;
$statment2=$connection->query("INSERT INTO `odrers` (`phoneuser`, `phoneworker`, `tokenuser`, `tokenworker`, `description`, `id`, `date`, `timestart`, `timeend`, `Am_Pm`, `username`) VALUES ('$phoneuser', '$phoneworker', '$tokenuser', '$tokenworker', '$description', '$id', '$date', '$timestart' , '$timeend','$Am_Pm', '$username')");

$statment=$connection->query("DELETE FROM `all_order` WHERE `all_order`.`id` = '$id'");


echo json_encode("add sucsses");

?>