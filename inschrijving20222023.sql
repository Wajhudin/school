-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 15, 2022 at 06:52 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voetbal`
--

-- --------------------------------------------------------

--
-- Table structure for table `inschrijving20222023`
--

DROP TABLE IF EXISTS `inschrijving20222023`;
CREATE TABLE IF NOT EXISTS `inschrijving20222023` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `naam` varchar(30) DEFAULT NULL,
  `voornaam` varchar(30) DEFAULT NULL,
  `ploeg` varchar(30) DEFAULT NULL,
  `wedstrijdkledij` varchar(3) DEFAULT NULL,
  `trainingspak` varchar(3) DEFAULT NULL,
  `bal` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inschrijving20222023`
--

INSERT INTO `inschrijving20222023` (`id`, `naam`, `voornaam`, `ploeg`, `wedstrijdkledij`, `trainingspak`, `bal`) VALUES
(23, 'wajhudin', 'ibrahim', 'U8', 'NEE', 'JA', 'JA'),
(22, 'wajhudin', 'ibrahim', 'U8', '', 'JA', 'JA'),
(21, 'wajhudin', 'ibrahim', 'U8', '', 'JA', 'JA'),
(20, 'wajhudin', 'ibrahim', '', 'U8', 'JA', 'JA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
