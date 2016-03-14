-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2016 at 01:10 PM
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
  `attendee` varchar(10) NOT NULL,
  `email` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `attendees`
--

INSERT INTO `attendees` (`id`, `class_type`, `fname`, `lname`, `student_id`, `acad_level`, `attendee`, `email`) VALUES
(1, 'Yoga', 'Tim', 'Norton', '23414214', 'Junior', 'Student', ''),
(2, 'Yoga', 'Kyle', 'Wohoo', '123536', 'Sophomore', 'Student', ''),
(5, 'Yoga', 'Zoom', 'Vroom', '234524', '', 'Alumni', ''),
(6, 'Butt Buster', 'isajfhs', 'hsdifah', '3423455', '', 'Faculty', ''),
(7, 'Butt Buster', 'Jim ', 'Trombone', '2134123', '', 'Alumni', ''),
(8, 'Butt Buster', 'Arthur', 'Mane', '7283478', 'Sophomore', 'Student', ''),
(19, 'Zumba', 'jshfui', 'uiehrf', '', '', 'Faculty', ''),
(20, 'Zumba', 'owper', 'oipf', '5326', '', 'Faculty', ''),
(21, 'Zumba', 'qweip', 'nxvk', '42362', '', 'Faculty', ''),
(22, 'Yoga', 'Zakoota ', 'Jin', '21352131', '', 'Other', ''),
(23, 'Yoga', 'Raj', 'Malhotra', 's3242662', 'Sophomore', 'Student', ''),
(24, '“Abs, Legs & Butt”', '', '', 's', '', 'Alumni', ''),
(25, '“Abs, Legs & Butt”', 'sdfsaf', 'sdfsadf', 's5454345', 'Sophomore', 'Alumni', ''),
(31, 'Yoga', 'fdsafas', 'sdfsaf', 's4324', '', 'Alumni', ''),
(32, 'Yoga', 'gfdsg', 'ret', 's423425', '', 'Faculty', ''),
(33, 'Yoga', '4342', 'rweqer', 's4324', '', 'Faculty', ''),
(34, 'Yoga', '555', '333', 's32', '', 'Faculty', ''),
(35, 'Yoga', 'Hero', 'Zero', 's789456', '', 'Faculty', ''),
(36, 'Yoga', 'Last', 'First', 's445566', '', 'Alumni', ''),
(37, 'Yoga', 'sfjksfh', 'hfdksajfh', 's789415', '', 'Faculty', ''),
(38, 'Yoga', 'kopasjf', 'jfskjf', 's546879', '', 'Faculty', ''),
(39, 'Yoga', 'kjshfkjsah', 'fdsafkjh', 's2134567', '', 'Alumni', ''),
(40, 'Yoga', 'dsfas', 'dfsgdg', 's476578', '', 'Faculty', ''),
(41, 'Yoga', 'alo', 'paoul', 's456456', '', 'Alumni', ''),
(42, 'Yoga', 'yello', 'mello', 's456982', 'Senior', 'Student', ''),
(43, 'Yoga', 'WOO', 'WOO', 's45654', '', 'Faculty', ''),
(44, 'Yoga', 'timeout', 'smile', 's8888888', '', 'Faculty', ''),
(45, 'Yoga', 'test', 'me', 's6666666', '', 'Faculty', ''),
(46, 'Kickboxing', 'refresh', 'tofresh', 's5656898', '', 'Faculty', ''),
(47, 'Kickboxing', '89', '56', 's777744', 'Junior', 'Student', ''),
(48, 'Kickboxing', 'add', 'me', 's4', '', 'Faculty', ''),
(49, 'Kickboxing', 'super', 'man', 's55555', 'Sophomore', 'Student', ''),
(50, 'Kickboxing', 'super', 'man', 's45465', '', 'Faculty', ''),
(51, 'Kickboxing', 'hoorah', 'murew2', 's12', '', 'Alumni', ''),
(52, 'Kickboxing', 'power', 'ranger', 's888888', 'Senior', 'Student', ''),
(53, 'Butt Buster', 'gdsgds', 'gdfgsdfg', 's4532534', 'Sophomore', 'Student', ''),
(54, 'Yoga', 'dsf', 'dfsg', 's3424', '', 'Faculty', ''),
(55, '“Abs, Legs & Butt”', 'dfgsdg', 'dsgsdfg', 's2314324', '', 'Faculty', ''),
(56, '“Abs, Legs & Butt”', 'fdfs', 'sdfsaf', 's4234214', '', 'Alumni', ''),
(57, '“Abs, Legs & Butt”', 'gdgsd', 'fdsgd', 's454324', '', 'Faculty', ''),
(58, '“Abs, Legs & Butt”', 'Yuka', 'Mull', 's3424325', '', 'Alumni', ''),
(59, 'Zumba', 'fsafsdf', 'sdfsdaf', 's4578484', '', 'Alumni', ''),
(77, 'Kickboxing', 'gfjh', 'jhgfj', 's6546', 'Junior', 'Faculty', ''),
(78, 'Kickboxing', 'rwrgs', 'sdaf', 's5324552', '', 'Faculty', ''),
(79, 'Kickboxing', 'Bioler', 'Rod', 's98213', '', 'Faculty', ''),
(80, 'Kickboxing', 'Tum', 'Dart', 's9999999', 'Sophomore', 'Student', ''),
(81, 'Kickboxing', 'BIll', 'Goldberg', 's3333333', '', 'Alumni', ''),
(82, 'Zumba', 'Tom', '', 's4312341', 'Sophmore', 'Student', 'tom@mail.com'),
(83, 'Zumba', 'Tupac Shakur', '', 's32424', '', 'Faculty', '2pac@mail.com'),
(84, 'Zumba', 'saradss tragtfgsdf', '', 's5223435', '', 'Student', '');

