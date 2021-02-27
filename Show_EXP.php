<?php
require('connect.php');

$phone=$_POST['phone'];


$id =rand(0,200000);
$myarray=array();

$statment=$connection->query("SELECT * FROM `experience_images` WHERE `experience_images`.`phone` = '$phone' ORDER BY `experience_images`.`Date` DESC");

while($reultsFrom = $statment->fetch()){
    array_push(
        $myarray,array(
        "images"  => $reultsFrom['images'], 
        "phone"  => $reultsFrom['phone'], 
        "id"  => $reultsFrom['id'], 
    
        )
    );
}

echo json_encode($myarray);

?>