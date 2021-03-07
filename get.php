<?php
require('connect.php');

$statment=$connection->query("SELECT * FROM users");

$myarray=array();

while($reultsFrom = $statment->fetch()){
    array_push(
        $myarray,array(
        "name"  => $reultsFrom['name'], 
        "pass"  => $reultsFrom['pass'],
        "phone" => $reultsFrom['phone'],
        "image" => $reultsFrom['image'],
        )
    );
}
echo json_encode($myarray);
?>