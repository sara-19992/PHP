<?php
require('connect.php');

$statment=$connection->query("SELECT * FROM `locationofworkers`");

$markers=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($markers);


?>