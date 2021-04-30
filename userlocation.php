<?php
require('connect.php');
$phoneworker=$_POST['phoneworker'];
$date=$_POST['date'];
$statment=$connection->query("SELECT user_current.*,all_order.*,users.* FROM `user_current`,`all_order`,`users` WHERE `user_current`.`phoneuser`= `users`.`phone`and `all_order`.`phoneworker`='$phoneworker' and  `all_order`.`date`='$date' and `all_order`.`phoneuser`= `users`.`phone` and `all_order`.`accept` = 'yes' and `all_order`.`deleteornot` = 'no'");

$markers=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($markers);


?>