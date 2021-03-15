<?php
require('connect.php');

$text=$_POST['text'];
$phoneworker=$_POST['phone'];
$imagename=$_POST['imagename'];
$base64=$_POST['image64'];
$image=base64_decode($_POST['image64']);

$id =rand(0,2000000);

$login='';

$statment=$connection->query("INSERT INTO `post` (`text`, `phoneworker`, `image` , `id`) VALUES ('$text','$phoneworker' ,'$imagename','$id')");

$count=$statment -> rowCount();
if($count>0){
    if($base64 != NULL){file_put_contents("upload\\" . $imagename , $image);}
    echo json_encode("sucsses add");}
?>