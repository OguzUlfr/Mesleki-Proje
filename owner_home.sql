-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Haz 2022, 17:28:07
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `owner_home`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(300) NOT NULL,
  `link` varchar(250) NOT NULL,
  `alan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`id`, `name`, `img`, `link`, `alan`) VALUES
(1, 'Koltuk', 'https://i.hizliresim.com/h7ym8z0.png', 'koltuk', 'mobilya'),
(2, 'Masa', 'https://i.hizliresim.com/q7io8k8.png', 'masa', 'mobilya'),
(3, 'yatak', 'https://i.hizliresim.com/qxdn47n.png', 'yatak', 'mobilya'),
(4, 'Dolap', 'https://i.hizliresim.com/68sdkd7.png', 'dolap', 'mobilya'),
(5, 'sandalye', 'https://i.hizliresim.com/mo87nmh.png', 'sandalye', 'mobilya'),
(6, 'lamba', 'https://i.hizliresim.com/8pvoa21.png', 'lamba', 'mobilya'),
(7, 'saksı', 'https://i.hizliresim.com/pfu034z.png', 'saksi', 'mobilya'),
(8, 'bulasik', 'https://i.hizliresim.com/bbl3zix.png', 'bulasik', 'esya'),
(9, 'buzdolabi', 'https://i.hizliresim.com/13twd8q.png', 'buzdolabi', 'esya'),
(10, 'camasir', 'https://i.hizliresim.com/jve8kjd.png', 'camasir', 'esya'),
(11, 'firin', 'https://i.hizliresim.com/twfuksa.png', 'firin', 'esya'),
(12, 'klima', 'https://i.hizliresim.com/b2ymi7c.png', 'klima', 'esya'),
(13, 'ocak', 'https://i.hizliresim.com/r967n6w.png', 'ocak', 'esya'),
(14, 'utu', 'https://i.hizliresim.com/i6tboh6.png', 'utu', 'esya');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `index_slider`
--

CREATE TABLE `index_slider` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `index_slider`
--

INSERT INTO `index_slider` (`id`, `name`, `link`) VALUES
(1, 'yatak', 'https://i.hizliresim.com/lw4inov.png'),
(2, 'koltuk', 'https://i.hizliresim.com/t7wcwee.png'),
(3, 'komidin', 'https://i.hizliresim.com/he7t58l.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `alan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`id`, `title`, `brand`, `img`, `price`, `category`, `alan`) VALUES
(1, 'Ticari kullanım için ücretsizdir\r\nAtıfta bulunulmasına gerek yoktur', 'Beko', 'https://productimages.hepsiburada.net/s/32/1500/10360442126386.jpg', 2340, 'klima', 'esya'),
(2, 'Ticari kullanım için ücretsizdir\r\nAtıfta ', 'Evkur', 'https://cdn.evkur.com.tr/c/Product/thumbs/b3_li49qb_500.jpg', 240, 'koltuk', 'mobilya'),
(3, 'Essential 4-29W E27', 'Philips', 'https://cdn.cimri.io/image/1000x1000/philipsessentialwebeyazledlamba_205832953.jpg', 89, 'lamba', 'mobilya'),
(4, 'iQ300 Solo Inox SN235I00JT\r\n', 'Siemens', 'https://media3.bsh-group.com/Product_Shots/1600x900/MCSA02507131_i4367_1881210_SN235I00JT_CMYK_def.png', 456, 'bulasik', 'esya'),
(5, ' KGA76PIF0N Alttan Donduruculu Buzdolabı', 'Bosch', 'https://media3.bosch-home.com/Product_Shots/435x515/13147355_KGA76PIF0N_STP_def.png', 378, 'buzdolabi', 'esya'),
(6, '10120 MA 10 Kg 1200 Devir Çamaşır Makinesi', 'Arçelik', 'https://st1.myideasoft.com/shop/vr/10/myassets/products/866/arcelik-10120-ma-10-kg-camasir-makinesi-1.png?revision=1618318564', 234, 'camasir', 'esya'),
(7, '70 Litre Turbo Mini Fırın Beyaz', 'Simfer', 'https://cdn.evkur.com.tr/c/Product/thumbs/simfer-7002-70-litre-turbo-mini-firin-beyaz-3_c3lti5_500.jpg', 970, 'firin', 'esya'),
(8, 'Silver Cam 4 Gözü Gazlı Ankastre Ocak', 'Simfer', 'https://www.simfer.com.tr/simfer-3537-silver-cam-4-gozu-gazli-ankastre-ocak-1442-gazli-ocaklar-simfer-223328-37-K.jpg', 567, 'ocak', 'esya'),
(9, 'Steamline Buharlı Ütü', 'Arzum', 'https://cdn.arzum.com.tr/ar6025-steamline-buharli-utu-siyah-buharl-t-arzum-ar6025-4003-31-B.png', 768, 'utu', 'esya'),
(10, 'Wood Açılır Mutfak Masası', 'Mobilya Cini', 'https://mobilyacini.com/wp-content/uploads/2020/03/mobilya_cini_Barok_Mutfak_masa_sandalye_takimi_ahsap_mutfak_masasi-6.jpg', 3456, 'masa', 'mobilya'),
(11, 'Diamond Yatak 160x200cm', 'Doğtaş', 'https://staticdogtas.mncdn.com/images/thumbs/001/0013388_diamond-yatak-160x200-cm_1920.jpeg', 234, 'yatak', 'mobilya'),
(12, 'ETİ 4 KAPILI DOLAP', 'vivense', 'https://img.vivense.com/1920x1280/images/0ab063e7677544d693811f3cb95c2aaf.jpg', 589, 'dolap', 'mobilya'),
(13, 'Blueline Sandalye - Gri - ', 'Modalife Mobilya', 'https://st1.myideasoft.com/shop/bo/48/myassets/products/523/tekilller-moduler-10.jpg?revision=1549270945', 2345, 'sandalye', 'mobilya'),
(14, 'Büyük Boy Beton Saksı Bitki Ve Çiçek Saksısı', 'SASA HOME', 'https://cdn.dsmcdn.com/ty16/product/media/images/20201009/21/14644562/72709228/1/1_org_zoom.jpg', 9870, 'saksi', 'mobilya'),
(15, 'Roberto Koltuk Takımı', 'Alfemo', 'https://www.alfemo.com.tr/images/thumbs/0006327_rialto-koltuk-takimi_1440.jpeg', 546, 'koltuk', 'mobilya');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `shopping_basket`
--

