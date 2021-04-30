<?php
require('connect.php');


$statment=$connection->query("SELECT Count(*) as count,worker.work FROM `worker`GROUP BY worker.work");

$myarray=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($myarray);

?>