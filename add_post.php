<?php
require('connect.php');

$text=$_POST['text'];
$phoneworker=$_POST['phone'];
$date=$_POST['date'];
$imagename=$_POST['imagename'];
$base64=$_POST['image64'];
$image=base64_decode($_POST['image64']);

$id =rand(0,2000000);

$login='';

$statment=$connection->query("INSERT INTO `post` (`text`, `phoneworker`, `image` , `id` , `date`) VALUES ('$text','$phoneworker' ,'$imagename','$id','$date')");

$count=$statment -> rowCount();
if($count>0){
    if($base64 != NULL){file_put_contents("upload\\" . $imagename , $image);}
    echo json_encode("sucsses add");}
?>