<?php
 require 'db.php';
 ?>




<?php 



if (!isset($_GET['getir'])) {
	
	$_GET['getir'] = 'anasayfa';
} else {
	$getir = $_GET['getir'];
}

switch ($_GET['getir']) {

	case 'anasayfa':
	require_once 'html/header.php';
	
	require_once 'anasayfa.php';
	require_once 'html/footer.php';
	break;
	
    case 'hakkımızda':
	require_once 'html/header.php';
	require_once 'hakkımızda.php';
	require_once 'html/footer.php';
	break;

	case 'iletişim':
	require_once 'html/header.php';
	require_once 'iletişim.php';
	require_once 'html/footer.php';
	break;

	case 'sartlar':
	require_once 'html/header.php';
	require_once 'sartlar.php';
	require_once 'html/footer.php';
	break;
				
	case 'kargo-takip':
	require_once 'html/header.php';
	require_once 'kargo-takip.php';
	require_once 'html/footer.php';
	break;

	case 'kargo-ekle':
	require_once 'html/header.php';
	require_once 'kargo-ekle.php';
	require_once 'html/footer.php';
	break;

	case 'fiyatlistesi':
	require_once 'html/header.php';
	require_once 'fiyatlistesi.php';
	require_once 'html/footer.php';
	break;

	case 'hata':
	echo "aradığınız sayfa bulunamadı";
	break;

	default:
	header('location: index.php?getir=404');
	exit();
	break;
}


?>