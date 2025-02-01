-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 01, 2024 at 03:26 AM
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `profile` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `username`, `password`, `profile`) VALUES
(1, 'admin', '1234admin', 'img1.jpg'),
(21, 'admin21', 'admin@12', 'img3.jpg'),
(20, 'admin20', 'admin@1234', 'img4.jpg'),
(22, 'admin22', 'admin@22', 'img1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `appoint_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(15) DEFAULT NULL,
  `surname` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `appointment_date` varchar(10) DEFAULT NULL,
  `symptoms` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `date_booked` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`appoint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appoint_id`, `firstname`, `surname`, `gender`, `phone`, `appointment_date`, `symptoms`, `status`, `date_booked`) VALUES
(8, 'Ibrahim', 'Ali', 'Male', '9456763410', '2024-09-18', 'fever', 'Discharged', '2024-09-01'),
(7, 'Tom ', 'Schreddy', 'Male', '7654876798', '2024-09-20', 'Stomach Pain', 'Pendding', '2024-09-01'),
(6, 'Tom ', 'Schreddy', 'Male', '7654876798', '2024-09-12', 'fever, headache', 'Pendding', '2024-09-01');

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

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `date_reg` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `title`, `message`, `username`, `date_reg`) VALUES
(1, 'demo', 'where is my invoice?', 'will12', '2024-04-23 08:2'),
(2, 'Good', 'Very good staffing ', 'tom12', '2024-09-01 08:4'),
(3, 'Management ', 'Management is good. Well arranged ', 'tom12', '2024-09-01 08:4'),
(5, 'Doctors', 'Very good doctors and friendly behaviour', 'tom12', '2024-09-01 08:4'),
(6, 'Staffing', 'all the staffs have friendly behavior. I liked it', 'ali', '2024-09-01 08:5');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

DROP TABLE IF EXISTS `income`;
CREATE TABLE IF NOT EXISTS `income` (
  `inc_id` int NOT NULL AUTO_INCREMENT,
  `doctor` varchar(20) DEFAULT NULL,
  `patient` varchar(20) DEFAULT NULL,
  `date_discharge` varchar(15) DEFAULT NULL,
  `amount_paid` varchar(10) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`inc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`inc_id`, `doctor`, `patient`, `date_discharge`, `amount_paid`, `description`) VALUES
(6, 'tom12', 'Ibrahim', '2024-09-01 08:5', '120', 'Take paracetamol and vitamin A tablets each from both on three times a day');

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
