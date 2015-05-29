-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2015 at 07:06 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adtailors`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmeasurements`
--

CREATE TABLE IF NOT EXISTS `bmeasurements` (
  `Mid` int(11) NOT NULL,
  `SleeveLen` float NOT NULL,
  `Uid` int(11) NOT NULL,
  `ShoulderLen` float NOT NULL,
  `Chest` float NOT NULL,
  `Waist` float NOT NULL,
  `BlouseLen` float NOT NULL,
  `blouseImg` longblob NOT NULL,
  PRIMARY KEY (`Mid`),
  UNIQUE KEY `Uid` (`Uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bmeasurements`
--

INSERT INTO `bmeasurements` (`Mid`, `SleeveLen`, `Uid`, `ShoulderLen`, `Chest`, `Waist`, `BlouseLen`, `blouseImg`) VALUES
(1, 0, 1, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
  `Uid` int(11) NOT NULL,
  `UName` varchar(30) NOT NULL,
  `UPass` varchar(15) NOT NULL,
  PRIMARY KEY (`Uid`),
  UNIQUE KEY `UName` (`UName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
