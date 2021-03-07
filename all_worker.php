<?php
require('connect.php');

$statment=$connection->query("SELECT * FROM `worker`");
$worker=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($worker);

?>