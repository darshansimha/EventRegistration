-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2014 at 05:21 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cat-family_day`
--

-- --------------------------------------------------------

--
-- Table structure for table `arrived_list`
--

CREATE TABLE IF NOT EXISTS `arrived_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `cws` varchar(10) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `adults` varchar(1) NOT NULL,
  `k1` varchar(10) NOT NULL DEFAULT '0',
  `k2` varchar(24) NOT NULL DEFAULT '0',
  `k3` varchar(22) NOT NULL DEFAULT '0',
  `section` varchar(31) NOT NULL,
  `souvenir` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `souvenir` (`souvenir`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=929 ;

--
-- Dumping data for table `arrived_list`
--


-- --------------------------------------------------------

--
-- Table structure for table `guest_list`
--

CREATE TABLE IF NOT EXISTS `guest_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `cws` varchar(10) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `adults` varchar(1) NOT NULL,
  `k1` varchar(10) NOT NULL DEFAULT '0',
  `k2` varchar(24) NOT NULL DEFAULT '0',
  `k3` varchar(22) NOT NULL DEFAULT '0',
  `section` varchar(31) NOT NULL,
  `souvenir` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `souvenir` (`souvenir`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=928 ;

--
-- Dumping data for table `guest_list`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
