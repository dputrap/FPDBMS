-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 07:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan_motor_bekas`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id_Cust` int(11) NOT NULL,
  `Nama_Cust` varchar(255) NOT NULL,
  `Alamat_Cust` varchar(255) NOT NULL,
  `Telp_Cust` varchar(255) NOT NULL,
  `NIK_Cust` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `identitas_motor`
--

CREATE TABLE `identitas_motor` (
  `ID` int(12) NOT NULL,
  `NoRegistrasi` varchar(20) DEFAULT NULL,
  `NamaPemilik` varchar(20) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `NoRangka` varchar(20) DEFAULT NULL,
  `NoMesin` varchar(20) DEFAULT NULL,
  `PlatNO` varchar(12) DEFAULT NULL,
  `Merk` varchar(12) DEFAULT NULL,
  `Type` varchar(12) DEFAULT NULL,
  `Model` varchar(12) DEFAULT NULL,
  `TahunPembuatan` varchar(8) DEFAULT NULL,
  `IsiSilinder` varchar(20) DEFAULT NULL,
  `BahanBakar` varchar(20) DEFAULT NULL,
  `WarnaTNKB` varchar(20) DEFAULT NULL,
  `TahunRegistrasi` varchar(20) DEFAULT NULL,
  `NoBPKB` varchar(20) DEFAULT NULL,
  `KodeLokasi` varchar(20) DEFAULT NULL,
  `MasaBerlakuSTNK` varchar(12) DEFAULT NULL,
  `Gambar_Motor` varchar(255) NOT NULL,
  `Tgl_Beli` date DEFAULT NULL,
  `Harga_Beli` int(15) DEFAULT NULL,
  `Tgl_Jual` date DEFAULT NULL,
  `Harga_Jual` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas_motor`
--

INSERT INTO `identitas_motor` (`ID`, `NoRegistrasi`, `NamaPemilik`, `Alamat`, `NoRangka`, `NoMesin`, `PlatNO`, `Merk`, `Type`, `Model`, `TahunPembuatan`, `IsiSilinder`, `BahanBakar`, `WarnaTNKB`, `TahunRegistrasi`, `NoBPKB`, `KodeLokasi`, `MasaBerlakuSTNK`, `Gambar_Motor`, `Tgl_Beli`, `Harga_Beli`, `Tgl_Jual`, `Harga_Jual`) VALUES
(0, '123', 'Jimin', 'Cirebon', 'MH1T61', 'HM12387', 'B123223', 'Honda', 'Mio', 'Type C', '2021', '200cc', 'Diesel', 'Merah', '2019', 'C0000123', '20', '18 Maret 202', '12-vario3.jpg', '2021-12-02', 120391, '2021-12-09', 1),
(1, 'B14502013', 'Johnny Tim', 'DKI Jakarta', 'MH1T0100', 'HD150E', 'B1450TMK', 'HONDA', 'VARIO150', 'Sepeda Motor', '2013', '150CC', 'Bensin', 'Hitam', '2013', '8000011A', '22', '3 Maret 2015', 'beat3.jpg', '2021-11-03', 0, '0000-00-00', 0),
(2, 'T14502015', 'Bambang', 'Purwakarta', 'MH1T0510', 'HT220A', 'B1450TMK', 'YAMAHA', 'RXKING', 'Sepeda Motor', '2016', '132CC', 'Bensin', 'Ungu', '2014', '7000011A', '22', '9 Juli 2018', 'vario2.jpg', '2021-09-14', 10000000, '2021-12-12', 8000000),
(3, 'T23122011', 'Jake', 'Karawang', 'MH1A0403', 'HD140J', 'B1349CLM', 'SUZUKI', 'SatriaF150', 'Sepeda Motor', '2012', '147CC', 'Bensin', 'Hitam', '2012', '9000022C', '23', '12 Juni 2017', 'Beat2.jpg', '2019-10-16', 11000000, '2021-12-17', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `IdTrsk` int(15) NOT NULL,
  `Tgl_Trsk` date DEFAULT NULL,
  `Id_Cust` int(25) DEFAULT NULL,
  `Id_Kendaraan` int(20) DEFAULT NULL,
  `Harga_Jual` int(12) DEFAULT NULL,
  `Harga_Jual_Real` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`IdTrsk`, `Tgl_Trsk`, `Id_Cust`, `Id_Kendaraan`, `Harga_Jual`, `Harga_Jual_Real`) VALUES
(1, '2021-12-25', 110223, 140512, 8000000, 5000000),
(2, '2021-12-01', 1107, 140513, 6500000, 5500000),
(3, '2021-11-18', 1107111, 1405122, 10000000, 5500000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IDUser` int(12) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Hak_Akses` varchar(30) NOT NULL,
  `Create_Date` date NOT NULL,
  `Manager` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDUser`, `Nama`, `Password`, `Hak_Akses`, `Create_Date`, `Manager`) VALUES
(1, 'Maman', 'mamanpmlk', 'Pemilik', '2021-11-25', 'Maman Kosman'),
(2, 'Suhendi', 'suhenditlr', 'Teller', '2021-11-27', 'Muhammad Suhendi'),
(3, 'Soni', 'Soniteknisi', 'Teknisi', '2021-11-30', 'Soni Soleman'),
(4, 'Rizky', 'rizky888', 'Customer', '2021-12-01', 'Rizky Nugraha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id_Cust`);

--
-- Indexes for table `identitas_motor`
--
ALTER TABLE `identitas_motor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`IdTrsk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `IdTrsk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
