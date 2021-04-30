<?php
require('connect.php');
$phone=$_POST['phone'];
$statment=$connection->query("SELECT reservations.*,`users`.namefirst,`users`.namelast,`users`.image,`users`.name ,`users`.country ,`user_current`.city,`user_current`.lat as latuser,`user_current`.lng as lnguser FROM `reservations`,`users`,`user_current` where `reservations`.`workerphone`='$phone' and `user_current`.`phoneuser`=`reservations`.`phoneuser` and `reservations`.`accept`='no' and `reservations`.`deleteornot` = 'no' and `users`.`phone`=`reservations`.`phoneuser`");

$markers=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($markers);


?>