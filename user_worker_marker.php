<?php
require('connect.php');
$phoneworker=$_POST['phoneworker'];
$phoneuser=$_POST['phoneuser'];
$statment=$connection->query("SELECT user_current.*,marker.lat as WORKER_lat,marker.lng as WORKER_lng FROM `user_current`,`marker` WHERE `user_current`.`phoneworker`='$phoneworker' and `user_current`.`phoneuser`='$phoneuser' and `marker`.`phoneworker`='$phoneworker'");

$markers=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($markers);


?>