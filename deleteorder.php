<?php
require('connect.php');

$id=$_POST['id'];

$myarray=array();

$statment=$connection->query("DELETE FROM `all_order` WHERE `all_order`.`id` = '$id'");

echo json_encode("Delete sucsses");

?>