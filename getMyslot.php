<?php
require('connect.php');

$phone=$_POST['phone'];

$statment=$connection->query("SELECT * FROM `slot` WHERE `slot`.`phoneworker` = '$phone'");

$myarray=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($myarray);

?>