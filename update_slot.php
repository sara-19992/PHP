<?php
require('connect.php');
$phoneworker=$_POST['phoneworker'];
$date=$_POST['date'];
$timestart=$_POST['timestart'];
$timeend=$_POST['timeend'];
$from_before=$_POST['from_before'];
$to_before=$_POST['to_before'];
$period1=$_POST['period1'];
// $period2=$_POST['period2'];
$update='update';

$statment=$connection->query("SELECT * FROM `slot`WHERE `slot`.`phoneworker`='$phoneworker'and `slot`.`date`='$date'");
while($reultsFrom = $statment->fetch()){
    
    if($reultsFrom['timestart']==$timestart && $reultsFrom['timestart']!=$from_before  && $reultsFrom['Am_Pm']==$period1){
        $update='cant update';
    }
    if($reultsFrom['timeend']==$timeend&& $reultsFrom['timeend']!=$to_before && $reultsFrom['Am_Pm']==$period1){
        $update='cant update';
    }
}
$id =rand(0,2000000);
if($update=='update'){

   
    $statment=$connection->query("UPDATE `slot` SET `timeend` = '$timeend',`timestart` = '$timestart' WHERE `slot`.`phoneworker`='$phoneworker'and `slot`.`date`='$date'");

}

echo json_encode($update);


?>