-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2012 at 05:04 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `idssystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `admin_name` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_name`, `admin_username`, `admin_password`) VALUES
('Mcjolly', 'IDS', 'System');

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE IF NOT EXISTS `cashier` (
  `cashier_name` varchar(50) NOT NULL,
  `cashier_username` varchar(50) NOT NULL,
  `cashier_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`cashier_name`, `cashier_username`, `cashier_password`) VALUES
('Katherine', 'Kat', 'Tan'),
('Kristine', 'Tin', 'Caracuel');

-- --------------------------------------------------------
--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `food_name` varchar(50) NOT NULL,
  `food_category` varchar(50) NOT NULL,
  `food_description` varchar(50) NOT NULL,
  `food_quantity` int(10) NOT NULL,
  `food_price` decimal(5,2) NOT NULL,
  `food_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_name` varchar(50) NOT NULL,
  `category_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table `category`
--

INSERT INTO `category` (`category_name`, `category_description`) VALUES
('food','a'),
('Extra','b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