CREATE TABLE `shopping_basket` (
  `id` int(11) NOT NULL,
  `mail` varchar(300) NOT NULL,
  `title` varchar(150) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `shopping_basket`
--

INSERT INTO `shopping_basket` (`id`, `mail`, `title`, `brand`, `price`, `img`) VALUES
(1, 'oguzulufer@gmail.com', 'ETİ 4 KAPILI DOLAP', 'vivense', 589, 'https://img.vivense.com/1920x1280/images/0ab063e7677544d693811f3cb95c2aaf.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `id` int(11) NOT NULL,
  `nameSurname` varchar(200) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `title` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`id`, `nameSurname`, `brand`, `title`) VALUES
(1, 'Oğuzhan Ülüfer', 'vivense', 'ETİ 4 KAPILI DOLAP'),
(2, 'Oğuzhan Ülüfer', 'vivense', 'ETİ 4 KAPILI DOLAP'),
(3, 'Oğuzhan Ülüfer', 'vivense', 'ETİ 4 KAPILI DOLAP'),
(4, 'Oğuzhan Ülüfer', 'Modalife Mobilya', 'Blueline Sandalye - Gri -'),
(5, 'Oğuzhan Ülüfer', 'Doğtaş', 'Diamond Yatak 160x200cm');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `mail` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `mail`, `password`) VALUES
(1, 'Oğuzhan', 'Ülüfer', 'oguzulufer@gmail.com', '1234');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `index_slider`
--
ALTER TABLE `index_slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `shopping_basket`
--
ALTER TABLE `shopping_basket`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `index_slider`
--
ALTER TABLE `index_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `shopping_basket`
--
ALTER TABLE `shopping_basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
