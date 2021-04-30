<?php
require('connect.php');
$id=$_POST['id'];
$who=$_POST['who'];

$update='cancel';

$statment=$connection->query("UPDATE `all_order` SET `deleteornot` = 'yes',`whocancel` = '$who' WHERE `all_order`.`id`='$id'");


 echo json_encode($update);


?>