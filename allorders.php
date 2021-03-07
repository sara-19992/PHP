<?php
require('connect.php');

$phone=$_POST['phone'];
$id =rand(0,200000);
$myarray=array();

$statment=$connection->query("SELECT * FROM `all_order` WHERE `all_order`.`phoneworker` = '$phone'");
$myarray=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($myarray);

?>