-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2016 at 05:15 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

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
(53, 'Butt Buster', 'gdsgds', 'gdfgsdfg', 's4532534', 'Sophomore', 22, 'Student'),
(54, 'Yoga', 'dsf', 'dfsg', 's3424', '', 43, 'Faculty'),
(55, '“Abs, Legs & Butt”', 'dfgsdg', 'dsgsdfg', 's2314324', '', 34, 'Faculty'),
(56, '“Abs, Legs & Butt”', 'fdfs', 'sdfsaf', 's4234214', '', 42, 'Alumni'),
(57, '“Abs, Legs & Butt”', 'gdgsd', 'fdsgd', 's454324', '', 43, 'Faculty'),
(58, '“Abs, Legs & Butt”', 'Yuka', 'Mull', 's3424325', '', 42, 'Alumni');

-- --------------------------------------------------------

--
-- Table structure for table `class_type`
--

CREATE TABLE IF NOT EXISTS `class_type` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  UNIQUE KEY `id` (`id`)
<<<<<<< HEAD
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
=======
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;
>>>>>>> 973bd8b80d388746ea91a52395bb8b403a8c9801

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
<<<<<<< HEAD
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;
=======
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;
>>>>>>> 973bd8b80d388746ea91a52395bb8b403a8c9801

--
-- Dumping data for table `fit_classes`
--

INSERT INTO `fit_classes` (`id`, `class_type`, `instructor`, `location`, `start_time`, `date`) VALUES
(1, 'Butt Buster', 'Nicki Minaj', 'The Mansion', '4:00PM', '2016-02-26'),
(14, 'Butt Buster', 'Sean', 'Boylin Gym', '8:30 PM', '2015-10-14'),
(15, 'Zumba', 'Miles Autsin', 'Boylin Gym', '9:30om', '2015-10-31'),
(17, 'Kickboxing', 'Ken', 'MAC', '3:30pm', '2015-11-27'),
(18, 'Yoga', 'Sir Mix-A-Lot', 'Hollywood', '9:00pm', '2016-02-02'),
(19, 'Butt Buster', 'Guru Ghulab', 'Yoga Studio', '6:30', '2016-02-01'),
(27, 'Kickboxing', 'test instruct changed to kickb', 'testt location updat', '8:00pm', '2016-02-18'),
(28, 'Yoga', 'Sgt. Hell', 'Fire Hall', '6:66PM', '2016-02-20'),
(29, 'Kickboxing', 'Ken', 'Mom''s House', '2:00PM', '2016-02-27'),
(30, '“Abs, Legs & Butt”', 'Barbie', 'Ken''s Mansion', '9:00PM', '2016-02-28'),
(31, 'Butt Buster', 'Romy', 'East Club', '1:30PM', '2016-02-20'),
(41, '“Abs, Legs & Butt”', 'Burns', 'City Hall', '8:00PM', '2016-02-27'),
(48, 'Kickboxing', 'Yogi', 'Walahala', '5:43AM', '2016-02-10'),
(58, '“Abs, Legs & Butt”', 'Baxter', 'Burns', '06:56', '2016-02-13'),
(63, 'Butt Buster', 'Check', 'Boo', '16:30', '2016-02-22'),
(66, 'Kickboxing', 'Roman', 'Empire', '12:00', '2016-02-27'),
(67, 'Kickboxing', 'spongebob', 'bikini bottom', '14:22', '2016-02-28'),
(68, 'Butt Buster', 'Patrick Star', 'Under a Rock', '08:56', '2016-02-28'),
(74, '“Abs, Legs & Butt”', 'Mr Squats', 'Low City', '16:53', '2016-02-26'),
(75, 'Kickboxing', 'Bruce Lee', 'Local Town', '03:02', '2016-02-27'),
(76, 'Zumba', 'BobbY', 'basement', '21:40', '2016-02-21'),
(77, 'Kickboxing', 'Tubbs', 'Men''s Room', '21:00', '2016-02-21');

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
