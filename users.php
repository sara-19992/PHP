<?php
//require('connect.php');
try{
    $connection = new PDO('mysql:host=localhost;dbname=sanaye','root','');
    $connection ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $exc){
    echo $exc ->getMassage();
    echo "NO connection";
}
$name=$_POST['name'];
$timeChosen=$_POST['timeChosen'];
echo $timeChosen;
$phone=$_POST['phone'];
$statment=$connection->query("INSERT INTO requestfromuser (name, phoneNo, time) VALUES ('$name','$phone','$timeChosen')");
$count=$statment -> rowCount();

if($count>0){

    echo json_encode("sucsses add");}
?>