<?php
require('connect.php');
$imagename=$_POST['imagename'];
$image=base64_decode($_POST['image64']);
file_put_contents("upload\\" . $imagename , $image);

?>