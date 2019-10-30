-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: beokzru4hqmlcmyupvm4-mysql.services.clever-cloud.com:3306
-- Generation Time: Oct 30, 2019 at 07:58 AM
-- Server version: 8.0.13-3
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beokzru4hqmlcmyupvm4`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `dato` varchar(100) NOT NULL,
  `fecha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `dato`, `fecha`) VALUES
(263, 'danieltest12345', '10 / 30 / 2019 / 2:40 AM'),
(264, 'testnumero2', '10 / 30 / 2019 / 2:40 AM'),
(265, 'testnumero22', '10 / 30 / 2019 / 2:44 AM'),
(266, 'holamundo', '10 / 30 / 2019 / 2:44 AM'),
(267, 'holamundo2', '10 / 30 / 2019 / 2:50 AM'),
(268, 'holamundo3', '10 / 30 / 2019 / 2:56 AM'),
(269, 'holamundo4', '10 / 30 / 2019 / 2:57 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
