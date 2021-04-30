<?php
require('connect.php');

$username=$_POST['username'];
$statment=$connection->query("SELECT orders.*,worker.* FROM `orders`,`worker` WHERE `orders`.`username` = '$username' and `orders`.`phoneworker`=`worker`.`phone`ORDER BY `date` ASC");

$worker=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($worker);

?>