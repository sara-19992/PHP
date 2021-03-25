<?php
require('connect.php');

$phoneworker=$_POST['phoneworker'];
$date=$_POST['date'];
$timestart=$_POST['timestart'];
$timeend=$_POST['timeend'];


$statment=$connection->query("DELETE FROM `slot` WHERE `slot`.`phoneworker`='$phoneworker'and `slot`.`date`='$date' and `slot`.`timestart`='$timestart' and `slot`.`timeend`='$timeend'");

echo json_encode("Delete sucsses");

?>