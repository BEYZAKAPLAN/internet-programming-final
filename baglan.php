<?php  
try{

    $db= new PDO("mysql:host=localhost;dbname=kargocu;charset=utf8",'root','12345678');
    //echo "veritaban─▒";
}catch(PDOException $e){
echo $e ->getMessage();
}



?>