-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2020 at 07:51 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `profile`) VALUES
(1, 'Gh', 'qwerty', 'about-img.jpg'),
(13, 'ace', 'ace', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `appointment_date` varchar(100) NOT NULL,
  `symptoms` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_booked` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `firstname`, `surname`, `gender`, `phone`, `appointment_date`, `symptoms`, `status`, `date_booked`) VALUES
(1, 'Dickson', 'Ace', 'Male', '233304000000', '2020-06-20', 'headache', 'Discharge', '2020-06-19 10:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `data_reg` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `firstname`, `surname`, `username`, `email`, `gender`, `phone`, `country`, `password`, `salary`, `data_reg`, `status`, `profile`) VALUES
(7, 'Dickson', 'Hermex', 'Hermex', 'ace@gmail.com', 'Male', '233550905300', 'Russia', 'new', '20', '2020-06-15 18:28:24', 'Approved', 'Screenshot (87).png');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

DROP TABLE IF EXISTS `income`;
CREATE TABLE IF NOT EXISTS `income` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `doctor` varchar(100) NOT NULL,
  `patient` varchar(100) NOT NULL,
  `date_discharge` varchar(100) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `doctor`, `patient`, `date_discharge`, `amount_paid`, `description`) VALUES
(3, 'hermex', 'Dickson', '2020-06-19 11:08:16', '500', 'sleep more than eight hours per day'),
(4, 'hermex', 'Dickson', '2020-06-19 11:11:59', '500', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_reg` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `firstname`, `surname`, `username`, `email`, `phone`, `gender`, `country`, `password`, `date_reg`, `profile`) VALUES
(1, 'Dickson', 'Ace', 'Qwerty', 'ace@gmail.com', '233304000000', 'Male', 'Russia', 'qwerty', '2020-06-17 17:20:46', 'FB_IMG_1567619098030.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date_send` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `title`, `message`, `username`, `date_send`) VALUES
(1, 'Send Report', 'My Invoice I recieved Is too much', 'Ace', '2020-06-18 09:15:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
