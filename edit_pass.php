<?php

require('connect.php');

$name = $_POST['name'];
$pass = $_POST['pass'];
$newpass=$_POST['newpass'];

$statment1 = $connection->query("SELECT * FROM `request` WHERE `request`.`name` = '$name'");
$count = $statment1->rowCount();
if($count > 0){
    $row = $statment1->fetch();
    if($row['pass']==$pass){
        $statment2 = $connection->query("UPDATE `request` SET `pass` = '$newpass' WHERE `request`.`name` = '$name'");
        $update='update';

    }
    else{
        $update='old pass not correct';
    }
}

    echo json_encode ($update);

?>
