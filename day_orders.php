<?php
require('connect.php');

$phone=$_POST['phone'];
$date=$_POST['date'];

$statment=$connection->query("SELECT `all_order`.*,`users`.* FROM `all_order`,`users` WHERE `all_order`.`phoneworker` = '$phone' and `all_order`.`date` = '$date' and `all_order`.`statues` = 'wait' and `users`.`phone`=`all_order`.`phoneuser`");

$myarray=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($myarray);

?>