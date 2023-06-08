-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2016 at 12:38 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eye`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `address`, `age`, `contact`, `email`, `username`) VALUES
(3, 'sa', 'sa', '21', '1212', 'sa@yahoo.com', 'sa'),
(4, 'yy', 'yy', '12', '3247823947', 'rhenoah17@gmail.com', 'yy');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(6, 'admin', 'admin', 'admin'),
(8, 'sa', 'sa', 'user'),
(9, 'yy', 'yy', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from1` varchar(255) DEFAULT NULL,
  `to1` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `from1`, `to1`, `subject`, `message`, `status`) VALUES
(8, 'sa', 'Admin', 'sasasa', 'sasa', 'Read'),
(12, 'sa', 'Admin', 'Reservation Request', 'Your reservation for 2016-09-21 has been rescheduled.', 'Read'),
(13, 'Admin', 'sa', 'mememe', 'meme', 'Read'),
(14, 'Admin', 'sa', 'Reservation Request', 'Your reservation for 2016-09-14 has been approved.', ''),
(15, 'Admin', 'sa', 'Reservation Request', 'Your reservation for 2016-10-29 has been approved.', ''),
(16, 'Admin', 'sa', 'Reservation Request', 'Your reservation for 2016-10-27 has been approved.', ''),
(17, 'Admin', 'sa', 'Reservation Request', 'Your reservation for 2016-10-27 has been approved.', ''),
(18, 'Admin', 'yy', 'Reservation Request', 'Your reservation for 2016-10-18 has been approved.', ''),
(19, 'yy', 'Admin', 'thanks', 'thank you', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package` varchar(255) DEFAULT NULL,
  `promo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package`, `promo`) VALUES
(4, 'Event Package - Package - A', 'Price - 17,000');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `package` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `occasion` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `username`, `package`, `date`, `occasion`, `name`, `status`) VALUES
(8, 'sa', 'Event Package - Package - A', '2016-09-15', 'birthday', 'sa', 'Approved'),
(9, 'sa', 'Event Package - Package - A', '2016-09-14', 'sa', 'sa', 'Approved'),
(10, 'sa', 'Event Package - Package - C', '2016-10-29', 'Family Reunions', 'sa', 'Approved'),
(11, 'sa', 'Event Package - Package - A', '2016-10-27', 'Birthdays', 'sa', 'Approved'),
(12, 'sa', 'Event Package - Package - B', '2016-10-27', 'School Reunions', 'sa', 'Pending'),
(13, 'sa', 'Photoshoot Package Indoor - Package - II', '2016-10-27', 'Family Reunions', 'sa', 'Approved'),
(14, 'yy', 'Event Package - Package - B', '2016-10-18', 'School Reunions', 'yy', 'Approved');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
