<?php

require('connect.php');

$name = $_POST['name'];

$statment1 = $connection->query("SELECT worker.*,AVG(Cast(total as Float))as AVG,marker.*,Count(orders.id) as Client FROM `worker`,`rate`,`marker`,`orders` WHERE `worker`.`name` = '$name' and `marker`.`phoneworker` = `worker`.`phone`and `worker`.`phone` = `rate`.`phoneworker` and `worker`.`phone`=`orders`.`phoneworker`");
$worker=$statment1->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($worker);

?>
