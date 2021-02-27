<?php

require('connect.php');

$name = $_POST['name'];

$statment1 = $connection->query("SELECT * FROM `request` WHERE `request`.`name` = '$name'");
$myarray=array();

while($reultsFrom = $statment1->fetch()){
    array_push(
        $myarray,array(
        "name"        => $reultsFrom['name'], 
        "phone"       => $reultsFrom['phone'],
        "image"       => $reultsFrom['image'],
        "Work"        => $reultsFrom['Work'],
        "Experiance"  => $reultsFrom['Experiance'],
        "Information" => $reultsFrom['Information'],
        "token"      => $reultsFrom['token'],

        )
    );
}

echo json_encode($myarray);

?>