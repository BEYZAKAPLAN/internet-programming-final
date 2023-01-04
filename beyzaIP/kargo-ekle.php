<?php
 require 'db.php';
 ?>


<br><br><br><br>
<div>
	<?php 

//kargo ekle butonuna basılmışsa if bloğumuz çalışmaya başlıyor
	if (isset($_POST['kargoEkle'])) {

//inputtan müşteri adını ve soyadını alıyoruz
		$adsoyad = $_POST['adsoyad'];

//inputtan müşteri telefonunu alıyoruz
		$telno = $_POST['telno'];

//inputtan müşteri adres bilgilerini alıyoruz
		$adres = $_POST['adres'];

//kargo durumunu alıyoruz
		$durum = $_POST['durum'];

//müşterinin kargo takibini yapabilmesi için rand fonksiyonuyla rastgele sayılar üretip kargo takip kodu oluşturuyoruz.
		$takipkodu = rand();

//inputtan gelen veriler boşmu kontrol ettiriyoruz
		if (!$adsoyad or !$telno or !$adres or !$durum) {
			echo "boş alan bırakmayın.";

//değilse else bloğu çalışmaya başlıyor
		}  else {

//herhangi bir sorun yoksa veritabanı ekleme işlemi çalışıyor
			$sorgu = $db->prepare("INSERT INTO musteri SET 
				adsoyad =:a, 
				telno =:b, 
				adres=:c, 
				takipkodu=:d,
				durum =:e");

//inputtan gelen verileri, veritabanına ekleme işlemi gerçekleşiyor
			$ekle = $sorgu->execute(array(
				'a'=>$adsoyad,
				'b'=>$telno,
				'c'=>$adres,
				'd'=>$takipkodu,
				'e'=>$durum
			));

//veritabanına ekleme işlemi başarılımı değilmi if ile kontrol ettiriyoruz.
			if ($ekle) {
				echo "müşteri girişi yapıldı";

//herhangi bir hata varsa errorInfo() fonksiyonu ile yazdırıyoruz
			} else {
				$row=$sorgu->errorInfo();
				echo "Mysql Hatası:".$row[2];
			}

		}
	}

	?>

	<form action="" method="POST">

		<fieldset>
			<legend>Ad & Soyad</legend>
			<input type="text" name="adsoyad">
		</fieldset><br>

		<fieldset>
			<legend>Tel No</legend>
			<input type="text" name="telno" maxlength="11">
		</fieldset><br>


		<fieldset>
			<legend>Kargo durumu</legend>
			<input type="radio" name="durum" value="1" checked="">Teslim edildi<br>
			<input type="radio" name="durum" value="2">Teslim edilmedi  
		</fieldset><br>


		<fieldset>
			<legend>Adres</legend>
			<textarea name="adres" rows="5" cols="30"></textarea>
		</fieldset><br>

		<button name="kargoEkle">Kargo Ekle</button>
		<a href="index.php">Anasayfaya Geri Dön</a>

	</form>



	<form action="islem.php" method="POST">


</div>

<div class="form-group">
  <form action="islem.php" method="post">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Güncelleme<span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="first-name" name="instagram"  placeholder="instagram" class="form-control col-md-7 col-xs-12" required>
    <input type="text" id="first-name" name="eposta"   placeholder="eposta" class="form-control col-md-7 col-xs-12" required>
    <input type="text" id="first-name" name="numara"  placeholder="numara" class="form-control col-md-7 col-xs-12" required>
    <button type="submit" name="submit">Gönder</button>
    </form>
  </div>
</div>

</form>


</div><br><br><br><br>