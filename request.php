<?php
require('connect.php');
$name=$_POST['name'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$imagename=$_POST['imagename'];
$base64=$_POST['image64'];
$image=base64_decode($_POST['image64']);
$ًWork=$_POST['Work'];
$Experiance=$_POST['Experiance'];
$Information=$_POST['Information'];
$token=$_POST['mytoken'];

$login='';

$statment=$connection->query("INSERT INTO `request` (`name`, `pass` , `phone`, `image` , `Work` , `Experiance` , `Information` ,  `token`) VALUES ('$name', '$pass','$phone','$imagename','$ًWork','$Experiance','$Information','$token')");

$count=$statment -> rowCount();

if($count>0){
    if($base64 != NULL){file_put_contents("upload\\" . $imagename , $image);}
    echo json_encode("sucsses add");}
?>