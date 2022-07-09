-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2020 at 10:28 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

DROP TABLE IF EXISTS `admin_data`;
CREATE TABLE IF NOT EXISTS `admin_data` (
  `Email` varchar(20) NOT NULL,
  `Password` varchar(202) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`Email`, `Password`, `id`) VALUES
('abcd@abcd.com', '25f9e794323b453885f5181f1b624d0b', 1),
('qwerty@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2),
('abc@abc.com', 'e80b5017098950fc58aad83c8c14978e', 3);

-- --------------------------------------------------------

--
-- Table structure for table `lib_data`
--

DROP TABLE IF EXISTS `lib_data`;
CREATE TABLE IF NOT EXISTS `lib_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib_data`
--

INSERT INTO `lib_data` (`id`, `Email`, `Password`) VALUES
(1, 'abcd@abcd.com', 'e10adc3949ba59abbe56e057f20f883e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
