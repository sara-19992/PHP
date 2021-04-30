<?php
require('connect.php');

$phone=$_POST['phone'];
$date=$_POST['date'];

$statment=$connection->query("SELECT `all_order`.*,`users`.*,`user_current`.city,`user_current`.lat,`user_current`.lng FROM `all_order`,`users`,`user_current` WHERE  `all_order`.`accept` = 'yes' and `all_order`.`deleteornot` = 'no' and `all_order`.`phoneworker` = '$phone' and `all_order`.`date` = '$date' and `users`.`phone`=`all_order`.`phoneuser` and `user_current`.`phoneuser`=`all_order`.`phoneuser`");

$myarray=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($myarray);

?>