<?php
require('connect.php');

$statment=$connection->query("SELECT * FROM `marker`");

$markers=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($markers);


?>