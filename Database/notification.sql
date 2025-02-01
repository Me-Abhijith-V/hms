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
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `nid` int NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_sent` varchar(15) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `title`, `message`, `date_sent`) VALUES
(1, 'Doctor', 'Recruitment for doctors', '2024-07-29 11:4'),
(2, 'A new doctor joined', 'A new doctor jointed on our hospital', '2024-08-30 19:2'),
(3, 'Blood donation camp', 'Blood donation camp is conducted on next saturday, sunday', '2024-09-01 07:5'),
(4, 'Free Checkup ', 'Free medical checkup is available for bpl patients', '2024-09-01 07:5'),
(5, 'Eye checkup ', 'Free eye checkup is available for all patients', '2024-09-01 07:5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
