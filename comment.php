<?php
require ("connect.php");
$comuserfirstname=$_POST['comuserfirstname'];
$comlastname=$_POST['comlastname'];
$comment=$_POST['comment'];
$image=$_POST['image'];
$com_worker=$_POST['com_worker'];
$com_user=$_POST['com_user'];


$id =rand(0,2000000);

$login='';

$statment=$connection->query("INSERT INTO comment (comment, comuserfirstname, comlastname ,image,com_worker,com_user) VALUES ('$comment','$comuserfirstname' ,'$comlastname','$image','$com_worker','$com_user')");

$count=$statment -> rowCount();
if($count>0){

    echo json_encode("sucsses add");}
?>