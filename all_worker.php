<?php
require('connect.php');
// $work=$_POST['work'];
$statment=$connection->query("SELECT * FROM `worker`");
$worker=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($worker);

?>