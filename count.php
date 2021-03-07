
<?php
require('connect.php');

$phone=$_POST['phone'];

$statment=$connection->query("SELECT id,date FROM `all_order` WHERE  `all_order`.`phoneworker` = '$phone'");
$worker=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($worker);

?>