
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2016 at 04:48 PM
-- Server version: 10.0.22-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u776330406_jaro`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE IF NOT EXISTS `bid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `item`, `username`, `status`, `price`, `date`) VALUES
(13, '9', 'Karla', 'bidding', '9000', 'October 16, 2016');

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE IF NOT EXISTS `bidding` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `path1` varchar(255) DEFAULT NULL,
  `expire` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`id`, `item`, `price`, `path`, `path1`, `expire`, `status`) VALUES
(9, 'Oppo neo 7', '8000', 'uploads/oppo neo 7.jpg', 'oppo neo 7.jpg', '2016-10-19', ''),
(17, 'beaded watch', '7500', 'uploads/beaded watch.jpg', 'beaded watch.jpg', '2016-10-19', ''),
(11, 'Samsung galaxy S2', '5000', 'uploads/samsung galaxy s2.jpg', 'samsung galaxy s2.jpg', '2016-10-21', ''),
(12, 'Iphone4 16gb', '5000', 'uploads/iphone 4 16gb.jpg', 'iphone 4 16gb.jpg', '2016-10-22', ''),
(13, 'Gold Necklace', '17000', 'uploads/gold necklace.jpg', 'gold necklace.jpg', '2016-10-23', ''),
(14, 'Infinity necklace', '18000', 'uploads/infinity necklace.jpg', 'infinity necklace.jpg', '2016-10-24', ''),
(16, 'gol bracelet', '7000', 'uploads/saudi gold mens bracelet.jpg', 'saudi gold mens bracelet.jpg', '2016-10-17', ''),
(18, 'acer aspire', '23950', 'uploads/acer aspire.jpg', 'acer aspire.jpg', '2016-10-19', '');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `address`, `contact`, `birthday`, `age`, `username`, `password`) VALUES
(2, 'l', 'l', 'l', 'l', 'l', 'l', 'l'),
(8, 'Lyndon', 'Agoncillo', '123456789', 'june 23', '20', 'lyndon', 'lyndon'),
(7, 'Karla aala', 'Calaca batangas', '123456789', '48554', '19', 'Karla', 'karla'),
(9, 'darren', 'lemery', '0909324156', 'may 5', '19', 'darren', 'darren');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin'),
(3, 'l', 'l', 'user'),
(14, 'Karla', 'karla', 'user'),
(15, 'lyndon', 'lyndon', 'user'),
(16, 'darren', 'darren', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `from1` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `username`, `subject`, `message`, `from1`, `status`) VALUES
(17, 'admin', 'adfghjhgf', 'gdhndfld,fld', 'Karla', ''),
(8, 'a', 'sa', 'sa', 'Administrator', 'Read'),
(16, 'admin', 'qwert', 'asdfghjk', 'Karla', ''),
(14, 'admin', 'Qwe', 'Qwe', 'l', ''),
(13, 'a', 'g', 'fyg', 'Administrator', 'pending');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
