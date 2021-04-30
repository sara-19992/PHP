<?php
require('connect.php');
$phoneworker=$_POST['phoneworker'];
$date=$_POST['date'];
$timestart=$_POST['timestart'];
$timeend=$_POST['timeend'];
$period1=$_POST['period1'];
// $period2=$_POST['period2'];
$time=$_POST['time'];
$reject='not regect';
$statment=$connection->query("SELECT * FROM `slot`WHERE `slot`.`phoneworker`='$phoneworker'and `slot`.`date`='$date'ORDER BY `time` ASC");
while($reultsFrom = $statment->fetch()){
    if($reultsFrom['timestart']==$timestart && $reultsFrom['timeend']==$timeend && $reultsFrom['Am_Pm']==$period1){
        $reject='regect';

    }
    if($reultsFrom['timestart']==$timestart && $reultsFrom['Am_Pm']==$period1){
        $reject='regect';
    }
    if($reultsFrom['timeend']==$timeend && $reultsFrom['Am_Pm']==$period1){
        $reject='regect';
    }
}
$id =rand(0,2000000);
if($reject=='not regect'){

    $statment=$connection->query("INSERT INTO slot (id,phoneworker, timestart, timeend ,date,time,Am_Pm,states) VALUES ('$id','$phoneworker','$timestart' ,'$timeend','$date','$time','$period1','not')");

}

echo json_encode($reject);


?>