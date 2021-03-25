<?php
require('connect.php');

$phone=$_POST['phone'];
$date=$_POST['date'];

$statment=$connection->query("SELECT `orders`.*,`users`.* FROM `orders`,`users` WHERE `orders`.`phoneworker` = '$phone' and `orders`.`date` = '$date' and `users`.`phone`=`orders`.`phoneuser`");

$myarray=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($myarray);

?>