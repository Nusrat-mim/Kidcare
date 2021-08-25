-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 09:21 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kidcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `daycare`
--

CREATE TABLE `daycare` (
  `Name` varchar(100) DEFAULT NULL,
  `Website` varchar(100) DEFAULT NULL,
  `Phone` varchar(11) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daycare`
--

INSERT INTO `daycare` (`Name`, `Website`, `Phone`, `Location`) VALUES
('Creative Day Care and Pre Schooling Center', 'info@creativedaycare.org', '01963297241', 'House No: 806, Adabor, Shyamoli, Dhaka, 1207, Rd No. 3, Dhaka'),
('Childcheer', 'childcheer@gmail.com', '01616924337', 'House # 15, Road # 1 Block # C, Banasree, Rampura, Dhaka'),
('Kids Paradise Day Care Center', 'www.facebook.com/kidsparadisebd', '01734888523', 'House 19, Road No 13A, Dhanmondi, Dhaka 1209'),
('Kidz Leadz Preschool, Daycare & Child Development Center', 'https://kidzleadz.business.site/', '01921059724', 'House# 25, Road# 14, Sector# 13 Uttara; Dhaka');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
