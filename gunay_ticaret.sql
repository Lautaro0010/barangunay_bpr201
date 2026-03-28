-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 28 Mar 2026, 17:00:32
-- Sunucu sürümü: 8.0.44
-- PHP Sürümü: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gunay_ticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE IF NOT EXISTS `kategoriler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kategori_adi` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `kategori_adi`, `slug`) VALUES
(1, 'Ankastre Davlumbaz', 'ankastre'),
(2, 'Bulaşık Makineleri', 'bulasik'),
(3, 'Buzdolapları', 'buzdolaplari'),
(4, 'Ankastre Fırın', 'firin'),
(5, 'Mutfak Robotları', 'kucuk_evaletleri'),
(6, 'Ankastre Ocak', 'ocak'),
(7, 'Su Sebili', 'su_sebilleri'),
(8, 'Süpürgeler', 'supurge'),
(9, 'Çamaşır Makineleri', 'camasir');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `soyad` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `sifre` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `telefon` varchar(20) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `adres` text COLLATE utf8mb4_turkish_ci,
  `rol` varchar(20) COLLATE utf8mb4_turkish_ci DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `eposta` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `ad`, `soyad`, `email`, `sifre`, `telefon`, `adres`, `rol`) VALUES
(1, 'Baran ', 'Günay', 'gunaybaran00@gmail.com', '$2y$10$Yo3OpURG8gAdKidS.GSyUe3WXW9jqPvGkBlfhGh/FZBBHLKiSM2zy', '05467939499', NULL, 'admin'),
(5, 'Atakan ', 'Arici', 'atakanarici97@gmail.com', '$2y$10$RZv7/sHxc6eSTZmCRkFUluQHfYfWkdS5YChQrvZWccujC/iRJW7Ri', NULL, NULL, 'user'),
(9, 'Barış', 'Günay', 'barisgunay@gmail.com', '$2y$10$9MoHvDwRAjpi1JuBBD7uzuHKLMB5aoErus5RHPQMmD67lOkvGtY7u', NULL, NULL, 'user'),
(10, 'Fatih', 'Öz', 'ozfatih@gmail.com', '$2y$10$PD.uCB4XRdWEqEVYerOYD.tViqjzeGph/X7DVkSOS7.30bxkImzWi', NULL, NULL, 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

DROP TABLE IF EXISTS `sepet`;
CREATE TABLE IF NOT EXISTS `sepet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kullanici_id` int DEFAULT NULL,
  `urun_id` int DEFAULT NULL,
  `adet` int DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `kullanici_id` (`kullanici_id`),
  KEY `urun_id` (`urun_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `servis_talepleri`
--

DROP TABLE IF EXISTS `servis_talepleri`;
CREATE TABLE IF NOT EXISTS `servis_talepleri` (
  `id` int NOT NULL AUTO_INCREMENT,
  `isim_soyisim` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `adres` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `urun_tipi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ariza_aciklama` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `talep_tarihi` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

DROP TABLE IF EXISTS `siparisler`;
CREATE TABLE IF NOT EXISTS `siparisler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `order_id` varchar(64) DEFAULT NULL,
  `tarih` datetime DEFAULT NULL,
  `ad` varchar(255) DEFAULT NULL,
  `soyad` varchar(255) DEFAULT NULL,
  `adres` text,
  `sehir` varchar(100) DEFAULT NULL,
  `posta_kodu` varchar(20) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `toplam` decimal(10,2) DEFAULT NULL,
  `durum` varchar(50) NOT NULL DEFAULT 'Beklemede',
  `items` json DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`id`, `user_id`, `order_id`, `tarih`, `ad`, `soyad`, `adres`, `sehir`, `posta_kodu`, `telefon`, `payment_method`, `toplam`, `durum`, `items`) VALUES
(17, 8, 'ORD_694C9B6DE7E08', '2025-12-25 02:03:25', 'Adem', 'Türksoy', 'Şiremir Çavuş Mah. Kırıkçı Zeliha Ana Sokak NO:14 Mehmet Rıfat Efendi Kyk Yurdu MERKEZ/BARTIN', 'Bartın', '74110', '05467939499', 'Kredi Kartı', 81990.00, 'İptal Edildi', '[\"KGA76PIE0N (1 adet)\"]'),
(18, 5, 'ORD_694CEED2C7041', '2025-12-25 07:59:14', 'Atakan', 'Arıcı', 'Şiremir Çavuş Mah. Kırıkçı Zeliha Ana Sokak NO:14 Mehmet Rıfat Efendi Kyk Yurdu MERKEZ/BARTIN', 'Bartın', '74110', '05467939499', 'Kredi Kartı', 47320.00, 'Teslim Edildi', '[\"WGK264F0TR (1 adet)\"]'),
(19, 1, 'ORD_694CF3D0BC995', '2025-12-25 08:20:32', 'Baran', 'Günay', 'Şiremir Çavuş Mah. Kırıkçı Zeliha Ana Sokak NO:14 Mehmet Rıfat Efendi Kyk Yurdu MERKEZ/BARTIN', 'Bartın', '74110', '05467939499', 'Kredi Kartı', 79990.00, 'Beklemede', '[\"KDN86AID1N (1 adet)\"]'),
(20, 9, 'ORD_6963670557AE8', '2026-01-11 09:01:57', 'Barış', 'Günay', 'Şiremir Çavuş Mah. Kırıkçı Zeliha Ana Sokak NO:14 Mehmet Rıfat Efendi Kyk Yurdu MERKEZ/BARTIN', 'Bartın', '74110', '05467939499', 'Kredi Kartı', 45380.00, 'İptal Edildi', '[\"WGK264ZRTR (1 adet)\"]'),
(21, 10, 'ORD_69664CD92C1D2', '2026-01-13 13:47:05', 'Fatih', 'Öz', 'Bodrum', 'Muğla', '08888', '55555555555', 'Kredi Kartı', 179270.00, 'İptal Edildi', '[\"KFN96VPEA (1 adet)\", \"WGB254ASTR (1 adet)\"]');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kategori_id` int DEFAULT NULL,
  `model_kodu` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `baslik` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kisa_aciklama` text COLLATE utf8mb4_turkish_ci,
  `detayli_bilgi` text COLLATE utf8mb4_turkish_ci,
  `fiyat` decimal(10,2) DEFAULT NULL,
  `stok` int DEFAULT '10',
  `resim_yolu` varchar(255) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kategori_id` (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `kategori_id`, `model_kodu`, `baslik`, `kisa_aciklama`, `detayli_bilgi`, `fiyat`, `stok`, `resim_yolu`) VALUES
(1, 3, 'KGP86AXB0N', 'Serie 8 (Siyah)', 'Alttan Donduruculu Buzdolabı 186 x 86 cm Parmak izi bırakmayan siyah inoks, Total No Frost', '', 98130.00, 10, '694b3cab05750.webp'),
(2, 3, 'KGP86FIC0N', 'Serie 8', 'Alttan Donduruculu Buzdolabı 186 x 86 cm Kolay temizlenebilir Inox, Total No Frost', '', 87990.00, 10, '694b3ca11f781.webp'),
(3, 3, 'KFN96VPEA', 'Serie 4', 'Gardırop Tipi Buzdolabı 183 x 90.5 cm Kolay temizlenebilir Inox, Total No Frost', '', 112990.00, 10, '694b3c92ecc90.webp'),
(4, 3, 'KGP86FWC0N', 'Serie 8', 'Alttan Donduruculu Buzdolabı 186 x 86 cm Beyaz, Total No Frost', '', 83000.00, 10, '694b3c87e2bc2.webp'),
(5, 3, 'KGA76PIE0N', 'Serie 8', 'Alttan Donduruculu Buzdolabı 186 x 75 cm Kolay temizlenebilir Inox, Total No Frost', '', 81990.00, 10, '694b3c77ca8de.webp'),
(6, 3, 'KDN86AID1N', 'Serie 6', 'Üstten Donduruculu Buzdolabı 186 x 86 cm Kolay temizlenebilir Inox, Total No Frost', '', 79990.00, 10, '694b3c6b281e8.webp'),
(7, 9, 'WGB254ASTR', 'Serie 8', 'Çamaşır Makinesi 10 kg maks. 1400 dev./dak., Gümüş', '', 66280.00, 10, '694b3c5b25cbe.webp'),
(8, 9, 'WGB254A1TR', 'Serie 8', 'Çamaşır Makinesi 10 kg maks. 1400 dev./dak.', '', 64970.00, 10, '694b3c4d840d6.webp'),
(9, 9, 'WGB244A0TR', 'Serie 8', 'Çamaşır Makinesi 9 kg maks. 1400 dev./dak.', '', 59390.00, 10, '694b3c37d2c0f.webp'),
(10, 9, 'WGK264F0TR', 'Serie 6', 'Çamaşır Makinesi 11 kg maks. 1400 dev./dak.', '', 47320.00, 10, '694b3c251dda6.webp'),
(11, 9, 'WGK264ZRTR', 'Serie 6', 'Çamaşır Makinesi 11 kg maks. 1400 dev./dak., Antrasit', '', 45380.00, 10, '694b3c14f2b8b.webp'),
(12, 9, 'WGA244ZRTR', 'Serie 4', 'Çamaşır Makinesi 9 kg maks. 1400 dev./dak., Antrasit', '', 42020.00, 10, '694b3bfde9a52.webp'),
(13, 2, 'SMP6ENC60T', 'Serie 6', 'Solo Bulaşık Makinesi 60 cm Kolay Temizlenebilir Siyah Inox', '', 39490.00, 10, '694b3bef02629.webp'),
(14, 2, 'SMS4HMB62T', 'Serie 6', 'Solo Bulaşık Makinesi 60 cm Siyah', '', 45350.00, 10, '694b3be1571a5.webp'),
(15, 2, 'SMS6EMI70T', 'Serie 6', 'Solo Bulaşık Makinesi 60 cm Kolay Temizlenebilir Inox', '', 50510.00, 10, '694b3bce946ae.webp'),
(16, 2, 'SMS4HMW62T', 'Serie 6', 'Solo Bulaşık Makinesi 60 cm Beyaz', '', 45350.00, 10, '694b3bba04d30.webp'),
(17, 2, 'SMS6ECI83T', 'Serie 6', 'Solo Bulaşık Makinesi 60 cm Kolay Temizlenebilir Inox', '', 56550.00, 10, '694b3b9e80401.webp'),
(18, 2, 'SMS8YDI82T', 'Serie 8', 'Solo Bulaşık Makinesi 60 cm Kolay Temizlenebilir Inox', '', 62680.00, 10, '694b3b8274050.webp'),
(19, 4, 'HSG7584B1', 'Serie 8', 'Buharlı Ankastre Fırın 60 x 60 cm Siyah', '', 106450.00, 10, '694b3b7302d14.webp'),
(20, 4, 'HBJ559EH6T', 'Serie 6', 'Ankastre Fırın 60 x 60 cm', '', 36190.00, 10, '694b3b60e0ead.webp'),
(21, 4, 'HBJ559EW6T', 'Serie 6', 'Ankastre Fırın 60 x 60 cm Beyaz', '', 36190.00, 10, '694b3b4af28dd.webp'),
(22, 4, 'HBJ559EB6T', 'Serie 6', 'Ankastre Fırın 60 x 60 cm Siyah', '', 36190.00, 10, '694b3b2f6a1a5.webp'),
(23, 4, 'HBG7321W1', 'Serie 8', 'Ankastre Fırın 60 x 60 cm Beyaz', '', 62900.00, 10, '694b3b0c2d330.webp'),
(24, 4, 'HMG7241B1', 'Serie 8', 'Mikrodalga Fonksiyonlu Kompakt Ankastre Fırın 60 x 45 cm Siyah', '', 91350.00, 10, '694b3afd056b1.webp'),
(49, 1, 'DWK91LT60', 'Serie 8', 'Duvar Tipi Davlumbaz 90 cm Siyah Cam, Siyah', '', 65190.00, 10, '694b3aee81def.webp'),
(50, 1, 'DIB97IM50', 'Serie 4', 'Ada Tipi Davlumbaz 90 cm Paslanmaz çelik', '', 60450.00, 10, '694b3ad57ad34.webp'),
(51, 1, 'DWK97PJ70T', 'Serie 6', 'Duvar Tipi Davlumbaz 90 cm , Gri', '', 30350.00, 10, '694b3ac63ba77.webp'),
(52, 1, 'DWF95AJ20T', 'Serie 4', 'Duvar Tipi Davlumbaz 90 cm Beyaz Cam Yüzey, Beyaz', '', 26220.00, 10, '694b3ab48827a.webp'),
(53, 1, 'DWF95AJ60T', 'Serie 4', 'Duvar Tipi Davlumbaz 90 cm Siyah Cam, Siyah', '', 26220.00, 10, '694b3aa552673.webp'),
(54, 1, 'DWK67PJ70T', 'Serie 6', 'Duvar Tipi Davlumbaz 60 cm , Gri', '', 20880.00, 10, '694b3a958d8df.webp'),
(55, 8, 'BCRDW3BX', 'Robot Süpürge', 'Spotless Max Cam - Akıllı Navigasyonlu', '', 49990.00, 10, '694b3a80c7aea.webp'),
(56, 8, 'BCS1041WAC', 'Şarjlı Süpürge', 'Unlimited 10 Beyaz - Yüksek Emiş Güçlü Dikey', '', 27330.00, 10, '694b3a6c82582.webp'),
(57, 8, 'BGS41PET1', 'Serie 6', 'Toz torbasız Süpürge ProAnimal Kırmızı - Evcil Hayvan Dostu', '', 21510.00, 10, '694b3a5cc0682.webp'),
(58, 8, 'BGB6SIL1', 'Serie 6', 'Toz torbalı Süpürge ProSilence Beyaz - Ekstra Sessiz', '', 18350.00, 10, '694b3a4f247e8.webp'),
(59, 8, 'BGS7POW2', 'Serie 8', 'Toz torbasız Süpürge ProPower Siyah - Maksimum Güç', '', 16470.00, 10, '694b3a4354f0b.webp'),
(60, 8, 'BCS61113', 'Şarjlı Süpürge', 'Unlimited 6 Beyaz - Kompakt ve Hafif Tasarım', '', 13170.00, 10, '694b3a33d3626.webp'),
(61, 7, 'RDW1576', 'Su Sebili', 'Alttan Damacanalı - Şık Tasarım ve Kullanım Kolaylığı', '', 18480.00, 10, '694b3a2210036.webp'),
(62, 7, 'RDW1575', 'Su Sebili', 'Standart Üstten Damacanalı Sebil - Sıcak ve Soğuk Su', '', 18480.00, 10, '694b3a14a2344.webp'),
(63, 7, 'RDW1571', 'Su Sebili', 'Tezgah Üstü Mini Su Sebili - Yer Tasarrufu Sağlayan Tasarım', '', 17160.00, 10, '694b3a06d5563.webp'),
(64, 7, 'RDW1572', 'Su Sebili', 'Paslanmaz Çelik Su Sebili - Dayanıklı ve Hijyenik Gövde', '', 12770.00, 10, '694b39f8e01b5.webp'),
(65, 7, 'RDW1276', 'Su Sebili', 'Su Arıtmalı Sebil - Sürekli Taze ve Temiz Su', '', 9740.00, 10, '694b39eb945fe.webp'),
(66, 7, 'RU11A2AW0N', 'Su Arıtıcı', 'Ekonomik Su Sebili / Arıtma Ünitesi - Beyaz', '', 14980.00, 10, '694b39d35638e.webp'),
(67, 5, 'TQU60703', 'Serie 8', 'Tam Otomatik Kahve Makinesi VeroCafe Paslanmaz Çelik', '', 58200.00, 10, '694b39c745678.webp'),
(68, 5, 'TPU40307', 'Serie 4', 'Tam Otomatik Kahve Makinesi VeroCafe Metalik Gümüş & Siyah', '', 28060.00, 10, '694b39baee070.webp'),
(69, 5, 'MCM3501M', 'Mutfak Robotu', 'MultiTalent 3 - 800 W Siyah ve Paslanmaz Çelik Tasarım', '', 8940.00, 10, '694b39abacdec.webp'),
(70, 5, 'TCG4215', 'Tost Makinesi', 'Gümüş Tasarım - Ayarlanabilir Sıcaklık Kademeli', '', 5700.00, 10, '694b399e0c5d7.webp'),
(71, 5, 'MSM4B674', 'Serie 4', 'El Blenderı ErgoMaster 1000 W - Siyah & Antrasit', '', 4900.00, 10, '694b398f209cd.webp'),
(72, 5, 'TKA4M233', 'Filtre Kahve Makinesi', 'Kompakt Tasarım - Aromatik Kahve Keyfi', '', 3800.00, 10, '694b3976826d0.webp'),
(73, 6, 'PXX975DC1E', 'Serie 8', 'İndüksiyonlu Ocak 90 cm Çerçeveli Montaj', '', 119700.00, 10, '694b396c27591.webp'),
(74, 6, 'PVS811B16E', 'Serie 4', 'Davlumbaz Entegreli İndüksiyon Ocak, 80 cm Çerçevesiz Yüzey', '', 96490.00, 10, '694b395f2da85.webp'),
(75, 6, 'PCT9A5B90', 'Serie 6', 'Gazlı Ocak 90 cm Paslanmaz çelik', '', 60830.00, 10, '694b3954068ed.webp'),
(76, 6, 'PPQ7A2B20', 'Serie 6', 'Gazlı Ocak 75 cm Sert cam, Beyaz', '', 53290.00, 10, '694b3947be46b.webp'),
(77, 6, 'PPQ7A6B20', 'Serie 6', 'Gazlı Ocak 75 cm Sert cam, Siyah', '', 53290.00, 10, '694b39302da0d.webp'),
(78, 6, 'PPP6A9B20', 'Serie 6', 'Gazlı Ocak 60 cm Sert cam, Antrasit gri', '', 38100.00, 10, '694b390e71d20.webp');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `sepet`
--
ALTER TABLE `sepet`
  ADD CONSTRAINT `sepet_ibfk_1` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanicilar` (`id`),
  ADD CONSTRAINT `sepet_ibfk_2` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`id`);

--
-- Tablo kısıtlamaları `urunler`
--
ALTER TABLE `urunler`
  ADD CONSTRAINT `urunler_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategoriler` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
