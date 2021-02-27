<?php
require('connect.php');

$statment=$connection->query("SELECT * FROM users");

$myarray=array();

while($reultsFrom = $statment->fetch()){
    array_push(
        $myarray,array(
        "name"  => $reultsFrom['name'], 
        )
    );
}
echo json_encode($myarray);
?>