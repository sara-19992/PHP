<?php
require('connect.php');
$phoneworker=$_POST['phoneworker'];
$date=$_POST['date'];

$statment=$connection->query("SELECT * FROM `slot`WHERE `slot`.`phoneworker`='$phoneworker'and  `slot`.`date`='$date' and `slot`.`states`='not' ORDER BY `time` ASC");
$markers=$statment->fetchAll(PDO::FETCH_ASSOC);
$count=$statment -> rowCount();
if($count==0){
    echo json_encode($markers);
}
else{
    echo json_encode($markers);
}
?>