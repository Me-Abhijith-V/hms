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
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `salary` varchar(10) DEFAULT NULL,
  `data_reg` varchar(15) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `profile` varchar(75) DEFAULT NULL,
  `specialization` varchar(50) DEFAULT NULL,
  `experience` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `firstname`, `surname`, `username`, `email`, `gender`, `phone`, `country`, `password`, `salary`, `data_reg`, `status`, `profile`, `specialization`, `experience`) VALUES
(11, 'Dayana ', 'Philips', 'dayana79', 'dayana345@gmail.com', 'Female', '5645765678', 'India', 'dayana@34', '0', '2024-09-01 08:0', 'Pendding', '', 'Nephrology', '5'),
(10, 'Tom ', 'Santer', 'tom12', 'tom12@gmail.com', 'Male', '6545342434', 'India', 'tom@123', '120000', '2024-09-01 08:0', 'Approved', 'img3.jpg', 'Cardiology', '2'),
(12, 'Manu', 'Kurian', 'manu123', 'manu@gmail.com', 'Male', '5645342387', 'India', 'manu@123', '0', '2024-09-01 08:0', 'Pendding', '', 'Radiology', '1'),
(13, 'Christiana', 'Freddy', 'christiana', 'christiana@gmail.com', 'Female', '6756875423', 'India', 'christiana@123', '0', '2024-09-01 08:0', 'Approved', '', 'Neurology', '10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
