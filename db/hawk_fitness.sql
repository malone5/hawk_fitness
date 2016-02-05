-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2016 at 07:35 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hawk_fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendees`
--

CREATE TABLE IF NOT EXISTS `attendees` (
  `id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `student_id` varchar(8) NOT NULL,
  `acad_level` int(10) NOT NULL,
  `age` int(2) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_type`
--

CREATE TABLE IF NOT EXISTS `class_type` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `class_type`
--

INSERT INTO `class_type` (`id`, `name`, `description`) VALUES
(1, 'Yoga', ''),
(2, 'Pilates', ''),
(3, 'Butt Buster', ''),
(4, 'Kickboxing', ''),
(5, 'Zumba', '');

-- --------------------------------------------------------

--
-- Table structure for table `fit_classes`
--

CREATE TABLE IF NOT EXISTS `fit_classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(128) NOT NULL,
  `class_type` int(4) NOT NULL,
  `instructor` varchar(30) NOT NULL,
  `location` varchar(20) NOT NULL,
  `start_time` varchar(8) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `fit_classes`
--

INSERT INTO `fit_classes` (`id`, `slug`, `class_type`, `instructor`, `location`, `start_time`, `date`) VALUES
(14, '', 3, 'Sean', 'Boylin Gym', '8:30 PM', '2015-10-14'),
(15, '', 4, 'Miles Autsin', 'Boylin Gym', '9:30om', '2015-10-31'),
(16, '', 2, 'Mrs. Puff', 'Under the Boardwalk', '12:00pm', '2015-11-04'),
(17, '', 2, 'Ken', 'MAC', '3:30pm', '2015-11-27'),
(18, '', 1, 'Sir Mix-A-Lot', 'Hollywood', '9:00pm', '2016-02-02'),
(19, '', 1, 'Guru Ghulab', 'Yoga Studio', '6:30', '2016-02-01'),
(20, '', 4, 'Shady', 'Detroit', '9:30am', '2016-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `uname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pword`, `fname`, `lname`, `email`, `role`) VALUES
(1, 'admin1', 'secrete', 'Jon', 'Cascone', 'nothing@nothing.com', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
