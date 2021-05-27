-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 05:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040094`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(10) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `harga` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `cover`, `judul_buku`, `penulis`, `tema`, `harga`) VALUES
(2, 'rk.jpg', 'Rumah Kaca', 'Pramoedya Ananta Toer	', 'Pengarsipan Yang Rapi	', 'Rp.35.000\r\n'),
(3, 'km.jpg', 'Komet Minor	', 'Tere Liye	', 'Perjalanan', 'Rp.77.000\r\n'),
(4, 'lk.jpg', 'Luka Kata	', 'Chandra Malik	', 'Cinta', 'Rp.82.000\r\n'),
(5, 'BM.jpg', 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Perjalanan Seorang Tokoh', 'Rp.26.000'),
(6, 'DR.jpg', 'Dear Tomorrow	', 'Maudy Ayunda	', 'Kehidupan', 'Rp.129.000'),
(7, 'CM.jpg', '5 CM', 'Donny Dhirgantoro	', 'Persahabatan', 'Rp.50.000'),
(8, '5NM.jpg', '5 Negeri Menara', 'Ahmad Fuadi	', 'Pokok Permasalahan	', 'Rp.78.900'),
(9, 'LP.jpg', 'Laskar Pelangi', 'Andrea Hirata	', 'Pendidikan', 'Rp.69.000'),
(10, '88.jpg', '#88 Love Life', 'Dinda Puspitasari', 'Cinta', 'Rp.88.000'),
(12, 'NW.jpg', 'Norwegian Wood', 'Haruki Murakami', 'Pengalaman Hidup Melawan Penyakit', 'Rp. 75.000');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, 'mahen.jpg', '203040094', 'Rizki Mahendra', 'rzkymhnn@gmail.com', 'Teknik Informatika'),
(2, 'wawa.jpg', '203040500', 'Nazwa Cecillia', 'nzwccll@gmail.com', 'Fakultas Kedokteran Gigi'),
(3, 'vin.jpg', '203040097', 'Hervin Fakhrul', 'hervinfakhrulm@gmail.com', 'Teknik Informatika'),
(4, 'agoy.jpg', '203040112', 'Yoga Bagja Ramadhan', 'yogaarmdhn@gmail.com', 'Teknik Informatika'),
(5, 'butong.jpg', '203040117', 'Fikri Ardiansyah', 'fkryadr@gmail.com', 'Teknik Informatika'),
(6, 'agam.jpg', '203040098', 'Agam Ramdhan Kamil Atmaja', 'agamramdhan@gmail.com', 'Teknik Informatika'),
(7, 'vale.jpg', '203040086', 'Abizar Valentino Fachri', 'abivale@gmail.com', 'Teknik Informatika'),
(8, 'man.jpg', '203040029', 'Hilman Sulaeman', 'hilmansulaeman@gmail.com', 'Teknik Informatika'),
(9, 'bule.jpg', '203040043', 'Muhammad Rizky', 'muhammadrizky@gmail.com', 'Teknik Informatika'),
(10, 'izal.jpg', '203040075', 'Muhammad Afrizal Fadillah', 'afrizalfadillah@gmail.com', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'admin', '$2y$10$j3UlHAWFTuyPU.NaGl9tFeHi7Wmduak8GJ5/Ln6f6aPx2yLoxskuW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
