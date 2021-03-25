<?php
require('connect.php');
$id=$_POST['id'];
$who=$_POST['who'];
$datecancel=$_POST['datecancel'];
$timecancel=$_POST['timecancel'];

$update='cancel';

$statment=$connection->query("UPDATE `all_order` SET `timecancel` = '$timecancel',`datecancel` = '$datecancel',`statues` = 'cancel',`whocancel` = '$who' WHERE `all_order`.`id`='$id'");


 echo json_encode($update);


?>