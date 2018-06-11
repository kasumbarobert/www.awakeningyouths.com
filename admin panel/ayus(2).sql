-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2015 at 04:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ayus`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminstrator`
--

CREATE TABLE IF NOT EXISTS `adminstrator` (
  `Admin_ID` varchar(10) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `Gender` enum('F','M') NOT NULL,
  `D.O.B` date NOT NULL,
  `Tel_Contact` int(10) NOT NULL,
  PRIMARY KEY (`Admin_ID`),
  UNIQUE KEY `Username` (`Email`,`Password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`user_id`, `fname`, `lname`, `username`, `email`, `password`) VALUES
(1, 'luther', 'martin', 'admin', 'admin@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_title` varchar(200) NOT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  `article_content` longtext,
  `post_date` date DEFAULT NULL,
  `post_time` time DEFAULT NULL,
  `posted_by` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `image_path`, `article_content`, `post_date`, `post_time`, `posted_by`, `status`) VALUES
(16, 'Youth Population growing higher and higher in Uganda', '', 'Tick. Tock. Tick. Tock.\r\n<br />\r\n<br />Can you hear that sound? That is the sound of a bomb ticking away, and that bomb is Ugandaâ€™s population. Over fifty percent of Ugandaâ€™s population is aged below thirty. That means that in fifty years, over fifty percent of Ugandaâ€™s population will be aged between fifty and eighty. That, right there, could either be a recipe for disaster or a huge opportunity we as a nation cannot afford to miss. In fifty years, Ugandaâ€™s young population could either take advantage of the statistics to catapult the country into prosperity, or could allow the best most productive years of their lives to go to waste and keep the country in a stagnant state of underdevelopment. The former option is the more desirable one, of course, but unfortunately, most of Ugandaâ€™s youths are waiting for change to happen to them instead of making the change they want to see happen. We spend our entire lives waiting to get to the next level in school, waiting to get accepted at that job we were interviewed for, waiting for the government to uplift the average Ugandanâ€™s living standardsâ€¦ \r\n<br />What would happen if the youths of Uganda took up the tool that is our youth and used it to create opportunities for ourselves? What would happen if, instead of waiting to get a call from that office that interviewed us, we all went out and started up something that would not only garner us a salary at the end of the month, but also improve the country as a whole? Uganda is blessed with a plethora of natural resources. A decade ago, it would have been okay for Uganda to take her time with development. We would be at the stage where all we would have to worry about development-wise would be the physical building of our nation. Now, however, as we move deeper into the computer age, it has become imperative that Uganda develops not only physically, but technologically and, for the people, mentally. For every road we need built, we need ten times as many internet cables. Itâ€™s no longer just about the engineers who can follow already written manuals and build the same old things, or the doctors who read the same old books and learn only to parrot what the books say, or the mechanics who just fix cars and add nothing to them. No, the world has evolved, and with it, the idea of development has changed as well. As a country, we need engineers who will look at these already made manuals and make something new; doctors who will discover new ways to combat old and new diseases; mechanics who will not only fix cars but also build cars, or ships, or planesâ€¦ We need computer wizards to chart our path in the ever growing cyber world. We need leaders to guide the nation in the right direction. We need writers and artistes to tell the world more about our country; to stand out and say, â€œLook! Weâ€™re a beautiful country of diverse talents and abilities!â€\r\n<br />\r\n<br />We need teachers to pass on education to the younger generation; to teach them to be the pillars of this nationâ€¦ And who better to do all these wonderful things than you and I, the youth of Uganda? Weâ€™re at a stage in our lives where we have been blessed with vitality and endless capability. If we stand up together to champion this noble cause, we can build a much better Uganda.\r\n<br />\r\n<br />This organisation is dedicated to enlightening and empowering the youth of Uganda to rise up to the challenge and transform our country into a true pearl of the current times. Together, we can be the change we want to see. Together, we can..', '2015-10-28', '14:43:00', 1, 'open');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `comment_details` varchar(500) DEFAULT NULL,
  `posted_by` varchar(60) DEFAULT NULL,
  `posted_date` date DEFAULT NULL,
  `posted_time` time DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `posted_by` (`posted_by`),
  KEY `article_id` (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `Event_ID` varchar(8) NOT NULL,
  `Event_title` varchar(30) NOT NULL,
  `Created_By` varchar(60) DEFAULT NULL,
  `Event_Description` mediumtext NOT NULL,
  `Due_Date` date NOT NULL,
  `due_time` time NOT NULL,
  `venue` varchar(100) DEFAULT NULL,
  `event_status` int(1) NOT NULL DEFAULT '0' COMMENT ') respresents an incomplete event and a 1 represents a completed event',
  PRIMARY KEY (`Event_ID`),
  UNIQUE KEY `Event_title` (`Event_title`),
  KEY `Created_By` (`Created_By`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `message` text NOT NULL,
  `telNo` text,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT 'O for unread and 1 for read',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `telNo`, `status`) VALUES
(1, 'Robert', '', 'Hello there! I just liked your work.  wondering how I can join you', '', 0),
(2, 'Robert', 'robein@ymail.com', 'Hello there. Thank your for the work you are doing.', '07865673544', 0),
(3, 'Kevin', 'kevo@yahoo.com', 'This is so cool. Thank you for the ideas', '078567345', 0),
(5, 'Kevin', '', 'Thank you Ladies and Gentlemen', '', 0),
(6, 'Linda', 'linday@gmai.com', 'I am a young vigilant lady who would love to work with AYU', '078674528', 0),
(7, 'Keta', 'kccfcumo@gmail.com', 'Hello there', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `normal_user`
--

CREATE TABLE IF NOT EXISTS `normal_user` (
  `Username` varchar(60) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `D.O.B` date NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `Gender` enum('F','M','','') NOT NULL,
  `Tel_Contact` int(15) NOT NULL,
  PRIMARY KEY (`Username`),
  UNIQUE KEY `Email` (`Email`,`Password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_users`
--

CREATE TABLE IF NOT EXISTS `other_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `other_users`
--

INSERT INTO `other_users` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'tonny maxee', 'maxee@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227'),
(2, 'stephen', 'byarus45@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(3, 'male', 'male@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(4, 'male2', 'male1@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(5, 'tonny', 'tonnee@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(6, 'martin', 'martin@ymail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(7, 'Kasumba Robert', 'email@me.myself.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(8, 'matts', 'matt@hotmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(9, 'Kevin', 'kev@yahoo.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(10, 'Linda', 'linda@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Table structure for table `pictorials`
--

CREATE TABLE IF NOT EXISTS `pictorials` (
  `Image_Name` varchar(255) NOT NULL,
  `Event_ID` varchar(10) DEFAULT NULL,
  `Posted_By` varchar(60) DEFAULT NULL,
  `Date_Uploaded` date NOT NULL,
  `Caption` text NOT NULL,
  PRIMARY KEY (`Image_Name`),
  KEY `Posted_By` (`Posted_By`),
  KEY `Event_ID` (`Event_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictorials`
--

INSERT INTO `pictorials` (`Image_Name`, `Event_ID`, `Posted_By`, `Date_Uploaded`, `Caption`) VALUES
('images/IMG-20151027-WA0003.jpg', NULL, NULL, '2015-10-28', ''),
('images/IMG-20151027-WA0004.jpg', NULL, NULL, '2015-10-28', ''),
('images/IMG-20151027-WA0005.jpg', NULL, NULL, '2015-10-28', ''),
('images/IMG-20151027-WA0006.jpg', NULL, NULL, '2015-10-28', ''),
('images/IMG-20151027-WA0007.jpg', NULL, NULL, '2015-10-28', ''),
('images/IMG-20151027-WA0008.jpg', NULL, NULL, '2015-10-28', ''),
('images/IMG-20151027-WA0009.jpg', NULL, NULL, '2015-10-28', ''),
('images/IMG-20151027-WA0010.jpg', NULL, NULL, '2015-10-28', ''),
('images/IMG-20151027-WA0011.jpg', NULL, NULL, '2015-10-28', ''),
('images/IMG-20151027-WA0012.jpg', NULL, NULL, '2015-10-28', ''),
('images/IMG-20151027-WA0013.jpg', NULL, NULL, '2015-10-28', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`Created_By`) REFERENCES `adminstrator` (`Admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pictorials`
--
ALTER TABLE `pictorials`
  ADD CONSTRAINT `pictorials_ibfk_1` FOREIGN KEY (`Posted_By`) REFERENCES `adminstrator` (`Admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pictorials_ibfk_2` FOREIGN KEY (`Event_ID`) REFERENCES `events` (`Event_ID`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
