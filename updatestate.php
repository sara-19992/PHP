<?php
require('connect.php');
$state=$_POST['state'];
$phoneworker=$_POST['phoneworker'];
$update='update';

$statment=$connection->query("UPDATE `worker` SET `avalibel` = '$state' WHERE `phone`='$phoneworker'");

echo json_encode($update);


?>