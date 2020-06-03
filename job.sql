-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 03:32 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `slno` int(10) NOT NULL,
  `hslcboard` varchar(200) NOT NULL,
  `hslcyear` varchar(200) NOT NULL,
  `hslcpercent` int(10) NOT NULL,
  `hsboard` varchar(200) NOT NULL,
  `hsyear` varchar(200) NOT NULL,
  `hspercent` int(10) NOT NULL,
  `degreeuni` varchar(200) NOT NULL,
  `degreeyear` varchar(200) NOT NULL,
  `degreepercent` int(100) NOT NULL,
  `masteruni` varchar(200) NOT NULL,
  `masteryear` varchar(200) NOT NULL,
  `masterpercent` int(100) NOT NULL,
  `uname` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`slno`, `hslcboard`, `hslcyear`, `hslcpercent`, `hsboard`, `hsyear`, `hspercent`, `degreeuni`, `degreeyear`, `degreepercent`, `masteruni`, `masteryear`, `masterpercent`, `uname`) VALUES
(2, 'seba', '2003', 64, 'ahsec', '2006', 59, 'gu', '2009', 74, 'nehu', '2012', 80, 'asd'),
(3, 'seba', '2005', 76, 'cbse', '2007', 80, 'Nehu', '2010', 80, 'Nehu', '2013', 87, 'www');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'admin@1234');

-- --------------------------------------------------------

--
-- Table structure for table `apply_job`
--

CREATE TABLE `apply_job` (
  `applyslno` int(10) NOT NULL,
  `jobid` int(10) NOT NULL,
  `uname` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_job`
--

INSERT INTO `apply_job` (`applyslno`, `jobid`, `uname`) VALUES
(1, 1, 'asd'),
(2, 2, 'asd'),
(3, 1, 'www'),
(4, 2, 'www');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(10) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(2, 'ITSec'),
(1, 'IT'),
(3, 'Data Entry');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `employerid` int(11) NOT NULL,
  `employername` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `pswd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`employerid`, `employername`, `address`, `uname`, `pswd`) VALUES
(2, 'abc', 'sundarpur', 'sss', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobid` int(10) NOT NULL,
  `jobtitle` varchar(200) NOT NULL,
  `jobdesc` varchar(300) NOT NULL,
  `skills` varchar(500) NOT NULL,
  `salaryperanum` int(20) NOT NULL,
  `joblocation` varchar(200) NOT NULL,
  `qualification` varchar(300) NOT NULL,
  `employerid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobid`, `jobtitle`, `jobdesc`, `skills`, `salaryperanum`, `joblocation`, `qualification`, `employerid`, `cid`, `status`) VALUES
(1, 'asdasd', 'asdasd', 'asdasd', 20000, 'asdsad', 'mca', 2, 2, 1),
(2, 'front page design ', 'have to design webpages', 'css ,ajax,html5', 20000, 'gurgaon', 'BSc It', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gen` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `fathers_name` varchar(200) NOT NULL,
  `mothers_name` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `pswd` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`fname`, `lname`, `email`, `gen`, `dob`, `mobile`, `fathers_name`, `mothers_name`, `uname`, `pswd`) VALUES
('asd', 'asd', 'asu@gmail.com', 'on', '1987-01-01', '1321231231', 'ads', 'asd', 'asd', 'asd'),
('www', 'www', 'www@gmail.com', 'on', '1986-01-01', '1231231231', 'asdasd', 'asdasd', 'www', 'www');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `sl` int(11) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`sl`, `resume`, `uname`) VALUES
(2, 'TECHNO ECONOMIC FEASIBILTY.docx', 'asd'),
(3, 'project report.pdf', 'www');

-- --------------------------------------------------------

--
-- Table structure for table `uploaddet`
--

CREATE TABLE `uploaddet` (
  `slno` int(10) NOT NULL,
  `hslc` varchar(200) NOT NULL,
  `hs` varchar(200) NOT NULL,
  `degree` varchar(200) NOT NULL,
  `masters` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploaddet`
--

INSERT INTO `uploaddet` (`slno`, `hslc`, `hs`, `degree`, `masters`, `uname`) VALUES
(2, '20181218_093501_resized_1.jpg', '20181218_093524_resized_1.jpg', '20181218_093532_resized_1.jpg', '20181218_093549_resized_1.jpg', 'asd'),
(3, 'ca certificate.jpeg', 'dicc.pdf', 'dicc0.jpeg', 'dicc1.jpeg', 'www');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `apply_job`
--
ALTER TABLE `apply_job`
  ADD PRIMARY KEY (`applyslno`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`employerid`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `uploaddet`
--
ALTER TABLE `uploaddet`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
  MODIFY `slno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `apply_job`
--
ALTER TABLE `apply_job`
  MODIFY `applyslno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `employerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `uploaddet`
--
ALTER TABLE `uploaddet`
  MODIFY `slno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
