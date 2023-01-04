<?php

require 'db.php';

?>



<br><br><br><br>
<div>

	<?php

//veritabanından müşteri adlarını ve takip numaralarını çektiriyoruz.
	$sorgu = $db ->prepare("SELECT adsoyad, takipkodu FROM musteri ORDER BY id DESC");
	$sorgu->execute(array());
	$yazdir =$sorgu ->fetchAll(PDO::FETCH_ASSOC);

	//sıra numarası için i değişkenini sıfırdan başlatıyoruz
	$i =0;

//kayıtlı müşteri varsa yazdıracaktır.
	if ($yazdir) {

echo "<ul>Kayıtlı Müşteriler:<ul><br>";

//müşterileri yazdırmak için döngüye sokuyoruz
 foreach ($yazdir as $key) {

 	//döngü her çalıştığında sıra nuramız bir artıyor.
 	$i++;

//extract fonksiyonu ile döngümüzü parçalıyoruz
 	extract($key);

echo "<li> $adsoyad / Takip kodu: <font color='white'>$takipkodu</font></li>";


 }
 echo "</ul>"; 

//yoksa bunu;
}  else {
 	echo "müşteri yok.";
 }

	?>
<?php 
					
					$kur = simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");

foreach ($kur -> Currency as $cur) {
	if ($cur["Kod"] == "USD") {
		$usdAlis  = $cur -> ForexBuying;
		$usdSatis = $cur -> ForexSelling;
	}

	if ($cur["Kod"] == "EUR") {
		$eurAlis  = $cur -> ForexBuying;
		$eurAlis = $cur -> ForexSelling;
	}
}

					?>
					<div id="dvz" style="width:15%">
                <h3>Döviz Kuru</h3>
                <hr>
                <b>USD Alış: </b> <?php echo $usdAlis; ?> <br>
                <b>USD Satış: </b> <?php echo $usdSatis; ?>
                <hr>
                <b>EURO Alış: </b> <?php echo $eurAlis; ?> <br>
                <b>EURO Satış: </b> <?php echo $eurAlis; ?>
                </div>
                <div id="dvz1">
                    <!-- weather widget start -->
                    <img src="https://w.bookcdn.com/weather/picture/3_37312_1_21_137AE9_160_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=&domid=765&anc_id=78855" 
                    alt="booked.net"/><!-- weather widget end -->
                </div>
	        	</div>
	     

</div><br><br><br><br>