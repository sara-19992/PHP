<?php
require('connect.php');

$name=$_POST['name'];
$imagename=$_POST['imagename'];
$base64=$_POST['image64'];
$image=base64_decode($_POST['image64']);
// $ًWork=$_POST['Work'];
$Experiance=$_POST['Experiance'];
$Information=$_POST['Information'];


//$statment=$connection->query("UPDATE  `workers` SET `name` =$name,SET `phoneno`=$phone,SET `work` =$work,SET `info`=$info,SET `expe`=$expe");

$statment=$connection->query("UPDATE `worker` SET `name` = '$name', `image` = '$imagename' ,`Information` = '$Information',`Experiance`='$Experiance' WHERE `worker`.`name` = '$name'");

$count=$statment -> rowCount();

if($count>0){
    if($base64 != NULL){file_put_contents("upload\\" . $imagename , $image);}
    echo json_encode("statusesucsses update");}
?>