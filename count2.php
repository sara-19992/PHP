<?php
require('connect.php');

$phone=$_POST['phone'];

$statment=$connection->query("SELECT id,date FROM `odrers` WHERE  `odrers`.`phoneworker` = '$phone'");
$worker=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($worker);

?>