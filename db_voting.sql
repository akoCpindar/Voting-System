-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2016 at 02:13 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `adm_id` int(4) unsigned NOT NULL,
  `adm_email` varchar(100) NOT NULL DEFAULT '',
  `adm_password` varchar(100) NOT NULL DEFAULT '',
  `adm_lname` varchar(180) NOT NULL DEFAULT '',
  `adm_fname` varchar(180) NOT NULL DEFAULT '',
  `adm_mname` varchar(180) NOT NULL DEFAULT '',
  `adm_gender` varchar(180) NOT NULL DEFAULT '',
  `adm_dob` varchar(180) NOT NULL DEFAULT '',
  `adm_date_added` date NOT NULL DEFAULT '0000-00-00',
  `adm_time_added` time NOT NULL DEFAULT '00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=1011 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adm_id`, `adm_email`, `adm_password`, `adm_lname`, `adm_fname`, `adm_mname`, `adm_gender`, `adm_dob`, `adm_date_added`, `adm_time_added`) VALUES
(1010, 'cueng13@gmail.com', '202cb962ac59075b964b07152d234b70', 'wef', 'asd', 'wer', 'Male', '2016-03-12', '2016-03-13', '18:12:50'),
(1009, 'cuini@gmail.com', '202cb962ac59075b964b07152d234b70', 'Amar', 'Queeny', 'Abibuag', 'Female', '2016-03-19', '2016-03-13', '18:11:19'),
(1008, 'pindarjimenez@gmail.com', 'c192a60b2bee993adb96bef1d60a9c08', 'jimenez', 'pindar', 'caluyo', 'Male', '1995-05-16', '2016-03-13', '17:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate`
--

CREATE TABLE IF NOT EXISTS `tbl_candidate` (
  `can_id` int(4) unsigned NOT NULL,
  `can_idnumber` int(7) NOT NULL DEFAULT '0',
  `can_lname` varchar(100) NOT NULL DEFAULT '',
  `can_fname` varchar(100) NOT NULL DEFAULT '',
  `can_mname` varchar(100) NOT NULL DEFAULT '',
  `can_gender` varchar(100) NOT NULL DEFAULT '',
  `can_votes` int(10) NOT NULL DEFAULT '0',
  `can_dob` date NOT NULL,
  `can_address` varchar(255) NOT NULL DEFAULT '',
  `can_mobile` varchar(50) NOT NULL DEFAULT '',
  `can_email` varchar(100) NOT NULL DEFAULT '',
  `can_date_added` date NOT NULL DEFAULT '0000-00-00',
  `can_time_added` time NOT NULL DEFAULT '00:00:00',
  `pos_id` int(4) NOT NULL DEFAULT '0',
  `par_id` int(4) NOT NULL DEFAULT '0',
  `cor_id` int(5) NOT NULL DEFAULT '0',
  `yer_id` int(5) NOT NULL DEFAULT '0',
  `col_id` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=4010 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_candidate`
--

INSERT INTO `tbl_candidate` (`can_id`, `can_idnumber`, `can_lname`, `can_fname`, `can_mname`, `can_gender`, `can_votes`, `can_dob`, `can_address`, `can_mobile`, `can_email`, `can_date_added`, `can_time_added`, `pos_id`, `par_id`, `cor_id`, `yer_id`, `col_id`) VALUES
(4004, 1321086, 'asdf', 'wqer', 'wsdf', 'Male', 4, '1993-02-03', 'gd', '1234', 'a@gmail.com', '2016-03-15', '20:34:10', 8003, 5001, 10001, 20002, 9001),
(4006, 345134, 'asxf', 'asdf', 'ert', 'Male', 12, '2016-03-26', 'sdg', '234123', 'ad@gmail.com', '2016-03-15', '20:37:41', 8001, 5001, 10001, 20002, 9001),
(4003, 41234, 'sdg', 'etqert', 'dgsg', 'Female', 0, '2016-03-11', 'asdg', '1235', 'anya@gmail.com', '2016-03-09', '20:37:55', 8002, 5001, 10001, 20002, 9001),
(4005, 1324826, 'gwerg', 'asdf', 'sdfg', 'Female', 2, '2016-03-24', 'asdgs', '34', 'j@gmail.com', '2016-03-15', '20:36:24', 8003, 5001, 10001, 20001, 9001),
(4007, 124234, 'asdf', 'asdf', 'asdf', 'Female', 4, '2016-03-16', 'ar', '12345', 'anya@gmail.com', '2016-03-15', '21:32:46', 8002, 5001, 10001, 20001, 9001),
(4008, 1421344, 'qwe', 'Darken', 'qwe', 'qwe', 2, '1955-12-05', '', '123', 'qw@gmail.com', '2016-03-16', '17:55:03', 8003, 5001, 10001, 20002, 9001),
(4009, 132123, '123', '123', '123', '123', 1, '0231-12-31', '123', '123', '1231231@gmail.com', '2016-03-16', '17:57:14', 8002, 5001, 10001, 20001, 9001);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_college`
--

CREATE TABLE IF NOT EXISTS `tbl_college` (
  `col_id` int(4) unsigned NOT NULL,
  `col_fname` varchar(180) NOT NULL DEFAULT '',
  `col_description` varchar(180) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=9002 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_college`
--

INSERT INTO `tbl_college` (`col_id`, `col_fname`, `col_description`) VALUES
(9001, 'CET', 'College of Engineering and Technology');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE IF NOT EXISTS `tbl_course` (
  `cor_id` int(5) unsigned NOT NULL,
  `cor_name` varchar(180) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=10002 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`cor_id`, `cor_name`) VALUES
(10001, 'BSIT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cresult`
--

CREATE TABLE IF NOT EXISTS `tbl_cresult` (
  `crs_id` int(4) unsigned NOT NULL,
  `can_id` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=2001 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parties`
--

CREATE TABLE IF NOT EXISTS `tbl_parties` (
  `par_id` int(4) unsigned NOT NULL,
  `par_name` varchar(50) NOT NULL DEFAULT '',
  `par_description` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=5002 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_parties`
--

INSERT INTO `tbl_parties` (`par_id`, `par_name`, `par_description`) VALUES
(5001, 'PCS', 'Pindar Corps Society');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE IF NOT EXISTS `tbl_position` (
  `pos_id` int(4) unsigned NOT NULL,
  `pos_name` varchar(180) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=8004 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`pos_id`, `pos_name`) VALUES
(8001, 'President'),
(8002, 'V-President'),
(8003, 'Senator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE IF NOT EXISTS `tbl_settings` (
  `set_id` int(5) unsigned NOT NULL,
  `set_name` varchar(180) NOT NULL DEFAULT '',
  `set_version` varchar(180) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=30001 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE IF NOT EXISTS `tbl_student` (
  `stu_id` int(4) unsigned NOT NULL,
  `stu_idnumber` int(7) NOT NULL DEFAULT '0',
  `stu_lname` varchar(100) NOT NULL DEFAULT '',
  `stu_fname` varchar(100) NOT NULL DEFAULT '',
  `stu_mname` varchar(100) NOT NULL DEFAULT '',
  `stu_gender` varchar(100) NOT NULL DEFAULT '',
  `stu_status` varchar(100) NOT NULL DEFAULT '',
  `stu_dob` date NOT NULL,
  `stu_address` varchar(255) NOT NULL DEFAULT '',
  `stu_mobile` varchar(50) NOT NULL DEFAULT '',
  `stu_email` varchar(100) NOT NULL DEFAULT '',
  `stu_date_added` date NOT NULL DEFAULT '0000-00-00',
  `stu_time_added` time NOT NULL DEFAULT '00:00:00',
  `cor_id` int(5) NOT NULL DEFAULT '0',
  `yer_id` int(5) NOT NULL DEFAULT '0',
  `stu_password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7006 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`stu_id`, `stu_idnumber`, `stu_lname`, `stu_fname`, `stu_mname`, `stu_gender`, `stu_status`, `stu_dob`, `stu_address`, `stu_mobile`, `stu_email`, `stu_date_added`, `stu_time_added`, `cor_id`, `yer_id`, `stu_password`) VALUES
(7001, 1321083, 'asdf', 'asdf', 'sf', 'Male', 'notvoted', '2016-03-11', 'asdg', '14234', 'pindarlaway@gmail.com', '2016-03-12', '16:40:57', 10001, 20002, ''),
(7002, 1321082, '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '00:00:00', 0, 0, ''),
(7003, 1321081, 'adsf', 'saff', 'asdf', 'Female', 'notvoted', '2016-03-11', 'asf', '34123', 'a@gmail.com', '2016-03-15', '22:07:51', 10001, 20002, ''),
(7004, 1321084, '123', '123', '123', 'Male', 'Voted', '1994-02-11', '123', '123', 'pindarjimenez@gmail.com', '2016-03-16', '16:36:23', 10001, 20001, '202cb962ac59075b964b07152d234b70'),
(7005, 123, '123', '123', '123', 'Female', 'Voted', '3122-12-12', '123', '123', '1231231@gmail.com', '2016-03-16', '18:08:12', 10001, 20002, '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vlist`
--

CREATE TABLE IF NOT EXISTS `tbl_vlist` (
  `vlt_id` int(4) unsigned NOT NULL,
  `can_idnumber` int(7) DEFAULT '0',
  `vlt_date_voted` date NOT NULL DEFAULT '0000-00-00',
  `vlt_time_voted` time NOT NULL DEFAULT '00:00:00',
  `stu_idnumber` int(7) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=6019 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vlist`
--

INSERT INTO `tbl_vlist` (`vlt_id`, `can_idnumber`, `vlt_date_voted`, `vlt_time_voted`, `stu_idnumber`) VALUES
(6001, 345134, '2016-03-15', '22:47:10', 1010),
(6002, 124234, '2016-03-15', '22:47:10', 1010),
(6003, 1321086, '2016-03-15', '22:47:10', 1010),
(6004, 345134, '2016-03-15', '23:18:49', 1010),
(6005, 124234, '2016-03-15', '23:18:49', 1010),
(6006, 1321086, '2016-03-15', '23:18:49', 1010),
(6007, 345134, '2016-03-15', '23:19:05', 1010),
(6008, 124234, '2016-03-15', '23:19:05', 1010),
(6009, 1321086, '2016-03-15', '23:19:05', 1010),
(6010, 345134, '2016-03-16', '18:05:28', 1321084),
(6011, 132123, '2016-03-16', '18:05:28', 1321084),
(6012, 1321086, '2016-03-16', '18:05:28', 1321084),
(6013, 1324826, '2016-03-16', '18:05:28', 1321084),
(6014, 1421344, '2016-03-16', '18:05:28', 1321084),
(6015, 345134, '2016-03-16', '18:09:05', 123),
(6016, 124234, '2016-03-16', '18:09:05', 123),
(6017, 1324826, '2016-03-16', '18:09:05', 123),
(6018, 1421344, '2016-03-16', '18:09:05', 123);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_winner`
--

CREATE TABLE IF NOT EXISTS `tbl_winner` (
  `win_id` int(4) unsigned NOT NULL,
  `can_id` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=3001 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE IF NOT EXISTS `tbl_year` (
  `yer_id` int(5) unsigned NOT NULL,
  `yer_number` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=20003 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_year`
--

INSERT INTO `tbl_year` (`yer_id`, `yer_number`) VALUES
(20001, 1),
(20002, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `tbl_candidate`
--
ALTER TABLE `tbl_candidate`
  ADD PRIMARY KEY (`can_id`), ADD KEY `pos_id` (`pos_id`), ADD KEY `par_id` (`par_id`), ADD KEY `cor_id` (`cor_id`), ADD KEY `yer_id` (`yer_id`), ADD KEY `col_id` (`col_id`);

--
-- Indexes for table `tbl_college`
--
ALTER TABLE `tbl_college`
  ADD PRIMARY KEY (`col_id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`cor_id`);

--
-- Indexes for table `tbl_cresult`
--
ALTER TABLE `tbl_cresult`
  ADD PRIMARY KEY (`crs_id`), ADD KEY `can_id` (`can_id`);

--
-- Indexes for table `tbl_parties`
--
ALTER TABLE `tbl_parties`
  ADD PRIMARY KEY (`par_id`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`pos_id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`set_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`stu_id`), ADD KEY `cor_id` (`cor_id`), ADD KEY `yer_id` (`yer_id`);

--
-- Indexes for table `tbl_vlist`
--
ALTER TABLE `tbl_vlist`
  ADD PRIMARY KEY (`vlt_id`), ADD KEY `can_id` (`can_idnumber`);

--
-- Indexes for table `tbl_winner`
--
ALTER TABLE `tbl_winner`
  ADD PRIMARY KEY (`win_id`), ADD KEY `can_id` (`can_id`);

--
-- Indexes for table `tbl_year`
--
ALTER TABLE `tbl_year`
  ADD PRIMARY KEY (`yer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adm_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1011;
--
-- AUTO_INCREMENT for table `tbl_candidate`
--
ALTER TABLE `tbl_candidate`
  MODIFY `can_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4010;
--
-- AUTO_INCREMENT for table `tbl_college`
--
ALTER TABLE `tbl_college`
  MODIFY `col_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9002;
--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `cor_id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10002;
--
-- AUTO_INCREMENT for table `tbl_cresult`
--
ALTER TABLE `tbl_cresult`
  MODIFY `crs_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2001;
--
-- AUTO_INCREMENT for table `tbl_parties`
--
ALTER TABLE `tbl_parties`
  MODIFY `par_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5002;
--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `pos_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8004;
--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `set_id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30001;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `stu_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7006;
--
-- AUTO_INCREMENT for table `tbl_vlist`
--
ALTER TABLE `tbl_vlist`
  MODIFY `vlt_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6019;
--
-- AUTO_INCREMENT for table `tbl_winner`
--
ALTER TABLE `tbl_winner`
  MODIFY `win_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3001;
--
-- AUTO_INCREMENT for table `tbl_year`
--
ALTER TABLE `tbl_year`
  MODIFY `yer_id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20003;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
