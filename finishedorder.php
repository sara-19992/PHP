<?php
require('connect.php');

$id=$_POST['id'];
$datefinished=$_POST['datefinished'];
$timefinished =$_POST['timefinished'];

$update='update';

$statment=$connection->query("UPDATE `orders` SET `states` = 'finished',`timefinished` = '$timefinished',`datefinished` = '$datefinished' WHERE `id`='$id'");

echo json_encode($update);

?>