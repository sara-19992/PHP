<?php

require("connect.php");
$workerphone = $_POST['workerphone'];
$phoneuser = $_POST['phoneuser'];
$nameofwork = $_POST['nameofwork'];
$type = $_POST['type'];
$id =rand(0,2000000);

$login = '';

$statment = $connection->query("INSERT INTO `reservations` (`phoneuser`, `workerphone`, `nameofwork`,`id`,`type`,`state`,`accept`,`start`,`deleteornot`) VALUES ('$phoneuser','$workerphone','$nameofwork','$id','$type','notfinished','no','no','no')");
//$statment1= $connection->query(" UPDATE `longtimeorder`SET `accept`='yes' WHERE  ");
$count = $statment->rowCount();
if ($count > 0) {

    echo json_encode("sucsses add");
}

?>