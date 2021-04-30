<?php
require('connect.php');
$Work=$_POST['Work'];
$statment=$connection->query("SELECT marker.*,worker.*,AVG(Cast(total as Float))as AVG ,Count(orders.id) as Client FROM `marker`,`worker`,`rate`,`orders` WHERE `marker`.`Work` = '$Work' and `marker`.`phoneworker`=`worker`.`phone` and `worker`.`phone` = `rate`.`phoneworker`and `worker`.`avalibel`='true' and `worker`.`phone`=`orders`.`phoneworker` GROUP BY `orders`.`phoneworker`,`rate`.`phoneworker`");

$markers=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($markers);


?>