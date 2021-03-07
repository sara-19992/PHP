<?php
require('connect.php');

$phone=$_POST['phone'];
$date=$_POST['date'];

$statment=$connection->query("SELECT * FROM `all_order` WHERE `all_order`.`phoneworker` = '$phone' and `all_order`.`date` = '$date'");

$myarray=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($myarray);

?>