<?php
try{
    $connection = new PDO('mysql:host=localhost;dbname=sanaye','root','');
    $connection ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $exc){
    echo $exc ->getMassage();
    echo "NO connection";
}
$login='not';
$name=$_POST['nameOfWorker'];
$date=$_POST['date'];
$token=$_POST['mytoken'];
$time="";
$statment1=$connection->query("SELECT * FROM workerorders");
while($reultsFrom = $statment1->fetch()){
    if($reultsFrom['date']==$date && $reultsFrom['nameOfWorker']==$name){
        $time =$reultsFrom['time'];
        $time=$time."h";
        $login='This date is reserved';

    }
}
echo json_encode ($time);
?>