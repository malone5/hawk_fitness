-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2016 at 10:00 PM
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
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `class_type` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `student_id` varchar(8) NOT NULL,
  `acad_level` varchar(10) NOT NULL,
  `age` int(2) NOT NULL,
  `attendee` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `attendees`
--

INSERT INTO `attendees` (`id`, `class_type`, `fname`, `lname`, `student_id`, `acad_level`, `age`, `attendee`) VALUES
(1, 'Yoga', 'Tim', 'Norton', '23414214', 'Junior', 43, 'Student'),
(2, 'Yoga', 'Kyle', 'Wohoo', '123536', 'Sophomore', 74, 'Student'),
(5, 'Yoga', 'Zoom', 'Vroom', '234524', '', 18, 'Alumni'),
(6, 'Butt Buster', 'isajfhs', 'hsdifah', '3423455', '', 54, 'Faculty'),
(7, 'Butt Buster', 'Jim ', 'Trombone', '2134123', '', 32, 'Alumni'),
(8, 'Butt Buster', 'Arthur', 'Mane', '7283478', 'Sophomore', 18, 'Student'),
(19, 'Zumba', 'jshfui', 'uiehrf', '', '', 41, 'Faculty'),
(20, 'Zumba', 'owper', 'oipf', '5326', '', 32, 'Faculty'),
(21, 'Zumba', 'qweip', 'nxvk', '42362', '', 23, 'Faculty'),
(22, 'Yoga', 'Zakoota ', 'Jin', '21352131', '', 99, 'Other'),
(23, 'Yoga', 'Raj', 'Malhotra', 's3242662', 'Sophomore', 24, 'Student'),
(24, '“Abs, Legs & Butt”', '', '', 's', '', 0, 'Alumni'),
(25, '“Abs, Legs & Butt”', 'sdfsaf', 'sdfsadf', 's5454345', 'Sophomore', 53, 'Alumni'),
(31, 'Yoga', 'fdsafas', 'sdfsaf', 's4324', '', 43, 'Alumni'),
(32, 'Yoga', 'gfdsg', 'ret', 's423425', '', 99, 'Faculty'),
(33, 'Yoga', '4342', 'rweqer', 's4324', '', 52, 'Faculty'),
(34, 'Yoga', '555', '333', 's32', '', 11, 'Faculty'),
(35, 'Yoga', 'Hero', 'Zero', 's789456', '', 45, 'Faculty'),
(36, 'Yoga', 'Last', 'First', 's445566', '', 78, 'Alumni'),
(37, 'Yoga', 'sfjksfh', 'hfdksajfh', 's789415', '', 78, 'Faculty'),
(38, 'Yoga', 'kopasjf', 'jfskjf', 's546879', '', 45, 'Faculty'),
(39, 'Yoga', 'kjshfkjsah', 'fdsafkjh', 's2134567', '', 78, 'Alumni'),
(40, 'Yoga', 'dsfas', 'dfsgdg', 's476578', '', 89, 'Faculty'),
(41, 'Yoga', 'alo', 'paoul', 's456456', '', 77, 'Alumni'),
(42, 'Yoga', 'yello', 'mello', 's456982', 'Senior', 68, 'Student'),
(43, 'Yoga', 'WOO', 'WOO', 's45654', '', 34, 'Faculty'),
(44, 'Yoga', 'timeout', 'smile', 's8888888', '', 44, 'Faculty'),
(45, 'Yoga', 'test', 'me', 's6666666', '', 66, 'Faculty'),
(46, 'Kickboxing', 'refresh', 'tofresh', 's5656898', '', 77, 'Faculty'),
(47, 'Kickboxing', '89', '56', 's777744', 'Junior', 12, 'Student'),
(48, 'Kickboxing', 'add', 'me', 's4', '', 45, 'Faculty'),
(49, 'Kickboxing', 'super', 'man', 's55555', 'Sophomore', 78, 'Student'),
(50, 'Kickboxing', 'super', 'man', 's45465', '', 78, 'Faculty'),
(51, 'Kickboxing', 'hoorah', 'murew2', 's12', '', 99, 'Alumni'),
(52, 'Kickboxing', 'power', 'ranger', 's888888', 'Senior', 21, 'Student'),
(53, 'Butt Buster', 'gdsgds', 'gdfgsdfg', 's4532534', 'Sophomore', 22, 'Student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
