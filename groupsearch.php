<?php
require('connect.php');

$Work=$_POST['Work'];
$statment=$connection->query("SELECT * FROM `worker` WHERE `worker`.`Work` = '$Work'");

$worker=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($worker);

?>