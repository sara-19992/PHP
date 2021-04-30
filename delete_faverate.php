<?php
require('connect.php');

$phoneuser=$_POST['phoneuser'];
$phoneworker=$_POST['phoneworker'];

$update='delete';

$statment=$connection->query("DELETE FROM `favarate` WHERE `favarate`.`phoneworker`='$phoneworker' and `favarate`.`phoneuser`='$phoneuser'");


 echo json_encode($update);


?>