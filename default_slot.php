<?php
require('connect.php');

$statment=$connection->query("SELECT * FROM `slot`");
$markers=$statment->fetchAll(PDO::FETCH_ASSOC);
$count=$statment->rowCount();
if($count==0){
    echo json_encode("NO Date");   
}
else{echo json_encode($markers);}



?>