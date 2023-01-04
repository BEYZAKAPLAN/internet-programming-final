<?php  
try{

    $db= new PDO("mysql:host=localhost;dbname=kargocu;charset=utf8",'root','12345678');
    //echo "veritabanı";
}catch(PDOException $e){
echo $e ->getMessage();
}



?>