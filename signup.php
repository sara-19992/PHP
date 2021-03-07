<?php
require('connect.php');
$name=$_POST['name'];
$namefirst=$_POST['namefirst'];
$namelast=$_POST['namelast'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$imagename=$_POST['imagename'];
$base64=$_POST['image64'];
$image=base64_decode($_POST['image64']);
$token=$_POST['mytoken'];
$country=$_POST['country'];

$login='';

$statment=$connection->query("INSERT INTO `users` (`name`, `namefirst`, `namelast`,  `pass` , `phone`, `image` , `token` , `country`) VALUES ('$name','$namefirst' ,'$namelast','$pass','$phone','$imagename','$token','$country')");

$count=$statment -> rowCount();
if($count>0){
    if($base64 != NULL){file_put_contents("upload\\" . $imagename , $image);}
    echo json_encode("sucsses add");}
?>