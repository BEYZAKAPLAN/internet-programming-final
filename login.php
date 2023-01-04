<?php
require 'db.php';
?>


<?php 

$kullanici_adi = $_POST['kullanici'];
$sifre = $_POST['sifre'];

if(isset($_POST['submit']))
{

if(!$kullanici_adi){echo "Lutfen Kullanici Adinizi Girin!";}
else if(!$sifre){echo "Lutfen Sifrenizi Giriniz!";}
else
{
    
    $kullanici_sor = $db ->prepare('SELECT * FROM `login` WHERE kul_adi = ? && sifre = ?');  
    $kullanici_sor -> execute([$kullanici_adi, $sifre]);
     $say = $kullanici_sor -> rowCount();
    if($say == 1) // Basarili Giriste Calisir
    {
        echo "Giris Basarili";
        header("Refresh:3; kargo-ekle.php");
    }
    else // Basariiz Giriste Calisir
    {
        echo "yanlış girişş";

        header("Refresh:3; index.php");
    }
}

//index.php?getir=kargo-ekle

}


   



?>




</body>
</html>