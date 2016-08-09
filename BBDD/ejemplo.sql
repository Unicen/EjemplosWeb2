-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2013 at 04:13 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ejemplo`
--

-- --------------------------------------------------------

--
-- Table structure for table `mensaje`
--

CREATE TABLE IF NOT EXISTS `mensaje` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(20) NOT NULL,
  `Texto` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mensaje`
--

INSERT INTO `mensaje` (`ID`, `Titulo`, `Texto`) VALUES
(1, 'Titulo 1', 'Este es el primer mensaje de la base'),
(2, 'Titulo 2', 'Este es el segundo mensaje de la base'),
(3, 'Titulo 3', 'Este es el tercer mensaje de la base'),
(4, 'Titulo 4', 'Este es el cuarto mensaje de la base');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
