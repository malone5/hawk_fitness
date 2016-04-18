-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2016 at 10:41 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hawk_fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendees`
--

CREATE TABLE IF NOT EXISTS `attendees` (
  `id` int(10) NOT NULL,
  `class_type` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `student_id` varchar(8) NOT NULL,
  `acad_level` varchar(10) NOT NULL,
  `attendee` varchar(10) NOT NULL,
  `email` varchar(75) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_type`
--

CREATE TABLE IF NOT EXISTS `class_type` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_type`
--

INSERT INTO `class_type` (`id`, `name`, `description`) VALUES
(7, 'Zumba', 'Zumba classes feature exotic rhythms set to high-energy Latin and international beats. Before participants know it, they’re getting fit and their energy levels are soaring! There’s no other fitness class like a Zumba Fitness-Party. It’s easy to do, effective and totally exhilarating!'),
(8, 'Bootcamp', 'Total body workout. Exercises are geared to hit upper and lower body as well as increase cardio-respiratory endurance.  Exercises are mostly used with body-weight.\r\nUses interval training and cardio to get your heart pumping, 45 minute class.'),
(9, 'Pilates', 'Pilates a balanced development of the body through core strength, flexibility, and incorporates a brief cardio routine and an extended toning routine using mat Pilates techniques.'),
(10, 'Pilates Yoga Fusion', 'A blend of core Pilates movements and traditional yoga stretches and various poses.'),
(11, 'Abs, Legs, and Butt', 'Targeting glutes, abdominals, hamstrings, calves, and quads.  Designed to increase heart rate, trim fat and tighten/tone/shape/build the booty, legs and abs.'),
(12, 'Yoga', 'his class focuses on stress relief and positive energy while moving through various yoga poses that help you tone and lengthen your body. This class is open to all levels and can be modified to fit the needs of athletes as well as beginners. '),
(13, 'Cardio Kick Boxing', 'This class focuses on punching and kicking you way to a higher fitness level. This is a great way to burn off steam as well as burn off calories.'),
(14, 'Circuit Training', 'This class focus on a mix of cardio, core building exercises and strength and conditioning. Station work and intervals are used to build strength and increase over cardiovascular health.'),
(15, 'High-intensity inter', 'A workout that improves cardiovascular fitness, increase speed and maximize calorie burn. This workout uses a variety of body weight exercises and provides the challenge and intensity you need to get results fast.'),
(16, 'Fun Fit', 'This class is designed as a competitive fitness class that incorporates resistance, speed and strength exercises formed as games. At the beginning of each class teams are formed and the exercises and drills are given to them as well as the specific scoring system. This class is a great way to improve your level of fitness as well as developing teamwork skills.'),
(17, 'Abs Attack', 'Targeting your core.  Designed to increase heart rate, and tighten/tone/shape/build your core.');

-- --------------------------------------------------------

--
-- Table structure for table `fit_classes`
--

CREATE TABLE IF NOT EXISTS `fit_classes` (
  `id` int(11) NOT NULL,
  `class_type` varchar(20) NOT NULL,
  `instructor` varchar(30) NOT NULL,
  `location` varchar(20) NOT NULL,
  `start_time` varchar(8) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `pword` varchar(64) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pword`, `fname`, `lname`, `email`, `role`) VALUES
(1, 'admin1', '36a5910394733b975acf825be4b26c5e', 'Jon', 'Cascone', 'test@test.com', 'admin'),
(2, 'limit1', '6ab7f181d46f9b162cb5b0e330dee30b', 'Limited', 'Account', '', 'limited');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendees`
--
ALTER TABLE `attendees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_type`
--
ALTER TABLE `class_type`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `fit_classes`
--
ALTER TABLE `fit_classes`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendees`
--
ALTER TABLE `attendees`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `class_type`
--
ALTER TABLE `class_type`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `fit_classes`
--
ALTER TABLE `fit_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
