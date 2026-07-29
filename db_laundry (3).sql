-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2026 at 09:32 AM
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
-- Database: `db_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `layanans`
--

CREATE TABLE `layanans` (
  `id` int(11) NOT NULL,
  `nama_layanan` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `jenis_satuan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanans`
--

INSERT INTO `layanans` (`id`, `nama_layanan`, `kategori`, `jenis_satuan`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Setrika (Express 1 Hari)', 'Express 1 Hari', 'Kg', 9000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(2, 'Cuci Kering Lipat (Express 1 Hari)', 'Express 1 Hari', 'Kg', 9000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(3, 'Cuci Kering Setrika (Express 1 Hari)', 'Express 1 Hari', 'Kg', 13000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(4, 'Satuan Kaos (Express 1 Hari)', 'Express 1 Hari', 'Pcs', 12000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(5, 'Satuan Tops (Express 1 Hari)', 'Express 1 Hari', 'Pcs', 18000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(6, 'Satuan Celana (Express 1 Hari)', 'Express 1 Hari', 'Pcs', 20000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(7, 'Satuan Jaket (Express 1 Hari)', 'Express 1 Hari', 'Pcs', 20000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(8, 'Satuan Jas (Express 1 Hari)', 'Express 1 Hari', 'Pcs', 25000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(9, 'Setrika (Regular 2 Hari)', 'Regular 2 Hari', 'Kg', 5500, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(10, 'Cuci Kering Lipat (Regular 2 Hari)', 'Regular 2 Hari', 'Kg', 5000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(11, 'Cuci Kering Setrika (Regular 2 Hari)', 'Regular 2 Hari', 'Kg', 8000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(12, 'Satuan Kaos (Regular 2 Hari)', 'Regular 2 Hari', 'Pcs', 8000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(13, 'Satuan Tops (Regular 2 Hari)', 'Regular 2 Hari', 'Pcs', 15000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(14, 'Satuan Celana (Regular 2 Hari)', 'Regular 2 Hari', 'Pcs', 15000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(15, 'Satuan Jaket (Regular 2 Hari)', 'Regular 2 Hari', 'Pcs', 17000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(16, 'Satuan Jas (Regular 2 Hari)', 'Regular 2 Hari', 'Pcs', 20000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(17, 'Setrika (Kilat 4 Jam)', 'Kilat 4 Jam', 'Kg', 12000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(18, 'Cuci Kering Lipat (Kilat 4 Jam)', 'Kilat 4 Jam', 'Kg', 12000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(19, 'Cuci Kering Setrika (Kilat 4 Jam)', 'Kilat 4 Jam', 'Kg', 16000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(20, 'Satuan Kaos (Kilat 4 Jam)', 'Kilat 4 Jam', 'Pcs', 16000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(21, 'Satuan Tops (Kilat 4 Jam)', 'Kilat 4 Jam', 'Pcs', 24000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(22, 'Satuan Celana (Kilat 4 Jam)', 'Kilat 4 Jam', 'Pcs', 25000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(23, 'Satuan Jaket (Kilat 4 Jam)', 'Kilat 4 Jam', 'Pcs', 25000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(24, 'Satuan Jas (Kilat 4 Jam)', 'Kilat 4 Jam', 'Pcs', 30000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(25, 'Handuk', 'Perlengkapan', 'Pcs', 5000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(26, 'Sejadah', 'Perlengkapan', 'Pcs', 5000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(27, 'Sprei Set', 'Perlengkapan', 'Set', 10000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(28, 'Bantal Guling', 'Perlengkapan', 'Pcs', 10000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(29, 'Selimut Kecil (Tipis)', 'Perlengkapan', 'Pcs', 15000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(30, 'Selimut Besar (Tebal)', 'Perlengkapan', 'Pcs', 25000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(31, 'Bedcover Single', 'Perlengkapan', 'Pcs', 25000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(32, 'Bedcover Double', 'Perlengkapan', 'Pcs', 35000, '2026-05-27 08:49:29', '2026-05-27 08:49:29'),
(33, 'Sepatu', 'Perlengkapan', 'Pasang', 50000, '2026-05-27 08:49:29', '2026-05-27 08:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nomor_nota` varchar(10) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `layanan_id` int(11) NOT NULL,
  `jumlah` float NOT NULL,
  `berat_kg` float NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status` varchar(50) DEFAULT 'Diterima'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nomor_nota`, `nama_pelanggan`, `nomor_hp`, `layanan_id`, `jumlah`, `berat_kg`, `total_harga`, `status`) VALUES
(1, 'LND-7235', 'Anjasmara', '081299872365', 0, 0, 6, 42000, 'Proses'),
(2, 'LND-5667', 'Budi Sentosa', '081299872365', 5, 6, 6, 97200, 'Selesai'),
(3, 'LND-1450', 'budi', '123456', 30, 5, 5, 125000, 'Selesai'),
(4, 'LND-4659', 'Agus', '213', 9, 4, 4, 22000, 'Baru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
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
-- AUTO_INCREMENT for table `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
