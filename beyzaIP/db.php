<?php 
//bağlantı değişkenleri
$sunucu     = "localhost";
$veritabani = "kargocu";
$kullanici  = "root";
$sifre      = "12345678";

//veritabanı bağlantısı
try{

	$db = new PDO("mysql:host=$sunucu; dbname=$veritabani; ",$kullanici, $sifre);
	$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8' ");

}catch (PDOException $hata){

	echo "Mysql Hatasi: ".$hata->getMessage();

}


?>