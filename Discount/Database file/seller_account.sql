-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2015 at 01:38 PM
-- Server version: 5.6.23-enterprise-commercial-advanced-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `discount`
--

-- --------------------------------------------------------

--
-- Table structure for table `seller_account`
--

CREATE TABLE IF NOT EXISTS `seller_account` (
  `Full_Name` varchar(45) DEFAULT NULL,
  `Username` varchar(45) NOT NULL DEFAULT '',
  `Email` varchar(45) DEFAULT '',
  `Password` varchar(45) DEFAULT NULL,
  `Mobile_Number` varchar(45) DEFAULT NULL,
  `Company_Name` varchar(45) DEFAULT NULL,
  `Company_Address` varchar(45) DEFAULT NULL,
  `Area` varchar(30) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `State` varchar(45) DEFAULT NULL,
  `Zip_Code` varchar(6) DEFAULT NULL,
  `Product` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`Username`),
  FULLTEXT KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seller_account`
--

INSERT INTO `seller_account` (`Full_Name`, `Username`, `Email`, `Password`, `Mobile_Number`, `Company_Name`, `Company_Address`, `Area`, `City`, `State`, `Zip_Code`, `Product`) VALUES
('Ishwar', 'ishwar', 'rimish786@gmail.com', 'rimish', '8976854698', 'II', 'IJ', 'JK', 'PP', 'MM', '007', 'Internet Plan'),
('rimish bansod', 'rimish', 'rimish786@gmail.com', 'rimish', '9899880980', 'kjkj', 'kjkj', 'kjkj', 'kjkj', 'kjk', '878', 'Internet Plan'),
('Rimish Bansod', 'rimishswift', 'rimishgb@goswift.co.in', 'Khiladi_786', '7028257052', 'Goswift Exim Private Limited', 'Plot No. 115, Laxmi Nagar', 'Gujarat Colony', 'Pune', 'Maharashtra', '411005', 'Gym');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
