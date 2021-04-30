<?php
require('connect.php');

$phone=$_POST['phone'];

$statment=$connection->query("SELECT Count(comment.com_worker) as count FROM comment WHERE comment.com_worker='$phone'");


$comment=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($comment);

?>