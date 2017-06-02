-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jun 2017 pada 14.12
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `harga` int(11) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `harga`, `url`) VALUES
(1, 'Speakers', 250, 'images/a1.jpg'),
(2, 'Headphones', 150, 'images/a2.jpg'),
(3, 'Audio Player', 180, 'images/a3.jpg'),
(4, 'Laptop', 850, 'images/a4.jpg'),
(5, 'Notebook', 280, 'images/a5.jpg'),
(6, 'Kid\'s Toy', 80, 'images/a6.jpg'),
(7, 'Refrigerator', 820, 'images/a7.jpg'),
(8, 'LED Tv', 680, 'images/a8.jpg'),
(9, 'Washing Machine', 510, 'images/a9.jpg'),
(10, 'Grinder', 450, 'images/a10.jpg'),
(11, 'Mobile Phone 1', 350, 'images/a11.jpg'),
(12, 'Mobile Phone 2', 302, 'images/a12.jpg'),
(13, 'Mobile Phone 3', 245, 'images/a13.jpg'),
(14, 'Black Phone', 370, 'images/a14.jpg'),
(15, 'Smart Phone', 245, 'images/a15.jpg'),
(16, 'Red Mobile', 65, 'images/a16.jpg'),
(17, 'Audio-speaker', 45, 'images/a17.jpg'),
(18, 'Headphone', 245, 'images/a18.jpg'),
(19, 'Wireless Speaker', 86, 'images/a19.jpg'),
(20, 'Asus Tablet', 425, 'images/a20.jpg'),
(21, 'Music MP3 Player', 58, 'images/a21.jpg'),
(22, 'Golden Tablet', 550, 'images/a22.jpg'),
(23, 'Wireless Phone', 210, 'images/a23.jpg'),
(24, 'Asus Laptop', 880, 'images/a24.jpg'),
(25, 'Digital Watch', 25, 'images/a25.jpg'),
(26, 'i3 Laptop', 810, 'images/a26.jpg'),
(27, 'Digital Watch2', 29, 'images/a27.jpg'),
(28, 'Security Camera', 22, 'images/a28.jpg'),
(29, 'Pen Camera', 54, 'images/a29.jpg'),
(30, 'Multicolor Laptop', 610, 'images/a30.jpg'),
(31, 'Water Purifier', 350, 'images/a31.jpg'),
(32, 'Coffee Maker', 220, 'images/a32.jpg'),
(33, 'Microwave Oven', 645, 'images/a33.jpg'),
(34, 'Vacuum Cleaner', 920, 'images/a34.jpg'),
(35, 'Dry Iron', 15, 'images/a35.jpg'),
(36, 'Juicer Mixer', 68, 'images/a36.jpg'),
(37, 'Induction Cooktop', 150, 'images/a37.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE `beli` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beli`
--

INSERT INTO `beli` (`id`, `nama_barang`, `harga`, `username`) VALUES
(13, 'Mobile Phone 2', 302, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`ID`, `Username`, `Email`, `Password`) VALUES
(1, 'ade', 'adenuar11@gmail.com', 'ade');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
