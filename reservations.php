<?php

require("connect.php");

$Todate = $_POST['Todate'];
$Fromdate = $_POST['Fromdate'];
$id=$_POST['id'];


$statment=$connection->query("UPDATE `reservations` SET  `Todate`='$Todate', `Fromdate`= '$Fromdate',`accept` = 'yes' WHERE `reservations`.`id`='$id'");
//$statment1= $connection->query(" UPDATE `longtimeorder`SET `accept`='yes' WHERE  ");
$count = $statment->rowCount();
if ($count > 0) {

    echo json_encode("sucsses add");
}

