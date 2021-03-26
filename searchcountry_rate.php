<?php
require('connect.php');

$Work=$_POST['Work'];
$country=$_POST['country'];
if($country=='جميع المناطق'){ $statment=$connection->query("SELECT worker.*,AVG(Cast(rate.total as Float)) as AVG FROM `worker`,`rate` WHERE `worker`.`Work` = '$Work' and `worker`.`phone` = `rate`.`phoneworker` GROUP BY `rate`.`phoneworker`ORDER BY AVG DESC"); }
else {$statment=$connection->query("SELECT worker.*,AVG(Cast(rate.total as Float)) as AVG  FROM `worker`,`rate` WHERE `worker`.`Work` = '$Work' and `worker`.`country` = '$country' and `worker`.`phone` = `rate`.`phoneworker` GROUP BY `rate`.`phoneworker`ORDER BY AVG DESC");}

$worker=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($worker);

?>