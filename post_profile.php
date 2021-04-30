<?php
require('connect.php');


$statment=$connection->query("SELECT `post`.*,`worker`.* FROM `post`,`worker` WHERE `post`.`phoneworker` =`worker`.`phone` ORDER BY `post`.`date` DESC");

$myarray=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($myarray);

?>