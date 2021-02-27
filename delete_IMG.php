<?php
require('connect.php');

$id=$_POST['id'];

$myarray=array();

$statment=$connection->query("DELETE FROM `experience_images` WHERE `experience_images`.`id` = '$id'");

echo json_encode("Delete sucsses");

?>