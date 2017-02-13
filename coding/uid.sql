-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2015 at 05:30 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(200) NOT NULL,
  `pswd` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pswd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `create_acc`
--

CREATE TABLE IF NOT EXISTS `create_acc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pswd` varchar(100) NOT NULL,
  `ph` varchar(12) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `native` varchar(100) NOT NULL,
  `salary` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `create_acc`
--

INSERT INTO `create_acc` (`id`, `name`, `email`, `uname`, `pswd`, `ph`, `dept`, `native`, `salary`) VALUES
(1, 'sudheesh', '2dsudheesh@gmail.com', 'sudheesh', '123', '9786819939', 'cse', 'mullanvayal', 250000),
(2, 'raja', 'sureshmessiraja@gmail.com', 'sraja', 'suresh123', '9025345487', 'cse', 'coimbathore', 500000),
(3, 'sudheesh1', '2dsudheesh@gmail.com', 'admin', '123', '9451245786', '', 'erode', 50000),
(4, 'sudheesh1ee', '2dsudheeseh@gmail.com', 'admin', 'eeee', '9451245856', '', 'erodett', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `pswd` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `pswd`) VALUES
(1, 'sudheesh', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
