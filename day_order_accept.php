<?php
require('connect.php');

$phone=$_POST['phone'];
$date=$_POST['date'];

$statment=$connection->query("SELECT * FROM `odrers` WHERE `odrers`.`phoneworker` = '$phone' and `odrers`.`date` = '$date'");

$myarray=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($myarray);

?>