-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 09:00 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `idKec` int(11) NOT NULL,
  `namaKecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`idKec`, `namaKecamatan`) VALUES
(1, 'trawas'),
(2, 'pacet'),
(3, 'trowulan'),
(4, 'gedeg'),
(5, 'jatirejo'),
(7, 'ngoro');

-- --------------------------------------------------------

--
-- Table structure for table `tempatwisata`
--

CREATE TABLE `tempatwisata` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `penjelasan` varchar(800) NOT NULL,
  `jambuka` time NOT NULL,
  `tiket` varchar(20) NOT NULL,
  `lat` double NOT NULL,
  `longg` double NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `idKec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempatwisata`
--

INSERT INTO `tempatwisata` (`id`, `foto`, `nama`, `penjelasan`, `jambuka`, `tiket`, `lat`, `longg`, `kategori`, `idKec`) VALUES
(33, 'segienam1.JPG', 'candi segi enam', 'merupakan peniggalan majapahit berupa hamparan ubin dan sisa dinding bangunan, Lantai bangunan kuno tersebut berada <+ 1,80 m, dibawah permukaan tanah sekitarnya dan berorientasi ke barat-Timur dengan', '08:23:00', 'gratis', -7.57138, 112.379852, 'candi', 3),
(34, 'kolam2.jpg', 'kolam segaran', 'merupakan salah satu dari 32 waduk/kolam kuno Majapahit yang masih dapat disaksikan hingga saat ini. Orang yang pertama kali menemukan kolam mini adalah Henry Maclain Pont pada tahun 1926. Bentuk dena', '08:23:00', 'gratis', -7.557821, 112.382961, 'bukan_candi', 3),
(35, 'minak1.JPG', 'Candi Minak Jinggo', 'Candi Minakjinggo di Dusun Unggahan, Desa/Kecamatan Trowulan, Kabupaten Mojokerto, menjadi satu-satunya candi peninggalan Majapahit yang unik. Jika pada umumnya candi tersusun dari bata merah, candi y', '00:00:00', 'gratis', -7.557857, 112.386455, 'candi', 3),
(37, 'brah.png', 'candi brahu', 'Candi Brahu dibangun dengan batu bata merah, menghadap ke arah barat dan berukuran panjang sekitar 22,5 m, dengan lebar 18 m, dan berketinggian 20 meter.  Candi Brahu dibangun dengan gaya dan kultur B', '08:39:00', '20000', -7.542816, 112.374374, 'candi', 3),
(38, '7.JPG', 'makam tuju', 'Ada beberapa peninggalan sejarah Islam zaman kerajaan Majapahit di Kawasan Cagar Budaya Nasional Trowulan, Kabupaten Mojokerto, Jawa Timur. Salah satunya adalah makam Islam. Yang paling dikenal adalah', '09:30:00', 'gratis', -7.574884, 112.379116, 'bukan_candi', 3),
(39, 'gentong.jpg', 'candi gentong', 'Situs ini terdiri dari dua bangunan yang terbuat dari batu bata, kedua candi dibanguan dengan arah berjajar dengan arah utara selatan yang berjarak kurang lebih 25 m dan berorientasi ke arah barat. Ba', '08:39:00', 'gratis', -7.543597, 112.37802, 'candi', 3),
(40, 'lawang.jpg', 'candi wringin lawang', 'Bangunan kuno wringin lawang ini sebenarnya bukan sebuah candi melainkan sebuah gapura, namun masyarakat lebih mengenal dengan gapura wringin lawang.bangunan ini berada diatas permukaan tanah pada ket', '08:30:00', 'gratis', -7.541941, 112.391018, 'candi', 3),
(41, 'panjang.jpg', 'makam panjang', 'Makam Panjang ini terletak di Dusun Ungah-unggahan, Desa/Kecamatan Trowulan. Situs ini berjarak sekitar 200 meter arah timur laut dari Kolam Segaran.  Bangunan Makam Panjang ini cukup sederhana. Hanya', '09:00:00', 'gratis', -7.555229, 112.385684, 'bukan_candi', 3),
(42, 'reco.jpg', 'reco lanang', 'Wisata Reco Lanang Mojokerto adalah salah satu tempat wisata yang berada di desa Kemloko, Kecamatan Trawas, Kabupaten Mojokerto, Jawa Timur, Indonesia. Wisata Reco Lanang Mojokerto adalah tempat wisat', '08:00:00', 'gratis', -7.670718, 112.583935, 'bukan_candi', 1),
(43, 'sentono.jpg', 'umpak sentonorejo', 'Menurut penafsiran arkeologis, situs Umpak Sentonorejo kemungkinan adalah bekas pondasi sebuah bangunan yang menjadi satu kesatuan fungsi dengan Candi Kedaton dan Situs Lantai Segi Enam. Belum dapat d', '08:30:00', 'gratis', -7.57008, 112.378977, 'bukan_candi', 3),
(44, 'tikus.jpg', 'candi tikus', 'Candi Tikus terletak di di dukuh Dinuk, Desa Temon, Kecamatan Trowulan, Kabupaten Mojokerto, Jawa Timur, sekitar 13 km di sebelah tenggara kota Mojokerto. Dari jalan raya Mojokerto-Jombang, di perempatan Trowulan, membelok ke timur, melewati Kolam Segaran dan Candi Bajangratu yang terletak di sebelah kiri jalan. Candi Tikus juga terletak di sisi kiri jalan, sekitar 600 m dari Candi Bajangratu. Candi Tikus yang semula telah terkubur dalam tanah ditemukan kembali pada tahun 1914. Penggalian situs dilakukan berdasarkan laporan Bupati Mojokerto, R.A.A. Kromojoyo Adinegoro, tentang ditemukannya miniatur candi di sebuah pekuburan rakyat. Pemugaran secara menyeluruh dilakukan pada tahun 1984 sampai dengan 1985. Nama \'Tikus\' hanya merupakan sebutan yang digunakan masyarakat setempat. Konon, pada s', '00:43:00', '10000', -7.571725, 112.403465, 'candi', 3),
(49, 'brah3.png', 'pacet', 'candi pacet', '00:23:00', 'free', 43, 9898, 'bukan_candi', 2),
(50, 'segienam2.JPG', 'gedeg', 'gedeg', '02:34:00', '342', 354, 545, 'bukan_candi', 4),
(51, 'candi_kesiman_tengah.jpg', 'tes', 'tes', '09:35:00', 'free', 3525, 324, 'bukan_candi', 2),
(52, 'IMG20190227160042.jpg', 'tes', 'tes', '09:35:00', 'free', 3525, 324, 'bukan_candi', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`idKec`);

--
-- Indexes for table `tempatwisata`
--
ALTER TABLE `tempatwisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `idKec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tempatwisata`
--
ALTER TABLE `tempatwisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
