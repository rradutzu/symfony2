-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2012 at 11:29 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.6-1ubuntu1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `symfony`
--

-- --------------------------------------------------------

--
-- Table structure for table `Site`
--

DROP TABLE IF EXISTS `Site`;
CREATE TABLE `Site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `url` varchar(150) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `Site`
--

INSERT INTO `Site` (`id`, `name`, `url`, `is_active`, `created_at`) VALUES
(1, 'Facebook', 'http://www.facebook.com', 1, '2012-10-23 07:58:27'),
(2, 'Google', 'http://www.google.com', 1, '2012-10-23 07:58:35'),
(3, 'Fight4Fame', 'http://www.fight4fame.com', 0, '2012-10-23 07:58:45'),
(4, 'Awwwards', 'http://www.awwwards.com', 1, '2012-10-23 08:00:06'),
(5, 'Megaupload', 'http://www.megaupload.com', 0, '2012-10-23 08:00:15'),
(6, 'Diseara', 'http://diseara.ro', 0, '2012-10-23 08:00:42'),
(7, 'BBC', 'http://BBC.com', 1, '2012-10-23 08:01:33'),
(8, 'EA', 'http://www.ea.com', 1, '2012-10-23 08:02:30'),
(9, 'OOL90', 'http://www.ool90.ro', 1, '2012-10-23 08:02:55'),
(10, 'Yahoo', 'http://www.yahoo.com', 1, '2012-10-23 08:04:09'),
(11, 'Skype', 'http://www.skype.com', 1, '2012-10-23 08:04:22'),
(12, 'AOL', 'http://www.aol.com', 1, '2012-10-23 08:05:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
