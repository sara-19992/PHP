<?php

$imagename=$_POST['imagename'];
$base64=$_POST['image64'];
$image=base64_decode($_POST['image64']);

file_put_contents("chat\\" . $imagename , $image);
echo json_encode("sucsses add");

?>