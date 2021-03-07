<?php

require('connect.php');

$name = $_POST['name'];
$pass = $_POST['pass'];
$newpass=$_POST['newpass'];

$statment1 = $connection->query("SELECT * FROM `worker` WHERE `worker`.`name` = '$name'");
$count = $statment1->rowCount();
if($count > 0){
    $row = $statment1->fetch();
    if($row['pass']==$pass){
        $statment2 = $connection->query("UPDATE `worker` SET `pass` = '$newpass' WHERE `worker`.`name` = '$name'");
        $update='update';

    }
    else{
        $update='old pass not correct';
    }
}

    echo json_encode ($update);

?>
