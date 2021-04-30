<?php
require('connect.php');
$id=$_POST['id'];

$update='cancel';

$statment=$connection->query("UPDATE `reservations` SET `deleteornot` = 'yes' WHERE `reservations`.`id`='$id'");


 echo json_encode($update);


?>