-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2015 at 08:37 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
-- Table structure for table `pictorials`
--

CREATE TABLE IF NOT EXISTS `pictorials` (
  `Image_Name` varchar(255) NOT NULL,
  `Event_ID` varchar(10) DEFAULT NULL,
  `Posted_By` varchar(60) DEFAULT NULL,
  `Date_Uploaded` date NOT NULL,
  `Caption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictorials`
--

INSERT INTO `pictorials` (`Image_Name`, `Event_ID`, `Posted_By`, `Date_Uploaded`, `Caption`) VALUES
('images/20150627_091051.jpg', NULL, NULL, '2015-10-19', 'ffspecification for the project. The proposed document should be reviewed by several parties, who ma'),
('images/20150627_091353.jpg', NULL, NULL, '2015-10-19', 'specification for the project. The proposed document should be reviewed by several parties, who may '),
('images/20150627_091402.jpg', NULL, NULL, '2015-10-19', 'specification for the project. The proposed document should be reviewed by several parties, who may '),
('images/20150627_094759.jpg', NULL, NULL, '2015-10-19', 'specification for the project. The proposed document should be reviewed by several parties, who may ')


--
-- Indexes for dumped tables
--

--
-- Indexes for table `pictorials`
--
ALTER TABLE `pictorials`
 ADD PRIMARY KEY (`Image_Name`), ADD KEY `Posted_By` (`Posted_By`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pictorials`
--
ALTER TABLE `pictorials`
ADD CONSTRAINT `pictorials_ibfk_1` FOREIGN KEY (`Posted_By`) REFERENCES `adminstrator` (`Admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
