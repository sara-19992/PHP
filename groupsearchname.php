<?php
require('connect.php');

$name1=$_POST['name1'];
$name2=$_POST['name2'];
//$namefirst_last = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $namefirst_last);
//$namefirst_last = rtrim($namefirst_last);

// $names = explode(" ", $name);
// echo $names[0]; // piece1
// echo $names[1]; // piece2
// $name1=$names[0];
// $name2=$names[1];
$statment=$connection->query("SELECT * FROM `worker` WHERE `worker`.`namefirst` = '$name1' and `worker`.`namelast` = '$name2'");

$worker=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($worker);

?>