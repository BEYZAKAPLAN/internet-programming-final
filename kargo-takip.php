<?php
 require 'db.php';
 ?>


<br><br><br><br>
<div>

	<?php 

	//kargobul butonuna basıldıysa if bloğumuz çalışmaya başlyor

	if (isset($_POST['kargobul'])) {

//inputtan gelen veriyi tk değişkenin aktarıp trim ile boşluklarını sildiriyoruz
		$tk = trim($_POST['takipKodu']);

//takip numarası boş ise ekrana hata değerini döndürecektir.
		if (!$tk) {
			echo "takip kodu boş olamaz.";

//takip numarası girildiyse else bloğu çalışacaktır
		} else {
			//veritabanı takip numarası ile inputtan gelen takip numarasını karşılaştırıyoruz eğer doğru ise müşteri bilgilerini yazdıracaktır.
			$sorgu = $db ->prepare("SELECT * FROM musteri WHERE takipkodu =:a");
			$sorgu->execute(array('a'=>$tk));
			$yazdir =$sorgu ->fetch(PDO::FETCH_ASSOC);

//inputtan gelen takip kodu ile db'de etkilenen satır varmı kontrol ettiriyoruz.
			if (!$sorgu ->rowCount()) {
				
		//eğer takip kodu yanlış veya geçersiz ise bize hata döndürecektir.
				echo "müşteri bulunamadı.<br><br><br><br><br>";
			} else {

			
?>

<fieldset>

<br>
<div><br></div>
<?php echo "Müşteri adı: ".$yazdir['adsoyad']; ?><br><br>
<legend><?php echo $yazdir['takipkodu']; ?> ' Takip numaralı kargo bilgileri</legend>
Adres:
<address>
	<?php echo $yazdir['adres']; ?>
</address><br><br>

<code>Kargo durumu: <?php 
if($yazdir['durum'] == 1): 
echo "<font class='teslim' color='green'>teslim edildi.</font>" ;
else: echo "<font>teslim edilmedi.</font>"; 
endif; ?></code><br><br>

Kabul tarihi: <?php echo $yazdir['tarih']."<br><bR>"; ?>

</fieldset><br><br><br>

			<?php

		}
	}
}

	?>


<?php if(isset($_POST['kargobul'])): ?>

<?php else: ?>

		<form action="" method="POST">
		<fieldset>
			<legend>Kargo takip kodu</legend>
			<input type="text" name="takipKodu" placeholder="Takip Kodu">
		</fieldset><br>
		<button  name="kargobul">Göster</button>
	</form>
</div><br><br><br><br>

	<?php endif; ?>
