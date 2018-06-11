-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2015 at 05:56 PM
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
  `article_content` varchar(1500) DEFAULT NULL,
  `post_date` date DEFAULT NULL,
  `post_time` time DEFAULT NULL,
  `posted_by` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `image_path`, `article_content`, `post_date`, `post_time`, `posted_by`, `status`) VALUES
(2, 'Logos design as main source of income, make between $2000 to $7000 just for average of 1 hour on your PC for 2 days.', 'images/mobile.png', 'Many youths keep wondering on how to make their first dive into the business of making money with a few skills in computing. so here i bring you one of the ways you can achieve this.\r\nThere are a variety of companies ranging from small to large that use unprofessional logos and yet they are willing to pay any one that can make them a professional logo. These companies fail at this simply because most of the graphic designers never take effort to market them selves.\r\n\r\n  ', '2015-10-10', '09:46:00', 1, 'open'),
(5, 'hey', '', 'wahhhh', '2015-10-10', '09:50:00', 1, 'open'),
(6, 'Hey there this is a testing article', 'images/shop btn.png', 'Pseudo code for inserting issue into database (issue_action)\r\nProcess Start session\r\nProcess Connect to database\r\nProcess Select database\r\nRead person_id from database where person_name=session_name;\r\nPick person_ID from people database\r\nPick projectID from project database\r\nInsert new information into system\r\nIf (successful) echo added\r\nElse echo not added mysql error\r\nEndif\r\nPseudocode for userinfo.php\r\nProcess require once header_username_role.php\r\nConnect to database\r\nSelect \r\n\r\n\r\n', '2015-10-12', '06:47:00', 1, 'open'),
(7, 'jhyusavuyod', '', 'sftyusuibiupg86o\r\nsafyus', '2015-10-13', '08:01:00', 1, 'open'),
(8, 'this is a kid', 'images/download.jpg', '', '2015-10-18', '08:55:00', 0, 'open'),
(9, 'this is a kid', 'images/download.jpg', '', '2015-10-18', '08:56:00', 0, 'open');

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

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `article_id`, `comment_details`, `posted_by`, `posted_date`, `posted_time`) VALUES
(1, 2, 'thats not what i call madness', 'tonnee@gmail.com', '2015-10-11', '14:15:00'),
(5, 6, 'tsup guys', 'tonnee@gmail.com', '2015-10-12', '08:35:00'),
(6, 2, '"Many youths keep wondering on how to make the"\nprove that this is not just a way of attracting a crowd to your site', 'tonnee@gmail.com', '2015-10-13', '07:05:00'),
(7, 2, 'These companies fail at this simply because most of the graphic designers never take effort to market them selves. ', 'tonnee@gmail.com', '2015-10-13', '07:11:00'),
(8, 2, 'sdfghjs', 'tonnee@gmail.com', '2015-10-13', '07:12:00'),
(9, 2, 'wsjkhgfdfhjhkj', 'tonnee@gmail.com', '2015-10-13', '07:12:00'),
(10, 2, 'thats craps', 'email@me.myself.com', '2015-10-13', '07:42:00'),
(11, 7, 'hello', 'tonnee@gmail.com', '2015-10-13', '08:02:00'),
(12, 2, 'guys thaks for the work done', 'matt@hotmail.com', '2015-10-14', '01:06:00'),
(13, 2, 'thanks bro for your appreciation', 'tonnee@gmail.com', '2015-10-14', '01:08:00'),
(14, 2, 'welcome but i have a project that i would like to give you guys.  would it be possible? for you to work on it for me because its needed in less than two months and am willing to pay any amount that you will need. But on condition that you complete it with in the next two months', 'matt@hotmail.com', '2015-10-14', '01:17:00');

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
  `event_status` int(1) NOT NULL DEFAULT '0' COMMENT ') respresents an incomplete event and a 1 represents a completed event',
  PRIMARY KEY (`Event_ID`),
  UNIQUE KEY `Event_title` (`Event_title`),
  KEY `Created_By` (`Created_By`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Event_ID`, `Event_title`, `Created_By`, `Event_Description`, `Due_Date`, `due_time`, `event_status`) VALUES
('event_2', 'masaka youth development campi', NULL, 'in this campaign our aim is to motivate masaka youths such that they can engage in job creation practices other than only focusing on job seeking ', '2015-11-12', '14:30:09', 0),
('event_4', 'this is a trial event', NULL, 'any youths keep wondering on how to make their first dive into the business of making money with a few skills in computing. so here i bring you one of the ways you can achieve this.\r\nThere are a variety of companies ranging from small to large that use unprofessional logos and yet they are willing to pay any one that can make them a professional logo. These companies fail at this simply because most of the graphic designers never take effort to market them selves.', '2015-11-14', '04:00:00', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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
(8, 'matts', 'matt@hotmail.com', '8cb2237d0679ca88db6464eac60da96345513964');

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
  KEY `Posted_By` (`Posted_By`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictorials`
--

INSERT INTO `pictorials` (`Image_Name`, `Event_ID`, `Posted_By`, `Date_Uploaded`, `Caption`) VALUES
('images/20150627_091051.jpg', NULL, NULL, '2015-10-19', 'ffspecification for the project. The proposed document should be reviewed by several parties, who ma'),
('images/20150627_091353.jpg', NULL, NULL, '2015-10-19', 'specification for the project. The proposed document should be reviewed by several parties, who may '),
('images/20150627_091402.jpg', NULL, NULL, '2015-10-19', 'specification for the project. The proposed document should be reviewed by several parties, who may '),
('images/20150627_094759.jpg', NULL, NULL, '2015-10-19', 'specification for the project. The proposed document should be reviewed by several parties, who may '),
('images/At Matale.jpg', NULL, NULL, '2015-10-18', 'With the youths.....new generation'),
('images/download.jpg', NULL, NULL, '2015-10-18', 'this is a kid\r\n'),
('images/images (1).jpg', 'event_4', NULL, '2015-10-17', 'AYU Uganda is the new light to successful and prosperous life of youths in Uganda. Join the team soon'),
('images/images (3).jpg', 'event_2', NULL, '2015-10-19', 'one of the masaka campaign that went on successfully last year 2014');

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
  ADD CONSTRAINT `pictorials_ibfk_1` FOREIGN KEY (`Posted_By`) REFERENCES `adminstrator` (`Admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
