-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2015 at 08:44 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `youths`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
`user_id` int(11) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
`article_id` int(11) NOT NULL,
  `article_title` varchar(200) NOT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  `article_content` varchar(1500) DEFAULT NULL,
  `post_date` date DEFAULT NULL,
  `post_time` time DEFAULT NULL,
  `posted_by` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `image_path`, `article_content`, `post_date`, `post_time`, `posted_by`, `status`) VALUES
(2, 'Logos design as main source of income, make between $2000 to $7000 just for average of 1 hour on your PC for 2 days.', 'images/mobile.png', 'Many youths keep wondering on how to make their first dive into the business of making money with a few skills in computing. so here i bring you one of the ways you can achieve this.\r\nThere are a variety of companies ranging from small to large that use unprofessional logos and yet they are willing to pay any one that can make them a professional logo. These companies fail at this simply because most of the graphic designers never take effort to market them selves.\r\n\r\n  ', '2015-10-10', '09:46:00', 1, 'open'),
(5, 'hey', '', 'wahhhh', '2015-10-10', '09:50:00', 1, 'open'),
(6, 'Hey there this is a testing article', 'images/shop btn.png', 'Pseudo code for inserting issue into database (issue_action)\r\nProcess Start session\r\nProcess Connect to database\r\nProcess Select database\r\nRead person_id from database where person_name=session_name;\r\nPick person_ID from people database\r\nPick projectID from project database\r\nInsert new information into system\r\nIf (successful) echo added\r\nElse echo not added mysql error\r\nEndif\r\nPseudocode for userinfo.php\r\nProcess require once header_username_role.php\r\nConnect to database\r\nSelect \r\n\r\n\r\n', '2015-10-12', '06:47:00', 1, 'open');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`comment_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `comment_details` varchar(500) DEFAULT NULL,
  `posted_by` varchar(60) DEFAULT NULL,
  `posted_date` date DEFAULT NULL,
  `posted_time` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `article_id`, `comment_details`, `posted_by`, `posted_date`, `posted_time`) VALUES
(1, 2, 'thats not what i call madness', 'stephen', '2015-10-11', '14:15:00'),
(5, 6, 'tsup guys', 'tonnee@gmail.com', '2015-10-12', '08:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `other_users`
--

CREATE TABLE IF NOT EXISTS `other_users` (
`user_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

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
(7, 'Kasumba Robert', 'email@me.myself.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`comment_id`), ADD KEY `posted_by` (`posted_by`);

--
-- Indexes for table `other_users`
--
ALTER TABLE `other_users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`), ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `other_users`
--
ALTER TABLE `other_users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
