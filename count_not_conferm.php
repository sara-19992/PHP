<?php
require('connect.php');

$phone=$_POST['phone'];

$statment=$connection->query("SELECT * FROM `all_order` WHERE  `all_order`.`phoneworker` = '$phone' and `all_order`.`accept` = 'no' and `all_order`.`deleteornot` = 'no'");
$worker=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($worker);

?>