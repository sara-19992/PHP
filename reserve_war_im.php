<?php

require("connect.php");
$workerphone = $_POST['workerphone'];
$phoneuser = $_POST['phoneuser'];
$nameofwork = $_POST['nameofwork'];
$type = $_POST['type'];
$imagename=$_POST['image'];
$base64=$_POST['base64'];
$image=base64_decode($_POST['base64']);
///$id=$_POST['id'];
 $id =rand(0,2000000);

$login = '';

$statment = $connection->query("INSERT INTO `reservations` (`phoneuser`, `workerphone`, `nameofwork`,`id`,`type`,`state`,`accept`,`start`,`deleteornot`,`orderimage`) VALUES ('$phoneuser','$workerphone','$nameofwork','$id','$type','notfinished','no','no','no','$imagename')");
//$statment1= $connection->query(" UPDATE `longtimeorder`SET `accept`='yes' WHERE  ");
$count = $statment->rowCount();
file_put_contents("upload\\" . $imagename , $image);

if ($count > 0) {

    echo json_encode("sucsses add");
}

?>