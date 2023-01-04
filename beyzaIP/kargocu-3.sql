-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:8889
-- Üretim Zamanı: 04 Oca 2023, 11:14:05
-- Sunucu sürümü: 5.7.34
-- PHP Sürümü: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kargocu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fiyatlar`
--

CREATE TABLE `fiyatlar` (
  `id` int(11) NOT NULL,
  `5-10` int(11) DEFAULT NULL,
  `10-20` int(11) DEFAULT NULL,
  `20-30` int(11) DEFAULT NULL,
  `30-50` int(11) DEFAULT NULL,
  `5-10YURTDİŞİ` varchar(1000) NOT NULL,
  `10-20YURTDİŞİ` varchar(1000) NOT NULL,
  `20-30YURTDİŞİ` varchar(1000) NOT NULL,
  `30-50YURTDİŞİ` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `fiyatlar`
--

INSERT INTO `fiyatlar` (`id`, `5-10`, `10-20`, `20-30`, `30-50`, `5-10YURTDİŞİ`, `10-20YURTDİŞİ`, `20-30YURTDİŞİ`, `30-50YURTDİŞİ`) VALUES
(1, 57, 89, 130, 245, '565', '645', '762', '878');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakimizda`
--

CREATE TABLE `hakimizda` (
  `hakimizda` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakimizda`
--

INSERT INTO `hakimizda` (`hakimizda`, `id`) VALUES
('2022 yılında kurulan cargo Kargo 850’den fazla şubesi, 9 tanesi Teknolojik Aktarma Merkezi olmak üzere toplam 27 aktarma merkezi, 35 minihub, 14 bölge müdürlüğü, 11.000’in üzerinde çalışanı, yaklaşık 3500 kara taşıma aracı ile hizmet vermektedir. kargo Kargo, Türkiye’nin bir ucundan diğer ucuna ve dünyada 220 farklı ülkede, günde 700 bin adrese dünya standartlarında hizmet ulaştıran Türkiye’nin lider kargo şirketlerindendir. \r\n\r\nSektörde ilk Teknolojik Aktarma Merkezlerine sahip kargo şirketi olan cargo Kargo, bu teknoloji sayesinde saatte 65 bin kargoyu yüksek hızda ayrıştırıp, el değmeden hatasız olarak hat araçlarına yükleyerek, hasarsız teslimat sağlamaktadır.\r\n\r\n2000 yılından bu yana Türkiye’ye 5 milyar dolardan fazla yatırım getirmeyi başaran Turkven’in danışmanlığını yaptığı kurumsal yatırımcılar ve başta Haydar Sancak ile Suat Sancak olmak üzere, Sancak Ailesi 2017 yılında kargo Kargo’yu satın almıştır.\r\n\r\nTürkiye’de kargo taşımacılığı sektörünün gelişiminde başrol oynayan, dünya standartlarındaki hizmet anlayışı ile ülkemiz taşımacılık sektörüne çağdaş dinamikler kazandırmış olan cargo Kargo güçlenen sermaye yapısıyla teknolojik yatırımlarına devam etmektedir.', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletişim`
--

CREATE TABLE `iletişim` (
  `numara` int(11) NOT NULL,
  `eposta` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletişim`
--

INSERT INTO `iletişim` (`numara`, `eposta`, `instagram`, `id`) VALUES
(12345, '0', '123', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `kul_adi` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `login`
--

INSERT INTO `login` (`id`, `kul_adi`, `sifre`) VALUES
(1, '1', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
--

CREATE TABLE `mesaj` (
  `id` int(11) NOT NULL,
  `adi` varchar(50) NOT NULL,
  `soyadı` varchar(50) NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteri`
--

CREATE TABLE `musteri` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(150) NOT NULL,
  `telno` char(11) NOT NULL,
  `adres` text NOT NULL,
  `takipkodu` varchar(20) NOT NULL,
  `durum` int(11) NOT NULL,
  `tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `musteri`
--

INSERT INTO `musteri` (`id`, `adsoyad`, `telno`, `adres`, `takipkodu`, `durum`, `tarih`) VALUES
(9, 'mulkan belirsiz', '05011111111', 'safkmah falan filan apt no 9 evde yokuz', '123456', 1, '2022-12-26 18:07:59'),
(10, 'Beyza Falanca kisi', '05551111111', 'istanbul / Bagcilkar falan filan', '98765', 1, '2022-12-26 18:19:03'),
(11, 'Captan Amerika', '24883598', 'Boston Amerika falan filan', '345678', 2, '2022-12-26 18:21:54'),
(12, 'beyza güngörmedi', '0444213123', 'adresini bilinmio', '1670510438', 2, '2022-12-26 18:23:28'),
(13, 'muslıh', '122342353', 'kenya uhıugrdhjgıod', '12442081', 2, '2022-12-28 15:30:19'),
(14, 'muhammed', '34335456', '2434rdfdxfgfc', '1196063695', 1, '2022-12-31 06:21:56'),
(15, 'asude', '43265476578', 'fransa', '481498648', 2, '2023-01-02 15:12:46'),
(16, 'idil', '97986998697', 'çıkmaz sokak mühendislik fakültesi', '370399574', 1, '2023-01-02 23:47:55'),
(17, 'yaman kaplan', '98574635', 'istanbul', '391987540', 1, '2023-01-03 23:10:43');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sartlar`
--

CREATE TABLE `sartlar` (
  `şartlar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sartlar`
--

INSERT INTO `sartlar` (`şartlar`) VALUES
(' \r\n\r\nSİTE KULLANIM KOŞULLARI, GİZLİLİK POLİTİKASI VE GÜVENLİK\r\n\r\n \r\n\r\n \r\n\r\nSite Kullanım Koşulları\r\n\r\n \r\n\r\nArkas Konteyner Taşımacılık A.Ş. (“www.arkasline.com.tr”) Web Sitesi’ne hoş geldiniz!\r\n\r\nBu siteyi kullandığınızda aşağıdaki koşulları kabul etmiş sayılacaksınız.\r\n\r\nBu koşulları kabul etmiyorsanız lütfen bu siteye girmeyiniz.\r\n\r\n \r\n\r\nwww.arkasline.com.tr web sitesinin yayınlanması, hiçbir kişi ve/veya kuruluşa herhangi bir konuda herhangi bir taahhüdü içermemektedir. Sitede yer alan bilgiler, kişi ve kuruluşlara yönelik talimat verilmesi, hukuken onların herhangi bir doğrultuya yönlendirmesi amaçlarını ve tebligat niteliğini taşımamaktadır. Web sitemizde yayınlanan çalışmalar, kaynak gösterilmek suretiyle yayımlanabilir; ancak bu bilgilerin ticari amaçlarla kullanımı Arkas Konteyner Taşımacılık A.Ş.’nin yazılı iznine tabidir. www.arkasline.com.tr web sitesinde yayınlanan bilgilerin güncel ve doğru bilgilerle yayınlanmasını temin etmek amacıyla elinden gelen çabayı göstermekle birlikte, Arkas Konteyner Taşımacılık A.Ş.’in bu bilgilerin doğruluğu ve tamlığı konusunda açık veya zımni şekilde kefalet veya garanti verdiği yolunda hiçbir taahhüdü bulunmamaktadır. Kullanıcılar sisteme girmeleri ile birlikte, www.arkasline.com.tr tarafından yayınlanan bilgilerin kullanımı sonucunda doğrudan veya dolaylı bir kayıp veya zarar doğması halinde, bu durumun Arkas Konteyner Taşımacılık A.Ş.’ne hiçbir borç, sorumluluk veya mükellefiyet yüklemeyeceğini açık olarak kabul etmiş sayılırlar. Sitede yer alan bütün metinler ve/veya hizmetler, önceden kullanıcılara bildirimde bulunmaksızın Arkas Konteyner Taşımacılık A.Ş. tarafından değiştirilebilir. www.arkasline.com.tr web sitesi ön bilgi verilmeden kullanım dışı bırakılabilir. www.arkasline.com.tr web sitesinde yayınlanmış bilgiler, ya da bilgilere dayanılarak yapılan işlemlerden veya siteye ulaşılamamasından doğan veya doğacak zarar ve/veya kayıplardan dolayı sorumluluk kabul edilmez. İnsan hataları, teknik veya diğer faktörler nedeniyle hata veya bilgi eksikliği/yanlışlığının veya güncellik yitirmesinin gerçekleşme olasılığı vardır. www.arkasline.com.tr, sistemde yer alan bilgilerdeki hata ve eksikliklerden hiçbir şekilde sorumlu bulunmamaktadır. Bu site Arkas Konteyner Taşımacılık A.Ş.’e ait olup site içerisindeki bilgilerin bir kısmı kendi bir kısmı da diğer kaynaklardan sağlanarak Arkas Konteyner Taşımacılık A.Ş. tarafından yayınlanmaktadır. Sitemizden bağlantı yapılarak ulaşılan diğer sitelerdeki bilgiler, ilgili kuruluşlar tarafından yayınlanmakta olup, Arkas Konteyner Taşımacılık A.Ş.’yi hiç bir şekilde bağlamamaktadır.\r\n\r\n \r\n\r\nGizlilik Politikası ve Güvenlik:\r\n\r\nArkas Konteyner Taşımacılık A.Ş.. (“www.arkasline.com.tr”), internet sitesini ziyaret eden herkesin özel hayatına saygı göstermektedir. Site ziyaretçileri hakkında toplanan her türlü bilgi öncelikle site ziyaretçilerinin talep ettikleri veya edebilecekleri hizmetleri sunmak için ve sonra da şirket olarak daha iyi hizmet verebilmek amacına uygun Arkas Konteyner Taşımacılık A.Ş.. hiçbir suretle bu amacla toplanan kişisel bilgileri üçüncü kişi ve/veya kurumlar ile baska amaclarla paylasmamayı taahhüt eder. Kişisel olarak site ziyaretçileri olarak sizlerle ile ilgili hangi bilgilere sahip olduğunu öğrenme ve gerekirse düzeltmeler yapma hakkına sahipsiniz; ayrıca bu bilgilerin kullanılmamasını talep hakkına sahipsiniz. Talepleriniz güvenlik, mali veya hukuki sebepler ile yerine getirilemeyebilir. www.arkasline.com.tr’nin sayfalarından birinde veya daha fazlasında, www.arkasline.com.tr harici internet sitelerine bağlantılar olabilir. Arkas Konteyner Taşımacılık A.Ş., kendisinin işletmediği bu sitelerin kendilerine özgü gizlilik politikalarından hiç bir şekilde sorumlu tutulamaz. Internet adresi www.arkasline.com.tr ile başlamayan siteler www.arkasline.com.tr ile ilişkisi olmayan sitelerdir. Bu siteyi kullanarak Arkas Konteyner Taşımacılık A.Ş.’ın Gizlilik Politikasını kabul etmiş sayılmaktasınız. Arkas Konteyner Taşımacılık A.Ş. her zaman bu politikada değişiklik, ilave veya çıkartma yapma hakkını saklı tutar. Bu hüküm ve şartlarda yapılan değişikliklerin ardından bu web sitesini kullanmaya devam etmeniz, bu değişiklikleri kabul ettiğiniz anlamına gelmektedir.');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `fiyatlar`
--
ALTER TABLE `fiyatlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakimizda`
--
ALTER TABLE `hakimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletişim`
--
ALTER TABLE `iletişim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesaj`
--
ALTER TABLE `mesaj`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `musteri`
--
ALTER TABLE `musteri`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `fiyatlar`
--
ALTER TABLE `fiyatlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `hakimizda`
--
ALTER TABLE `hakimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `iletişim`
--
ALTER TABLE `iletişim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `musteri`
--
ALTER TABLE `musteri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
