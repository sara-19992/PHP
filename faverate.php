
<?php
require('connect.php');
$phoneuser=$_POST['phoneuser'];

$statment=$connection->query("SELECT  `favarate`.*,`worker`.* FROM `favarate`,`worker` WHERE `favarate`.`phoneuser` = '$phoneuser' and `favarate`.`phoneworker` = `worker`.`phone`");

$favaret=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($favaret);

?>