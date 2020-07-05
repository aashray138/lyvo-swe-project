-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2020 at 09:32 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `cid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `degree` varchar(50) DEFAULT NULL,
  `course` varchar(50) NOT NULL,
  `grad_date` varchar(4) DEFAULT NULL,
  `attend` enum('present','not') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`cid`, `name`, `city`, `state`, `degree`, `course`, `grad_date`, `attend`) VALUES
(2, 'western', 'mic', 'ja', NULL, 'ba', NULL, NULL),
(3, 'western', 'mi', 'mi', NULL, 'bh', NULL, NULL),
(3, '', '', '', NULL, '', NULL, NULL),
(4, 'WMU', 'Kalamazoo', 'MI', NULL, 'BS', NULL, NULL),
(5, 'Western Michigan University', 'Kalamazoo', 'MI', NULL, 'BS', NULL, NULL),
(6, 'wetsern', 'jsjksa', 'jksjs', 'Undergraduate', 'computer ', '', NULL),
(6, 'wetsern', 'jsjksa', 'jksjs', 'Undergraduate', 'computer ', '2021', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `cid` int(11) NOT NULL,
  `employer` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(10) NOT NULL,
  `start_date` varchar(10) DEFAULT NULL,
  `end_date` varchar(10) DEFAULT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`cid`, `employer`, `title`, `city`, `state`, `start_date`, `end_date`, `description`) VALUES
(3, 'paku', 'software', 'kalama', 'mi', NULL, NULL, ''),
(4, 'wmu', 'sjd', 'nsj', 'ni', NULL, NULL, ''),
(4, '', '', '', '', NULL, NULL, ''),
(4, '', '', '', '', NULL, NULL, ''),
(4, 'wmu', '', '', '', NULL, NULL, ''),
(5, 'Google', 'Software Engineer', 'Newyork', 'NY', NULL, NULL, 'developing new software'),
(5, '', '', '', '', NULL, NULL, ''),
(6, 'wmu', 'tech', 'kala', 'MI', '2018', '2022', 'hgsghsghahJGS');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `cid` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `zcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`cid`, `fname`, `lname`, `address`, `city`, `state`, `email`, `phone`, `profile`, `zcode`) VALUES
(1, 'jksdjks', 'jsdkjs', 'sakjdsjhjska', 'lsjks', 'mi', 'p@gmail.com', '76473', 'iduuedhskjdssajdsakj', 67),
(2, 'haha', 'haha', 'kjaa', 'hh', 'mi', 'h@gmail.com', '646', 'kjhjhj', 678),
(3, 'hs', 'js', 'jksaksj', 'ms', 'mi', 'kjsskas@gmail.com', '7546', 'jhshjs', 408),
(4, 'jyoti', 'shretsha', '839 w walnut', 'Kalamazoo', 'MI', 'shresthajyoti@gmail.com', '3526738813', 'hi Im doing great.', 10),
(5, 'Jyoti', 'Shrestha', '839 W Walnut st', 'Kalamazoo', 'MI', 'shresthajyoti79@gmail.com', '6822265758', 'Looking for job.', 40007),
(6, 'Pratiksha', 'Adhikari', '839W Walnut St', 'Kalamazoo', 'Mi', 'prati@gmail.com', '6464095933', 'hjshsbhajghshjshjhhsajhshssjh', 49007);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `cid` int(11) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`cid`, `skill`, `level`) VALUES
(3, 'git', ''),
(3, 'team', ''),
(3, 'git', ''),
(3, 'git', ''),
(3, 'team', ''),
(3, 'git', ''),
(3, 'git', ''),
(3, 'team', ''),
(3, 'git', ''),
(3, 'git', ''),
(3, 'team', ''),
(3, 'git', ''),
(3, 'his', ''),
(3, 'sh', ''),
(3, 'his', ''),
(3, 'his', ''),
(3, 'sh', ''),
(3, 'his', ''),
(3, 'his', ''),
(3, 'sh', ''),
(3, 'his', ''),
(3, 'his', ''),
(3, 'sh', ''),
(3, 'his', ''),
(3, '', ''),
(3, '', ''),
(3, '', ''),
(3, 'SXa', 'Expert'),
(3, 'Assad', 'Skilled'),
(3, 'SXa', 'Expert'),
(3, 'SXa', 'Expert'),
(3, 'Assad', 'Skilled'),
(3, 'SXa', 'Expert'),
(3, 'hreagka', 'Beginner'),
(3, 'hjsahjattetettete', 'Skilled'),
(3, 'hreagka', 'Beginner'),
(3, 'his', 'Beginner'),
(3, 'jjas', 'Skilled'),
(3, 'his', 'Beginner'),
(4, 'team', 'Beginner'),
(4, 'team', 'Skilled'),
(4, 'team', 'Beginner'),
(5, 'Java', 'Skilled'),
(5, 'CSS', 'Expert'),
(5, 'Java', 'Skilled'),
(6, 'HTML', 'Novice'),
(6, 'Team', 'Beginner'),
(6, 'HTML', 'Novice');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD KEY `pid` (`cid`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD KEY `cons` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `cid` FOREIGN KEY (`cid`) REFERENCES `personal_info` (`cid`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `pid` FOREIGN KEY (`cid`) REFERENCES `personal_info` (`cid`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `cons` FOREIGN KEY (`cid`) REFERENCES `personal_info` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
