<?php 
try{
    $connection = new PDO('mysql:host=localhost;dbname=sanaye','root','');
    $connection ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
}
    catch(PDOException $exc){
        echo $exc ->getMassage();
        echo "NO connection";
    }
?>