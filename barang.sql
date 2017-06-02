-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jun 2017 pada 10.24
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kij`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `harga`) VALUES
(1, 'Speakers', 250),
(2, 'Headphones', 150),
(3, 'Audio Player', 180),
(4, 'Laptop', 850),
(5, 'Notebook', 280),
(6, 'Kid\'s Toy', 80),
(7, 'Refrigerator', 820),
(8, 'LED Tv', 680),
(9, 'Washing Machine', 510),
(10, 'Grinder', 450),
(11, 'Mobile Phone 1', 350),
(12, 'Mobile Phone 2', 302),
(13, 'Mobile Phone 3', 245),
(14, 'Black Phone', 370),
(15, 'Smart Phone', 245),
(16, 'Red Mobile', 65),
(17, 'Audio-speaker', 45),
(18, 'Headphone', 245),
(19, 'Wireless Speaker', 86),
(20, 'Asus Tablet', 425),
(21, 'Music MP3 Player', 58),
(22, 'Golden Tablet', 550),
(23, 'Wireless Phone', 210),
(24, 'Asus Laptop', 880),
(25, 'Digital Watch', 25),
(26, 'i3 Laptop', 810),
(27, 'Digital Watch2', 29),
(28, 'Security Camera', 22),
(29, 'Pen Camera', 54),
(30, 'Multicolor Laptop', 610),
(31, 'Water Purifier', 350),
(32, 'Coffee Maker', 220),
(33, 'Microwave Oven', 645),
(34, 'Vacuum Cleaner', 920),
(35, 'Dry Iron', 15),
(36, 'Juicer Mixer', 68),
(37, 'Induction Cooktop', 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
