-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2019 at 11:12 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinevote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pass`) VALUES
('Admin', 'vote');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `dob` varchar(300) NOT NULL,
  `faddress` text NOT NULL,
  `party_name` text NOT NULL,
  `email` varchar(54) NOT NULL,
  `symbol` varchar(54) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `number` text NOT NULL,
  `aadhar` text NOT NULL,
  `seffdes` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `dob`, `faddress`, `party_name`, `email`, `symbol`, `photo`, `number`, `aadhar`, `seffdes`) VALUES
(2, 'hghggh', '0003-03-31', 'bankat khutahi\r\nkushinagar', 'drffd', 'amaracc97@gmail.com', 'vlcsnap-2017-01-11-21h43m28s425.png', 'bhuwan.jpg', '9839667710', '5454554554555', 'ghjjhjjhu'),
(3, 'fddggffgg', '22323-03-31', 'bankat khutahi\r\nkushinagar', 'drffd', 'raj1847057@gmail.com', 'amar.jpg', 'abc.jpg', '9616919910', '545455455455', 'gfgfghghg');

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

CREATE TABLE IF NOT EXISTS `election` (
  `election_id` varchar(50) NOT NULL,
  `election_type` text NOT NULL,
  `election_name` text NOT NULL,
  `election_date` varchar(500) NOT NULL,
  `start_time` varchar(50) NOT NULL,
  `end_time` varchar(67) NOT NULL,
  PRIMARY KEY (`election_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election`
--

INSERT INTO `election` (`election_id`, `election_type`, `election_name`, `election_date`, `start_time`, `end_time`) VALUES
('dg4545', 'ghghghgh', 'Amar', '2019-05-22', '02:33', '03:44');

-- --------------------------------------------------------

--
-- Table structure for table `sstatus`
--

CREATE TABLE IF NOT EXISTS `sstatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sts` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sstatus`
--

INSERT INTO `sstatus` (`id`, `sts`) VALUES
(1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `enrollment_no` varchar(50) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `dob` varchar(50) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` text NOT NULL,
  `aadhar` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `photo` varchar(500) NOT NULL,
  `date` varchar(44) NOT NULL,
  `time` varchar(45) NOT NULL,
  PRIMARY KEY (`enrollment_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`enrollment_no`, `firstname`, `lastname`, `gender`, `dob`, `fname`, `mname`, `email`, `mobile`, `aadhar`, `address`, `city`, `state`, `photo`, `date`, `time`) VALUES
('hjjhjh', 'AMARCHAND', 'KUSHWAHA', 'Male', '2334-03-31', 'ghhgggh', 'kjjkkj', 'amaracc97@gmail.com', '9839667710', '5454554554555', 'hhhhhhhhh', 'laxmiganj', 'Uttar Pradesh', 'IMG_20161231_085522.jpg', '2019-05-26', '07:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `votelist`
--

CREATE TABLE IF NOT EXISTS `votelist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aadhar` text NOT NULL,
  `enroll_id` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `votelist`
--

INSERT INTO `votelist` (`id`, `aadhar`, `enroll_id`) VALUES
(1, '5454554554555', 'hjjhjh');

-- --------------------------------------------------------

--
-- Table structure for table `votestate`
--

CREATE TABLE IF NOT EXISTS `votestate` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sts` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `votestate`
--

INSERT INTO `votestate` (`id`, `sts`) VALUES
(1, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
