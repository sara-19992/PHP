<?php
require ("connect.php");
$workerphone=$_POST['workerphone'];
$phoneuser=$_POST['phoneuser'];
$namelast=$_POST['namelast'];
$namefirst=$_POST['namefirst'];
$nameofwork=$_POST['nameofwork'];
$describes=$_POST['describes'];

$id =rand(0,2000000);

$login='';

$statment=$connection->query("INSERT INTO `longtimeorder` (`namefirst`, `namelast`, `phoneuser`, `workerphone`, `nameofwork`,`id`, `describes`) VALUES ('$namefirst','$namelast' ,'$phoneuser','$workerphone','$nameofwork','$id','$describes')");

$count=$statment -> rowCount();
if($count>0){

    echo json_encode("sucsses add");}

?>