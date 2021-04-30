<?php
require('connect.php');

$phoneworker=$_POST['phoneworker'];
$phoneuser=$_POST['phoneuser'];

$id =rand(0,2000000);


$statment=$connection->query("INSERT INTO `favarate` (`phoneuser`, `phoneworker`, `id`) VALUES ('$phoneuser','$phoneworker' ,'$phoneworker','$id')");

echo json_encode("sucsses add");}
?>