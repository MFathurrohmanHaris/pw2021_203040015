-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 12:35 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040015`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_buku`
--

CREATE TABLE `t_buku` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `tahunterbit` varchar(50) DEFAULT NULL,
  `kategori` char(1) DEFAULT NULL COMMENT 'N = novel, K = Komik.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_buku`
--

INSERT INTO `t_buku` (`id`, `foto`, `judul`, `penulis`, `penerbit`, `tahunterbit`, `kategori`) VALUES
(1, '1.png', 'Daun yang jatuh tak pernah membenci angin', 'Tere Liye', 'Gramedia Pustaka Utama', '2010', 'N'),
(2, '2.png', 'Pergi', 'Tere Liye', 'Gramedia Pustaka Utama', '2018', 'N'),
(3, '3.png', 'Bintang', 'Tere Liye', 'Gramedia Pustaka Utama', '2017', 'N'),
(4, '4.png', 'Ceros dan Batozar', 'Tere Liye', 'Gramedia Pustaka Utama', '2018', 'N'),
(5, '5.png', 'Bumi', 'Tere Liye', 'Gramedia Pustaka Utama', '2014', 'N'),
(6, '6.png', 'Tentang Kamu', 'Tere Liye', 'Republika', '2016', 'N'),
(7, '7.png', 'Selena', 'Tere Liye', 'Gramedia Pustaka Utama', '2020', 'N'),
(8, '8.png', 'Nebula', 'Tere Liye', 'Gramedia Pustaka Utama', '2019', 'N'),
(9, '9.png', 'Matahari', 'Tere Liye', 'Gramedia Pustaka Utama', '2016', 'K'),
(10, '10.png', 'Komet', 'Tere Liye', 'Gramedia Pustaka Utama', '2018', 'N'),
(15, 'cek.jpg', 'lord', 'Budiantof', 'Gramedia', '2019', 'K'),
(16, 'coba.png', 'mantap', 'test', 'Gramedia', '2022', 'N'),
(17, 'gaming.jpg', 'buah mangga', 'imams', 'Gramedias', '2019', 'K');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'haris', '$2y$10$HFWbmjd2csZ7IWC9AUGIputAphoCvC5Wy0ppqTDX6MEu1suZp/eTC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_buku`
--
ALTER TABLE `t_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_buku`
--
ALTER TABLE `t_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
