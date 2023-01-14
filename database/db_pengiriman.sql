-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2023 at 02:31 PM
-- Server version: 8.0.31
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengiriman`
--

-- --------------------------------------------------------

--
-- Table structure for table `baju834`
--

CREATE TABLE `baju834` (
  `baju_id_834` int NOT NULL,
  `nama_baju_834` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `brand_baju_834` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `material_baju_834` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `harga_baju_834` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `baju834`
--

INSERT INTO `baju834` (`baju_id_834`, `nama_baju_834`, `brand_baju_834`, `material_baju_834`, `harga_baju_834`) VALUES
(2, 'Baju A-1.', 'Roughneck', 'Catoon', 'Rp. 250.000'),
(3, 'Baju A-2. ', 'Roughneck', 'Catoon', 'Rp. 250.000'),
(4, 'Baju A-1.', 'Erigo', 'Catoon', 'Rp. 100.000'),
(5, 'Baju A-2.', 'Erigo', 'Nylon', 'Rp. 250.000'),
(6, 'Baju A-1.', 'Maternal', 'Nylon', 'Rp. 175.000'),
(7, 'Baju A-2', 'Maternal', 'Nylon', 'Tersisa 20');

-- --------------------------------------------------------

--
-- Table structure for table `bajusales834`
--

CREATE TABLE `bajusales834` (
  `sale_id_834` int NOT NULL,
  `sale_date_834` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bajuk_id_834` int NOT NULL,
  `customer_name_834` varchar(50) NOT NULL,
  `customer_phone_834` varchar(50) NOT NULL,
  `customer_address_834` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bajusales834`
--

INSERT INTO `bajusales834` (`sale_id_834`, `sale_date_834`, `bajuk_id_834`, `customer_name_834`, `customer_phone_834`, `customer_address_834`) VALUES
(1, '2023-01-11 08:47:24', 3, 'Ridwan agung', '083122618889', 'Kota Bandung. Kec, cibeunying kaler. Kelularahan c'),
(2, '2023-01-11 08:47:24', 4, 'MAULANA', '083122618889', 'Kota Bogor. Kec, cibeunying kaler. Kelularahan c');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biaya`
--

CREATE TABLE `tb_biaya` (
  `id_biaya` int NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_biaya`
--

INSERT INTO `tb_biaya` (`id_biaya`, `kabupaten`, `harga`) VALUES
(1, 'Bandung', '2.500'),
(2, 'Bandung Barat', '3000'),
(3, 'Bogor', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kurir`
--

CREATE TABLE `tb_kurir` (
  `id_kurir` int NOT NULL,
  `nama_kurir` varchar(35) NOT NULL,
  `gender_kurir` int NOT NULL,
  `no_telp` varchar(35) NOT NULL,
  `email_kurir` varchar(35) NOT NULL,
  `alamat_kurir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_kurir`
--

INSERT INTO `tb_kurir` (`id_kurir`, `nama_kurir`, `gender_kurir`, `no_telp`, `email_kurir`, `alamat_kurir`) VALUES
(1, 'Suya', 1, '081728xxxxxx', 'Surya16@gmail.com', 'Juanda 3 Bandung'),
(2, 'djarum', 1, '081728xxxxxx', 'DjaromC@gmail.com', 'Juanda 3 Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengiriman`
--

CREATE TABLE `tb_pengiriman` (
  `id_pengiriman` varchar(64) NOT NULL,
  `sale_id` int NOT NULL,
  `id_kurir` int NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `harga_barang` varchar(30) NOT NULL,
  `ongkos_kirim` varchar(30) NOT NULL,
  `tanggal_kirim` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal_sampai` varchar(255) NOT NULL,
  `status_pengiriman` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pengiriman`
--

INSERT INTO `tb_pengiriman` (`id_pengiriman`, `sale_id`, `id_kurir`, `nama_customer`, `nama_barang`, `alamat_pengiriman`, `harga_barang`, `ongkos_kirim`, `tanggal_kirim`, `tanggal_sampai`, `status_pengiriman`) VALUES
('63c28d7b4121e', 2, 2, 'MAULANA', 'Baju A-1.', 'Kota Bogor. Kec, cibeunying kaler. Kelularahan c', 'Rp. 100.000', '10000', '2023-01-11 15:47:24', '', 'Dikirim'),
('63c28fbdd65aa', 1, 2, 'Ridwan agung', 'Baju A-2. ', 'Kota Bandung. Kec, cibeunying kaler. Kelularahan c', 'Rp. 250.000', '2.500', '2023-01-11 15:47:24', '', 'Diterima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baju834`
--
ALTER TABLE `baju834`
  ADD PRIMARY KEY (`baju_id_834`);

--
-- Indexes for table `bajusales834`
--
ALTER TABLE `bajusales834`
  ADD PRIMARY KEY (`sale_id_834`);

--
-- Indexes for table `tb_biaya`
--
ALTER TABLE `tb_biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bajusales834`
--
ALTER TABLE `bajusales834`
  MODIFY `sale_id_834` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
