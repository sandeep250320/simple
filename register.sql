-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2021 at 01:00 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `SANDEEPKUMAR`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `SNO.` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `keyskills` varchar(255) NOT NULL,
  `location` varchar(30) NOT NULL,
  `jobdescription` varchar(255) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `salary` bigint(50) NOT NULL,
  PRIMARY KEY (`SNO.`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`SNO.`, `title`, `keyskills`, `location`, `jobdescription`, `experience`, `salary`) VALUES
(1, 'Web developer', 'HTML,CSS,BOOTSTRAP,PHP,JAVASCRIPT', 'work from home', 'internship', 'not required', 15000),
(2, 'software developer', 'DSA,DBMS,Programming', 'work from home', 'fulltime', '1 years', 36000);
