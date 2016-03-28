-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2016 at 08:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `complainregister`
--

CREATE TABLE IF NOT EXISTS `complainregister` (
  `Date` date NOT NULL,
  `userId` varchar(20) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `hostelNumber` int(10) NOT NULL,
  `roomNumber` int(10) NOT NULL,
  `roomType` varchar(8) NOT NULL,
  `problemDescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complainregister`
--

INSERT INTO `complainregister` (`Date`, `userId`, `userName`, `hostelNumber`, `roomNumber`, `roomType`, `problemDescription`) VALUES
('0000-00-00', 'ug201310011', 'Bharti Gothwal', 1, 124, '', 'Need of window repairing'),
('0000-00-00', 'ug201310011', 'Bharti Gothwal', 1, 124, '', 'Need of window repairing'),
('0000-00-00', 'ug201310011', 'Bharti Gothwal', 1, 124, '', 'Need of window repairing'),
('0000-00-00', 'ug201310011', 'Bharti Gothwal', 1, 124, '', 'Need of window repairing'),
('0000-00-00', 'ug201310011', 'Bharti Gothwal', 1, 124, '', 'Need of window repairing'),
('0000-00-00', 'ug201310011', 'Bharti Gothwal', 1, 124, '', 'Need of window repairing'),
('0000-00-00', 'ug201310011', 'Bharti Gothwal', 1, 124, '', 'Need of window repairing'),
('0000-00-00', 'ug201310011', 'Bharti Gothwal', 1, 124, '', 'Need of window repairing'),
('0000-00-00', 'ug201310011', 'Bharti Gothwal', 1, 124, '', 'Need of window repairing'),
('0000-00-00', 'ug201310011', 'Bharti Gothwal', 1, 124, 'inside', 'Need of window repairing');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
