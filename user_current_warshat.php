<?php
require('connect.php');

$phone=$_POST['phone'];
$statment=$connection->query("SELECT reservations.*,worker.* FROM `reservations`,`worker` WHERE `reservations`.`phoneuser` = '$phone' and `reservations`.`workerphone`=`worker`.`phone`ORDER BY `Fromdate` ASC");

$worker=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($worker);

?>