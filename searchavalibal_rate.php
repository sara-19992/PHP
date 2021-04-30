<?php
require('connect.php');

$Work=$_POST['Work'];
$statment=$connection->query("SELECT worker.*,AVG(Cast(rate.total as Float)) as AVG ,Count(orders.id) as Client FROM `worker`,`rate`,`orders` WHERE `worker`.`Work`='$Work' and `worker`.`avalibel`='true' and `worker`.`phone` = `rate`.`phoneworker`and `worker`.`phone`=`orders`.`phoneworker` GROUP BY `rate`.`phoneworker`,`orders`.`phoneworker`  ORDER BY AVG DESC");

$worker=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($worker);

?>