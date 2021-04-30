<?php
require('connect.php');

$phoneworker=$_POST['phoneworker'];

$statment=$connection->query("SELECT AVG(Cast(total as Float))as AVG,AVG(service)as AVG1,AVG(speed)as AVG2,AVG(respect)as AVG3,AVG(price)as AVG4,AVG(time)as AVG5,AVG(happyornot)as AVG6 FROM `rate` WHERE `rate`.`phoneworker` = '$phoneworker'");
$myarray=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($myarray);
?>