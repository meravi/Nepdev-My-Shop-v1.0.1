-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2018 at 02:27 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nepdevguitar`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_guitar`
--

CREATE TABLE `add_guitar` (
  `id` int(12) NOT NULL,
  `GuitarName` varchar(700) NOT NULL,
  `GuitarPrice` varchar(100) NOT NULL,
  `GuitarOverview` varchar(1000) NOT NULL,
  `GuitarCategory` varchar(500) NOT NULL,
  `GuitarBrand` varchar(500) NOT NULL,
  `ProductImage` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_guitar`
--

INSERT INTO `add_guitar` (`id`, `GuitarName`, `GuitarPrice`, `GuitarOverview`, `GuitarCategory`, `GuitarBrand`, `ProductImage`) VALUES
(4, 'asdff', '1111', 'fdfdfd', 'Electric Guitars', 'GIBSON', 'code.PNG'),
(5, 'fdfd', '1111', 'fdfdfd', 'Electric Guitars', 'GIBSON', 'code.PNG'),
(6, 'dsdsdsd', '1212', 'dsdxzxzx', 'Twelve-string Guitars', 'Select Guitar Brand', 'k.jpg'),
(8, 'doneeee', '1332', 'fdfdfdfasas', 'Electro-acoustic Guitars', 'GIBSON', 'k.jpg'),
(16, 'aaaaa', '123', 'fdfsdfsddsd', 'Electric Guitars', 'FENDER', 'lo4.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'nepdev', 'nepdev');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(12) NOT NULL,
  `BrandName` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `BrandName`) VALUES
(2, 'GIBSON'),
(7, 'VCVCV'),
(4, 'FENDER');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(12) NOT NULL,
  `GuitarCategory` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `GuitarCategory`) VALUES
(4, 'Acoustic Guitars'),
(5, 'Electric Guitars'),
(6, 'Electro-acoustic Guitars'),
(7, 'Twelve-string Guitars'),
(8, 'Archtop Guitars'),
(9, 'Fdfdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_guitar`
--
ALTER TABLE `add_guitar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_guitar`
--
ALTER TABLE `add_guitar`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
