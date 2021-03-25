<?php
require('connect.php');

$username=$_POST['username'];
$statment=$connection->query("SELECT all_order.*,worker.* FROM `all_order`,`worker` WHERE `all_order`.`username` = '$username' and `all_order`.`statues`='cancel' and `all_order`.`phoneworker`=`worker`.`phone` ORDER BY `date` ASC");

$worker=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($worker);

?>