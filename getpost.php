<?php
require('connect.php');

$phone=$_POST['phone'];

$statment=$connection->query("SELECT * FROM `post` WHERE `post`.`phoneworker` = '$phone' ORDER BY `post`.`date` DESC");

$myarray=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($myarray);

?>