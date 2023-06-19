-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 05:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lebeaute`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `ID_DETAIL_PESANAN` char(8) NOT NULL,
  `ID_PRODUK` char(8) NOT NULL,
  `ID_PESANAN` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokter_kecantikan`
--

CREATE TABLE `dokter_kecantikan` (
  `ID_DOKTER` char(8) NOT NULL,
  `Gambar_Dokter` varchar(255) NOT NULL,
  `Spesialis` varchar(255) NOT NULL,
  `NAMA_DOKTER` varchar(30) NOT NULL,
  `STATUS_KETERSEDIAAN` tinyint(1) NOT NULL,
  `JAM_KERJA` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter_kecantikan`
--

INSERT INTO `dokter_kecantikan` (`ID_DOKTER`, `Gambar_Dokter`, `Spesialis`, `NAMA_DOKTER`, `STATUS_KETERSEDIAAN`, `JAM_KERJA`) VALUES
('KCNTK001', 'dokter.png', 'Kecantikan - Skincare', 'Rahmad Abdullah', 1, '09:00:00'),
('KCNTK002', 'dokter1.png', 'Kecantikan - Perawatan', 'Chelses Olivia', 0, '10:30:00'),
('KCNTK003', 'dokter2.png', 'Kecantikan - Kesehatan', 'Raisa Adriani', 1, '15:30:00'),
('KCNTK004', 'dokter3.png', 'Kecantikan - Perawatan', 'Grace Olive', 1, '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `Gambar_Kategori` varchar(255) NOT NULL,
  `ID_KATEGORI` char(10) NOT NULL,
  `NAMA_KATEGORI` varchar(30) NOT NULL,
  `Deskripsi_Kategori` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`Gambar_Kategori`, `ID_KATEGORI`, `NAMA_KATEGORI`, `Deskripsi_Kategori`) VALUES
('kategori.png', 'CLEANSER01', 'Cleansers', 'Cleanser adalah salah satu produk perawatan kulit yang digunakan untuk membersihkan wajah. Cleanser memiliki formula khusus yang dirancang untuk menghilangkan kotoran, minyak berlebih, sisa makeup, dan polusi yang menempel pada kulit. Produk cleanser biasanya digunakan sebagai langkah pertama dalam rutinitas perawatan kulit harian.'),
('kategori2.png', 'EXFLNTS005', 'Exfoliants', 'Exfoliants adalah jenis produk perawatan kulit yang digunakan untuk mengangkat sel-sel kulit mati dan menjaga kulit tetap segar dan bersinar. Proses pengelupasan sel-sel kulit mati ini penting karena sel-sel kulit mati dapat menyumbat pori-pori, menyebabkan kulit kusam, dan menghambat regenerasi sel kulit yang sehat.'),
('kategori3.png', 'EYECARE007', 'Eye Care', 'Mata merupakan organ penting, perawatan sangat diperlukan untuk menjaga kulit di sekitar mata cenderung lebih tipis, sensitif, dan rentan terhadap penuaan dini serta masalah kulit lainnya. Eye Care mengacu pada perawatan khusus yang ditujukan untuk merawat dan menjaga kesehatan kulit di sekitar area mata. '),
('kategori4.png', 'LIPCARE008', 'Lip Care', 'Lip Care adalah serangkaian langkah untuk menjaga kesehatan dan keindahan bibir. Untuk menjaga bibir tetap lembut dan sehat, perawatan Lip Care melibatkan penggunaan lip balm atau pelembap bibir untuk menjaga kelembapan dan melindungi dari paparan sinar matahari yang mengandung SPF.'),
('kategori.png', 'MASKSCF006', 'Masker Wajah', 'Masker wajah digunakan untuk membersihkan, menghidrasi, menenangkan, dan menyegarkan kulit. Terdapat berbagai jenis masker wajah yang tersedia, seperti masker lumpur, masker gel, masker peel-off, dan masker sheet.  Penggunaan masker wajah dapat membantu mengangkat minyak berlebih dan lainnya. '),
('kategori3.png', 'MSTRIZR002', 'Moisturaizer', 'Moisturizer atau pelembab adalah produk penting dalam rutinitas perawatan kulit untuk menjaga kelembapan dan keseimbangan kulit. Moisturizer berfungsi untuk memberikan hidrasi pada kulit, menjaga elastisitasnya, dan melindunginya dari faktor eksternal yang dapat menyebabkan kekeringan.'),
('kategori4.png', 'SERUM00004', 'Serum ', 'Serum adalah produk perawatan kulit yang memiliki konsentrasi tinggi bahan aktif dan dirancang untuk menargetkan masalah khusus pada kulit. Serum mengandung berbagai bahan aktif yang berfungsi untuk memberikan kelembapan kulit, mencerahkan kulit, dan mengatasi masalah kulit lainnya.'),
('kategori2.png', 'SNSCREN003', ' Sunscreen', 'Sunscreen adalah produk yang digunakan untuk melindungi kulit dari sinar matahari yang berbahaya, terutama sinar ultraviolet (UV). Dalam konteks perawatan kulit, sunscreen memiliki peran penting dalam menjaga kesehatan dan keindahan kulit seperti menghindari penuaan dini, bintik-bintik gelap, garis halus.');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `ID_KERANJANG` char(8) NOT NULL,
  `USER_ID` varchar(50) NOT NULL,
  `ID_PRODUK` char(8) NOT NULL,
  `ID_KATEGORI` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi_pertemuan`
--

CREATE TABLE `konsultasi_pertemuan` (
  `PERTEMUAN_ID` char(8) NOT NULL,
  `USER_ID` char(8) NOT NULL,
  `TANGGAL_PERTEMUAN` date NOT NULL,
  `Waktu_Pertemuan` time NOT NULL,
  `LAMA_KONSULTASI` time NOT NULL,
  `ID_DOKTER` char(8) NOT NULL,
  `KELUHAN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `ID_METODE_PEMBAYARAN` char(6) NOT NULL,
  `METODE_BAYAR` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `ID_PESANAN` char(8) NOT NULL,
  `USER_ID` char(8) NOT NULL,
  `TANGGAL_PESANAN` datetime NOT NULL,
  `TOTAL_PEMBELIAN_PRODUK` int(100) NOT NULL,
  `TOTAL_PEMBAYARAN` int(100) NOT NULL,
  `PRODUK_ID` char(8) NOT NULL,
  `ID_METODE_PEMBAYARAN` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `produk_kategori_view`
-- (See below for the actual view)
--
CREATE TABLE `produk_kategori_view` (
`nama_produk` varchar(100)
,`nama_kategori` varchar(30)
,`gambar_produk` varchar(255)
,`deskripsi_kategori` varchar(500)
);

-- --------------------------------------------------------

--
-- Table structure for table `produk_kecantikan`
--

CREATE TABLE `produk_kecantikan` (
  `ID_PRODUK` char(8) NOT NULL,
  `NAMA_PRODUK` varchar(100) NOT NULL,
  `GAMBAR_PRODUK` varchar(255) NOT NULL,
  `HARGA_PRODUK` int(30) NOT NULL,
  `KUANTITAS_PRODUK` int(10) NOT NULL,
  `ID_KATEGORI` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk_kecantikan`
--

INSERT INTO `produk_kecantikan` (`ID_PRODUK`, `NAMA_PRODUK`, `GAMBAR_PRODUK`, `HARGA_PRODUK`, `KUANTITAS_PRODUK`, `ID_KATEGORI`) VALUES
('CLNAZA02', 'Azarine CWhite Brightening ', 'azarinecleanser.png', 31500, 59, 'CLEANSER01'),
('CLNCCD04', ' Gentle Cleanser Dorskin', 'cica.png', 101500, 20, 'CLEANSER01'),
('CLNCTH01', 'Cetaphil Gentle Skin Cleanser ', 'ceta.png', 40515, 43, 'CLEANSER01'),
('CLNEMN06', 'Emina Bright Stuff Face Wash ', 'emina.png', 19000, 32, 'CLEANSER01'),
('CLNNPR07', 'NPURE Cica Series Face Wash', 'npure.png', 81000, 3, 'CLEANSER01'),
('CLNORG05', ' The Originate Facial Cleanser', 'originate1.png', 40600, 43, 'CLEANSER01'),
('CLNSKT03', '5x Ceramide Cleanser Skintific', 'skincleanser.png', 34800, 12, 'CLEANSER01'),
('CLNSMT08', 'Low pH Gentle Jelly Cleanser ', 'somethinc.png', 189100, 9, 'CLEANSER01'),
('CLNSNK09', 'Perfect Whip Vibrant White', 'senka.png', 51500, 21, 'CLEANSER01'),
('CLNWRD10', 'Wardah Perfect Bright Foam ', 'wardah.png', 30500, 46, 'CLEANSER01'),
('MSTAVO04', 'Your Skin Bae Moisturizer', 'avo.png', 112500, 2, 'MSTRIZR002'),
('MSTCTH02', 'Moisturizing Cream Cetaphile', 'cetamoist.png', 465850, 5, 'MSTRIZR002'),
('MSTDBM05', 'Acne Care Water Cream', 'dbm.png', 87200, 7, 'MSTRIZR002'),
('MSTDOR07', 'Matcha Glow Dream Mask', 'dor.png', 103200, 24, 'MSTRIZR002'),
('MSTNCF08', ' Origin Cream - Nacific', 'nacimoist.png', 382900, 6, 'MSTRIZR002'),
('MSTOGT03', 'The Originate Moisturizer', 'originate.png', 46740, 54, 'MSTRIZR002'),
('MSTOGT06', 'Hyalucera Moisturizer Gel', 'moist.png', 41250, 32, 'MSTRIZR002'),
('MSTSKT01', 'Skintific Calming Wate', 'skinmoist.png', 146500, 99, 'MSTRIZR002'),
('SNCAQA05', 'Tone Up UV Essence Mint Green', 'aqua.png', 69825, 1, 'SNSCREN003'),
('SNCAZA02', ' Moisturiser Sunscreen Serum ', 'aza.png', 61750, 31, 'SNSCREN003'),
('SNCAZR04', 'Hydramax-C Sunscreen Serum', 'rine.png', 61750, 35, 'SNSCREN003'),
('SNCJOY03', 'Aqua Sun-Day SPF50+ PA++++', 'joylab.png', 131400, 29, 'SNSCREN003'),
('SNCNCI06', 'Sun Essence Nacific', 'naci.png', 330000, 35, 'SNSCREN003'),
('SNCSKT01', 'Ultra Light Serum Sunscreen', 'skin.png', 109500, 21, 'SNSCREN003');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` char(8) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Username_User` varchar(20) NOT NULL,
  `Password_User` varchar(50) NOT NULL,
  `notelp_user` int(11) NOT NULL,
  `Alamat_User` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `Nama_User`, `Username_User`, `Password_User`, `notelp_user`, `Alamat_User`) VALUES
('U00001', 'maia', 'arel', '$2y$10$y0EiiMe.tUmvkwFjs7Ea8Op68H162EgwHQxsBqZ9JVD', 9876, 'maiaarelia@gmail.com');

-- --------------------------------------------------------

--
-- Structure for view `produk_kategori_view`
--
DROP TABLE IF EXISTS `produk_kategori_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `produk_kategori_view`  AS SELECT `p`.`NAMA_PRODUK` AS `nama_produk`, `k`.`NAMA_KATEGORI` AS `nama_kategori`, `p`.`GAMBAR_PRODUK` AS `gambar_produk`, `k`.`Deskripsi_Kategori` AS `deskripsi_kategori` FROM (`produk_kecantikan` `p` join `kategori_produk` `k` on(`p`.`ID_KATEGORI` = `k`.`ID_KATEGORI`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`ID_DETAIL_PESANAN`),
  ADD KEY `fk_id_detail_produk` (`ID_PRODUK`),
  ADD KEY `fk_id_pesanan_detail` (`ID_PESANAN`);

--
-- Indexes for table `dokter_kecantikan`
--
ALTER TABLE `dokter_kecantikan`
  ADD PRIMARY KEY (`ID_DOKTER`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`ID_KATEGORI`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`ID_KERANJANG`),
  ADD KEY `fk_user_id_keranjang` (`USER_ID`),
  ADD KEY `fk_user_id_produk` (`ID_PRODUK`),
  ADD KEY `fk_id_kategori_keranjang` (`ID_KATEGORI`);

--
-- Indexes for table `konsultasi_pertemuan`
--
ALTER TABLE `konsultasi_pertemuan`
  ADD PRIMARY KEY (`PERTEMUAN_ID`),
  ADD KEY `fk_user_konsultasi` (`USER_ID`),
  ADD KEY `fk_id_dokter` (`ID_DOKTER`);

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`ID_METODE_PEMBAYARAN`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`ID_PESANAN`),
  ADD KEY `fk_user_id` (`USER_ID`),
  ADD KEY `fk_id_produk` (`PRODUK_ID`),
  ADD KEY `fk_id_metode_pembayaran` (`ID_METODE_PEMBAYARAN`);

--
-- Indexes for table `produk_kecantikan`
--
ALTER TABLE `produk_kecantikan`
  ADD PRIMARY KEY (`ID_PRODUK`),
  ADD KEY `fk_id_kategori` (`ID_KATEGORI`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `fk_id_detail_produk` FOREIGN KEY (`ID_PRODUK`) REFERENCES `produk_kecantikan` (`ID_PRODUK`),
  ADD CONSTRAINT `fk_id_pesanan_detail` FOREIGN KEY (`ID_PESANAN`) REFERENCES `pesanan` (`ID_PESANAN`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `fk_id_kategori_keranjang` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategori_produk` (`ID_KATEGORI`),
  ADD CONSTRAINT `fk_user_id_keranjang` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`),
  ADD CONSTRAINT `fk_user_id_produk` FOREIGN KEY (`ID_PRODUK`) REFERENCES `produk_kecantikan` (`ID_PRODUK`);

--
-- Constraints for table `konsultasi_pertemuan`
--
ALTER TABLE `konsultasi_pertemuan`
  ADD CONSTRAINT `fk_id_dokter` FOREIGN KEY (`ID_DOKTER`) REFERENCES `dokter_kecantikan` (`ID_DOKTER`),
  ADD CONSTRAINT `fk_user_konsultasi` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_id_metode_pembayaran` FOREIGN KEY (`ID_METODE_PEMBAYARAN`) REFERENCES `metode_pembayaran` (`ID_METODE_PEMBAYARAN`),
  ADD CONSTRAINT `fk_id_produk` FOREIGN KEY (`PRODUK_ID`) REFERENCES `produk_kecantikan` (`ID_PRODUK`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`);

--
-- Constraints for table `produk_kecantikan`
--
ALTER TABLE `produk_kecantikan`
  ADD CONSTRAINT `fk_id_kategori` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategori_produk` (`ID_KATEGORI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
