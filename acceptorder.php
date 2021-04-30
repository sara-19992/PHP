<?php
require('connect.php');

$id=$_POST['id'];
$dateaccept=$_POST['dateaccept'];
$timeaccept =$_POST['timeaccept'];

$statment=$connection->query("UPDATE `all_order` SET  `timeaccept`='$timeaccept',`dateaccept`='$dateaccept' ,`accept` = 'yes',`whocancel` = '$who' WHERE `all_order`.`id`='$id'");

echo json_encode("add sucsses");

?> 