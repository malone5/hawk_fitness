-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2016 at 12:39 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hawkfitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `fit_classes`
--

CREATE TABLE IF NOT EXISTS `fit_classes` (
  `id` int(11) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `class_type` varchar(30) NOT NULL,
  `instructor` varchar(30) NOT NULL,
  `location` varchar(20) NOT NULL,
  `start_time` varchar(8) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fit_classes`
--

INSERT INTO `fit_classes` (`id`, `slug`, `class_type`, `instructor`, `location`, `start_time`, `date`) VALUES
(14, '', 'Yoga', 'Sean', 'Boylin Gym', '8:30 PM', '2015-10-14'),
(15, '', 'Butt Buster', 'Miles Autsin', 'Boylin Gym', '9:30om', '2015-10-31'),
(16, '', 'qwer', 'qwer', 'qwer', 'qewr', '2015-11-04'),
(17, '', 'cas', 'cas', 'cas', 'cas', '2015-11-27'),
(18, '', 'cas', 'cas', 'cas', 'cas', '2015-11-27'),
(19, '', 'qwer', 'qwer', 'qwer', 'qwer', '2015-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL,
  `uname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pword`, `fname`, `lname`, `email`, `role`) VALUES
(1, 'admin1', 'secrete', 'Jon', 'Cascone', 'nothing@nothing.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fit_classes`
--
ALTER TABLE `fit_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fit_classes`
--
ALTER TABLE `fit_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