-- --------------------------------------------------------

--
-- Table structure for table `class_type`
--

CREATE TABLE IF NOT EXISTS `class_type` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `class_type`
--

INSERT INTO `class_type` (`id`, `name`, `description`) VALUES
(1, '“Abs, Legs & Butt”', 'no'),
(3, 'Butt Buster', 'This is ButtBuster description'),
(4, 'Kickboxing', 'This is Kickboxing description is stupid'),
(5, 'Zumba', 'This is Zumba description'),
(6, 'Yoga', 'YOGA! ');

-- --------------------------------------------------------

--
-- Table structure for table `fit_classes`
--

CREATE TABLE IF NOT EXISTS `fit_classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_type` varchar(20) NOT NULL,
  `instructor` varchar(30) NOT NULL,
  `location` varchar(20) NOT NULL,
  `start_time` varchar(8) NOT NULL,
  `date` date NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `fit_classes`
--

INSERT INTO `fit_classes` (`id`, `class_type`, `instructor`, `location`, `start_time`, `date`) VALUES
(1, 'Kickboxing', 'Nicki Minaj', 'The Mansion', '5:00pm', '2016-03-01'),
(14, 'Butt Buster', 'Sean', 'Boylin Gym', '8:30pm', '2016-03-05'),
(15, 'Zumba', 'Miles Autsin', 'Boylin Gym', '9:30pm', '2016-03-11'),
(17, 'Kickboxing', 'Ken', 'MAC', '11:00pm', '2015-11-27'),
(18, 'Yoga', 'Sir Mix-A-Lot', 'Hollywood', '9:00pm', '2016-02-02'),
(19, 'Butt Buster', 'Guru Ghulab', 'Yoga Studio', '6:30', '2016-02-01'),
(28, 'Yoga', 'Sgt. Hell', 'Fire Hall', '6:66PM', '2016-02-20'),
(29, 'Kickboxing', 'Ken', 'Mom''s House', '2:00PM', '2016-02-27'),
(30, '“Abs, Legs & Butt”', 'Barbie', 'Ken''s Mansion', '9:00PM', '2016-02-28'),
(31, 'Butt Buster', 'Romy', 'East Club', '1:30PM', '2016-02-20'),
(41, '“Abs, Legs & Butt”', 'Burns', 'City Hall', '8:00PM', '2016-02-27'),
(48, 'Kickboxing', 'Yogi', 'Walahala', '5:43AM', '2016-03-05'),
(58, '“Abs, Legs & Butt”', 'Baxter', 'Burns', '06:56', '2016-02-13'),
(63, 'Butt Buster', 'Check', 'Boo', '16:30', '2016-02-24'),
(66, 'Kickboxing', 'Roman', 'Empire', '12:00pm', '2016-02-23'),
(67, 'Kickboxing', 'spongebob', 'bikini bottom', '2:30pm', '2016-02-28'),
(68, 'Butt Buster', 'Patrick Star', 'Under a Rock', '8:30am', '2016-02-28'),
(78, 'Kickboxing', 'Timothy', 'Carver', '11:00am', '2016-02-25'),
(79, 'Zumba', 'Dummy', 'Dummy', '7:30pm', '2016-03-06'),
(80, 'Kickboxing', 'Big Poppa', 'dgg', '8:00am', '2016-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `uname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pword` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
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
(1, 'admin1', 'secrete', 'Jon', 'Cascone', 'raheelshuja@gmail.com', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
