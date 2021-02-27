<?php
require('connect.php');

$phone=$_POST['phone'];
$imagename=$_POST['imagename'];
$base64=$_POST['image64'];
$image=base64_decode($_POST['image64']);

$id =rand(0,200000);

$statment=$connection->query("INSERT INTO `experience_images` (`images`, `phone`,`id`,`Date`) VALUES ('$imagename', '$phone' , '$id' , ' ')");

$count=$statment -> rowCount();

if($count>0){
    if($base64 != NULL){file_put_contents("upload\\" . $imagename , $image);}
    echo json_encode('upload image sucsses');}

?>