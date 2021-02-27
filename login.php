<?php
require('connect.php');
$name=$_POST['name'];
$pass=$_POST['pass'];
$login='vb';
$statment1=$connection->query("SELECT * FROM users");
$statment2=$connection->query("SELECT * FROM worker");
$myarray=array();

while($reultsFrom = $statment1->fetch()){
    if($reultsFrom['pass']==$pass && $reultsFrom['name']==$name){
        $login='userlogin';

    }
}
while($reultsFrom = $statment2->fetch()){
    if($reultsFrom['pass']==$pass && $reultsFrom['name']==$name){
        $login='workerlogin';

    }
}
echo json_encode ($login);
?>