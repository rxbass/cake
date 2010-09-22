-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2010 at 11:36 AM
-- Server version: 5.1.35
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`aid`, `email_id`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answers`
--

CREATE TABLE IF NOT EXISTS `quiz_answers` (
  `ansid` int(11) NOT NULL AUTO_INCREMENT,
  `answer` int(2) NOT NULL,
  `qid` int(2) NOT NULL,
  PRIMARY KEY (`ansid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `quiz_answers`
--

INSERT INTO `quiz_answers` (`ansid`, `answer`, `qid`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 4),
(5, 3, 5),
(6, 2, 6),
(7, 4, 7),
(8, 4, 8),
(9, 4, 9),
(10, 2, 10),
(11, 4, 11),
(12, 2, 12),
(13, 1, 13),
(14, 2, 14),
(15, 2, 15),
(16, 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE IF NOT EXISTS `quiz_questions` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`qid`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 'What does PHP stand for?', 'PHP: Hypertext Preprocessor', 'Personal Home Page', 'Personal Hypertext Processor', 'Private Home Page'),
(2, 'The PHP syntax is most similar to:', 'Perl and C', 'VBScript', 'JavaScript', 'asp'),
(3, 'How do you write "Hello World" in PHP', 'echo "Hello World";', '"Hello World";', 'Document.Write("Hello World");', 'alert("Hello World");'),
(4, 'All variables in PHP start with which symbol?', '!', '$', '&', '%'),
(5, 'What is the correct way to end a PHP statement?', '[]', 'New line', ';', '.'),
(6, 'What is the correct way to add 1 to the $count variable?', '$count =+1', 'count++;', '$count++;', '++count'),
(7, 'What is a correct way to add a comment in PHP?', '<comment>…</comment>', '*\\..\\*', '<!--…-->', '/*…*/'),
(8, 'What does ASP stand for?', 'A Server Page', 'Active Standard Pages', 'All Standard Pages', 'Active Server Pages'),
(9, 'What is the default scripting language in ASP?', 'EcmaScript', 'PERL', 'JavaScript', 'VBScript'),
(10, 'What is the default scripting language in ASP?', 'EcmaScript', 'PERL', 'JavaScript', 'VBScript'),
(11, 'What is the default scripting language in ASP?', 'EcmaScript', 'PERL', 'JavaScript', 'VBScript'),
(12, 'What is the default scripting language in ASP?', 'EcmaScript', 'PERL', 'JavaScript', 'VBScript'),
(13, 'What is the default scripting language in ASP?', 'EcmaScript', 'PERL', 'JavaScript', 'VBScript'),
(14, 'What is the default scripting language in ASP?', 'EcmaScript', 'PERL', 'JavaScript', 'VBScript'),
(15, 'What is the default scripting language in ASP?', 'EcmaScript', 'PERL', 'JavaScript', 'VBScript');

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE IF NOT EXISTS `user_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=118 ;

--
-- Dumping data for table `user_answers`
--

INSERT INTO `user_answers` (`id`, `user_id`, `marks`) VALUES
(22, 5, 10),
(23, 5, 0),
(24, 5, 0),
(25, 5, 10),
(26, 5, 0),
(27, 6, 10),
(28, 6, 10),
(29, 6, 10),
(30, 6, 10),
(31, 6, 10),
(32, 7, 10),
(33, 7, 0),
(34, 7, 10),
(35, 7, 0),
(36, 7, 10),
(37, 8, 10),
(38, 8, 0),
(39, 8, 10),
(40, 8, 10),
(41, 8, 10),
(42, 9, 10),
(43, 9, 0),
(44, 9, 0),
(45, 9, 0),
(46, 9, 0),
(47, 10, 0),
(48, 10, 0),
(49, 10, 0),
(50, 10, 0),
(51, 10, 0),
(52, 10, 0),
(53, 12, 0),
(54, 12, 10),
(55, 12, 10),
(56, 12, 10),
(57, 12, 10),
(58, 13, 10),
(59, 13, 10),
(60, 13, 10),
(61, 13, 10),
(62, 13, 10),
(63, 13, 0),
(64, 13, 0),
(65, 14, 10),
(66, 14, 10),
(67, 14, 10),
(68, 14, 10),
(69, 14, 10),
(70, 14, 0),
(71, 14, 0),
(72, 15, 10),
(73, 15, 10),
(74, 15, 10),
(75, 15, 0),
(76, 15, 10),
(77, 15, 0),
(78, 15, 0),
(79, 13, 10),
(80, 13, 10),
(81, 13, 10),
(82, 13, 10),
(83, 13, 10),
(84, 13, 0),
(85, 13, 10),
(86, 13, 0),
(87, 13, 10),
(88, 13, 10),
(89, 13, 10),
(90, 13, 10),
(91, 13, 10),
(92, 13, 0),
(93, 13, 10),
(94, 13, 0),
(95, 17, 0),
(96, 17, 0),
(97, 17, 0),
(98, 17, 10),
(99, 17, 0),
(100, 17, 10),
(101, 17, 0),
(102, 17, 0),
(103, 18, 10),
(104, 18, 10),
(105, 18, 10),
(106, 18, 10),
(107, 18, 10),
(108, 18, 10),
(109, 18, 10),
(110, 18, 0),
(111, 18, 0),
(112, 18, 0),
(113, 18, 0),
(114, 18, 0),
(115, 18, 10),
(116, 18, 0),
(117, 18, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE IF NOT EXISTS `user_status` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`sid`, `uid`, `percentage`, `status`) VALUES
(14, 15, 57, 'fail'),
(15, 18, 53, 'fail');

-- --------------------------------------------------------

--
-- Table structure for table `user_tables`
--

CREATE TABLE IF NOT EXISTS `user_tables` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `age` int(11) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `user_tables`
--

INSERT INTO `user_tables` (`uid`, `name`, `email_id`, `password`, `age`, `qualification`) VALUES
(8, 'bastion', 'bastion@gmail.com', '25f9e794323b453885f5181f1b624d0b', 21, 'bca'),
(9, 'fjh', 'grdgf@ggf.com', '8b4cf0258846b23e0a8272bee22c38dd', 456, 'ytd'),
(10, 'hgfhgf', 'qdgfs@df.com', '25f9e794323b453885f5181f1b624d0b', 45, 'gfgf'),
(11, 'basu', 'ggg@yahoo.com', '25f9e794323b453885f5181f1b624d0b', 23, 'bsss'),
(12, 'hhh', 'hhh@yahoo.com', '25f9e794323b453885f5181f1b624d0b', 45, 'sdaf'),
(13, 'thil', 'thilak@jh.com', '25f9e794323b453885f5181f1b624d0b', 78, 'jkkjk'),
(14, 'nnn', 'nnn@yahoo.com', '25f9e794323b453885f5181f1b624d0b', 23, 'jfj'),
(15, 'dsfg', 'sdfg@asdf.jfg', '25f9e794323b453885f5181f1b624d0b', 24, 'dfdf'),
(16, 'trhrt', 'thilak@jh.com', '537816413185d5e09a471933aa10335c', 78, 'be'),
(17, 'nnnd', 'hack@yahoo.com', '25f9e794323b453885f5181f1b624d0b', 34, 'dfb'),
(18, 'shiva', 'ssss@tyad.hh', '25f9e794323b453885f5181f1b624d0b', 23, 'dsd');
