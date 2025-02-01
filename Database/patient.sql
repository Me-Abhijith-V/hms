-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 01, 2024 at 03:27 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `pid` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `date_reg` varchar(15) DEFAULT NULL,
  `profile` varchar(75) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `firstname`, `surname`, `username`, `email`, `gender`, `phone`, `country`, `password`, `date_reg`, `profile`, `blood_group`) VALUES
(1, 'Ibrahim', 'Ali', 'ali', 'aliibrahim@gmail.com', 'Male', '9456763410', 'India', 'ali123', '2024-09-01 08:1', 'img1.jpg', 'O +ve'),
(2, 'James', 'Anderson', 'james', 'james99@gmail.com', 'Male', '9400342565', 'India', 'james', '2024-09-01 08:1', '', 'AB-ve'),
(6, 'Tom ', 'Schreddy', 'tom12', 'tom123@gmail.com', 'Male', '7654876798', 'India', 'tom@123', '2024-09-01 08:1', 'img2.jpg', 'O+ve'),
(7, 'Sunny', 'Philips', 'sunny', 'sunny@gmail.co', 'Male', '9434578210', 'India', 'sunny@123', '2024-09-01 08:1', '', 'B +ve');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
