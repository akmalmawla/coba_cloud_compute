-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2026 at 04:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `image`) VALUES
(1, 'Gunung Api Purba Nglanggeran', 'https://desanglanggeran.gunungkidulkab.go.id/assets/files/artikel/sedang_1577115993nglanggeran_20170122_131501.jpg'),
(2, 'Embung Nglanggeran (Sunset)', 'https://zjglidcehtsqqqhbdxyp.supabase.co/storage/v1/object/public/atourin/images/destination/gunung-kidul/embung-nglanggeran-profile1646131828.png?x-image-process=image/resize,p_100,limit_1/imageslim'),
(3, 'Kampung Pitu', 'https://desawisatanglanggeran.id/wp-content/uploads/2023/10/berburu-sunrise-dan-sunset-di-puncak-kampung-pitu-desa-yang-hanya-boleh-dihuni-7-kk44.jpg'),
(4, 'Air Terjun Kedung Kandang', 'https://www.magnetoholidays.id/wp-content/uploads/2022/07/desa-wisata-nglanggeran.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `TYPE` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `TYPE`, `contact`, `image`) VALUES
(1, 'Barista Griya Coklat Nglanggeran', 'Full Time', '08123456789', 'https://desanglanggeran.gunungkidulkab.go.id/assets/files/artikel/sedang_1504615407FB_IMG_1472940613481.jpg'),
(2, 'Ranger Object Wisata', 'Part Time', '08211234567', 'https://awsimages.detik.net.id/community/media/visual/2021/12/05/desa-wisata-nglanggeran_169.jpeg?w=1200'),
(3, 'Supermarket WRMD', 'Full Time 24/7', '08211234567', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCLJSwBWvc3CJYoXcjjRc5l1NQHkaqW1TlPg&s'),
(4, 'Waiter Rumah Makan WRMND', 'Part Time', '08211234567', 'https://rricoid-assets.obs.ap-southeast-4.myhuaweicloud.com/berita/Bandung/o/1720766909128-WhatsApp_Image_2024-07-12_at_13.47.12/8d20mztnkn31xxk.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `type` varchar(150) DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `type`, `image`) VALUES
(1, 'Desa Wisata\r\nNglanggeran', '2021', 'Desa Wisata Nglanggeran telah mendapat penghargaan ASEAN Sustainable Tourism Award pada 2018 dan ASEAN Community Based Tourism (CBT) Award 2017.', 'https://desawisatanglanggeran.id/wp-content/uploads/2023/10/158866956-280763620082505-558036890218885627-n-3fb681c54b2d4a54042388aa09868403.jpg'),
(2, 'Kementerian Pariwisata dan Ekonomi Kreatif (Kemenparekraf)', 'ADWI (2021)', 'Menobatkan Desa Nglanggeran di Kabupaten Gunungkidul, D.I.Yogyakarta sebagai salah satu dari tujuh Desa Wisata Mandiri Inspiratif dalam ajang Anugerah', 'https://desawisatanglanggeran.id/wp-content/uploads/2023/10/WhatsApp-Image-2021-12-04-at-18.56.00-980x653.jpeg'),
(3, 'Ada Gunung Gede di Puncak Gunung Api Purba Nglanggeran', 'ADWI (2021)', 'Gunung Api Purba Nglanggeran menjadi salah satu primadona pariwisata Jogja. Bagaimana tidak, gunung yang berada di Desa Nglanggeran, Patuk, Gunungkidu', 'https://cdn.grid.id/crop/0x0:0x0/700x465/smart/filters:format(webp):quality(100)/photo/2022/12/21/whatsapp-image-2022-12-21-at-11-20221221110851.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
