<?php
require('connect.php');

$phone=$_POST['phone'];

$statment=$connection->query("SELECT Count(post.id) as count FROM post WHERE post.phoneworker='$phone'");


$post=$statment->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($post);

?>