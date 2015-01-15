-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2013 at 05:05 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `7thsem`
--

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE IF NOT EXISTS `coordinator` (
  `cid` varchar(20) NOT NULL,
  `cname` varchar(20) DEFAULT NULL,
  `cbranch` varchar(5) DEFAULT NULL,
  `csubmit` tinyint(1) DEFAULT NULL,
  `cuser_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cid`),
  KEY `ecuser_id` (`cuser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`cid`, `cname`, `cbranch`, `csubmit`, `cuser_id`) VALUES
('ec1', 'Administrator', 'CSE', 0, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `elective_subject`
--

CREATE TABLE IF NOT EXISTS `elective_subject` (
  `ecode` varchar(10) NOT NULL,
  `ename` varchar(45) DEFAULT NULL,
  `credits` varchar(11) DEFAULT NULL,
  `esem` int(11) DEFAULT NULL,
  `no_of_classes` varchar(11) DEFAULT NULL,
  `no_of_students` int(11) DEFAULT NULL,
  `egroup` char(1) DEFAULT NULL,
  `max_per_class` varchar(11) NOT NULL,
  PRIMARY KEY (`ecode`),
  UNIQUE KEY `Ename_UNIQUE` (`ename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `elective_subject`
--

INSERT INTO `elective_subject` (`ecode`, `ename`, `credits`, `esem`, `no_of_classes`, `no_of_students`, `egroup`, `max_per_class`) VALUES
('CSPE717', 'Service Oriented Architechture', '4:0:0', 7, '1', 0, 'a', '85'),
('CSPE718', 'Storage Area Networks', '4:0:0', 7, '1', 0, 'a', '85'),
('CSPE730', 'Parallel Programming using CUDA', '3:0:1', 7, '1', 0, 'b', '30'),
('CSPE731', 'Cloud Computing', '3:0:1', 7, '2', 0, 'b', '70');

-- --------------------------------------------------------

--
-- Table structure for table `group_a`
--

CREATE TABLE IF NOT EXISTS `group_a` (
  `gausn` varchar(20) NOT NULL,
  `1st_pref` varchar(45) DEFAULT NULL,
  `2nd_pref` varchar(45) DEFAULT NULL,
  `FCFS` int(11) NOT NULL,
  PRIMARY KEY (`gausn`),
  KEY `1st_fka` (`1st_pref`),
  KEY `2nd_fka` (`2nd_pref`),
  KEY `GAusn` (`gausn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_b`
--

CREATE TABLE IF NOT EXISTS `group_b` (
  `gbusn` varchar(20) NOT NULL,
  `1st_pref` varchar(45) DEFAULT NULL,
  `2nd_pref` varchar(45) DEFAULT NULL,
  `FCFS` int(11) NOT NULL,
  PRIMARY KEY (`gbusn`),
  KEY `1st_fkb` (`1st_pref`),
  KEY `2nd_fkb` (`2nd_pref`),
  KEY `GBusn` (`gbusn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `type_of_user` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `password`, `type_of_user`) VALUES
('1MS08CS010', 'cs08010', 'student'),
('1MS08CS105', 'cs08105', 'student'),
('1MS09CS046', 'cs0946', 'student'),
('1MS10CS001', 'cs001', 'student'),
('1MS10CS002', 'cs002', 'student'),
('1MS10CS003', 'cs003', 'student'),
('1MS10CS004', 'cs004', 'student'),
('1MS10CS005', 'cs005', 'student'),
('1MS10CS007', 'cs007', 'student'),
('1MS10CS009', 'cs009', 'student'),
('1MS10CS010', 'cs010', 'student'),
('1MS10CS011', 'cs011', 'student'),
('1MS10CS012', 'cs012', 'student'),
('1MS10CS013', 'cs013', 'student'),
('1MS10CS014', 'cs014', 'student'),
('1MS10CS015', 'cs015', 'student'),
('1MS10CS016', 'cs016', 'student'),
('1MS10CS017', 'cs017', 'student'),
('1MS10CS018', 'cs018', 'student'),
('1MS10CS019', 'cs019', 'student'),
('1MS10CS020', 'cs020', 'student'),
('1MS10CS021', 'cs021', 'student'),
('1MS10CS022', 'cs022', 'student'),
('1MS10CS024', 'cs024', 'student'),
('1MS10CS025', 'cs025', 'student'),
('1MS10CS026', 'cs026', 'student'),
('1MS10CS027', 'cs027', 'student'),
('1MS10CS028', 'cs028', 'student'),
('1MS10CS029', 'cs029', 'student'),
('1MS10CS030', 'cs030', 'student'),
('1MS10CS031', 'cs031', 'student'),
('1MS10CS032', 'cs032', 'student'),
('1MS10CS033', 'cs033', 'student'),
('1MS10CS035', 'cs035', 'student'),
('1MS10CS036', 'cs036', 'student'),
('1MS10CS037', 'cs037', 'student'),
('1MS10CS038', 'cs038', 'student'),
('1MS10CS039', 'cs039', 'student'),
('1MS10CS040', 'cs040', 'student'),
('1MS10CS042', 'cs042', 'student'),
('1MS10CS043', 'cs043', 'student'),
('1MS10CS044', 'cs044', 'student'),
('1MS10CS045', 'cs045', 'student'),
('1MS10CS046', 'cs046', 'student'),
('1MS10CS047', 'cs047', 'student'),
('1MS10CS048', 'cs048', 'student'),
('1MS10CS049', 'cs049', 'student'),
('1MS10CS050', 'cs050', 'student'),
('1MS10CS051', 'cs051', 'student'),
('1MS10CS052', 'cs052', 'student'),
('1MS10CS053', 'cs053', 'student'),
('1MS10CS054', 'cs054', 'student'),
('1MS10CS055', 'cs055', 'student'),
('1MS10CS056', 'cs056', 'student'),
('1MS10CS057', 'cs057', 'student'),
('1MS10CS058', 'cs058', 'student'),
('1MS10CS059', 'cs059', 'student'),
('1MS10CS060', 'cs060', 'student'),
('1MS10CS061', 'cs061', 'student'),
('1MS10CS062', 'cs062', 'student'),
('1MS10CS063', 'cs063', 'student'),
('1MS10CS064', 'cs064', 'student'),
('1MS10CS065', 'cs065', 'student'),
('1MS10CS066', 'cs066', 'student'),
('1MS10CS067', 'cs067', 'student'),
('1MS10CS068', 'cs068', 'student'),
('1MS10CS069', 'cs069', 'student'),
('1MS10CS071', 'cs071', 'student'),
('1MS10CS072', 'cs072', 'student'),
('1MS10CS073', 'cs073', 'student'),
('1MS10CS074', 'cs074', 'student'),
('1MS10CS076', 'cs076', 'student'),
('1MS10CS077', 'cs077', 'student'),
('1MS10CS078', 'cs078', 'student'),
('1MS10CS079', 'cs079', 'student'),
('1MS10CS080', 'cs080', 'student'),
('1MS10CS081', 'cs081', 'student'),
('1MS10CS082', 'cs082', 'student'),
('1MS10CS083', 'cs083', 'student'),
('1MS10CS084', 'cs084', 'student'),
('1MS10CS086', 'cs086', 'student'),
('1MS10CS088', 'cs088', 'student'),
('1MS10CS089', 'cs089', 'student'),
('1MS10CS090', 'cs090', 'student'),
('1MS10CS091', 'cs091', 'student'),
('1MS10CS092', 'cs092', 'student'),
('1MS10CS093', 'cs093', 'student'),
('1MS10CS094', 'cs094', 'student'),
('1MS10CS095', 'cs095', 'student'),
('1MS10CS096', 'cs096', 'student'),
('1MS10CS097', 'cs097', 'student'),
('1MS10CS098', 'cs098', 'student'),
('1MS10CS099', 'cs099', 'student'),
('1MS10CS100', 'cs100', 'student'),
('1MS10CS101', 'cs101', 'student'),
('1MS10CS102', 'cs102', 'student'),
('1MS10CS103', 'cs103', 'student'),
('1MS10CS104', 'cs104', 'student'),
('1MS10CS105', 'cs105', 'student'),
('1MS10CS106', 'cs106', 'student'),
('1MS10CS107', 'cs107', 'student'),
('1MS10CS108', 'cs108', 'student'),
('1MS10CS109', 'cs109', 'student'),
('1MS10CS110', 'cs110', 'student'),
('1MS10CS111', 'cs111', 'student'),
('1MS10CS112', 'cs112', 'student'),
('1MS10CS113', 'cs113', 'student'),
('1MS10CS114', 'cs114', 'student'),
('1MS10CS116', 'cs116', 'student'),
('1MS10CS117', 'cs117', 'student'),
('1MS10CS119', 'cs119', 'student'),
('1MS10CS120', 'cs120', 'student'),
('1MS10CS121', 'cs121', 'student'),
('1MS10CS122', 'cs122', 'student'),
('1MS10CS123', 'cs123', 'student'),
('1MS10CS126', 'cs126', 'student'),
('1MS10CS127', 'cs127', 'student'),
('1MS10CS128', 'cs128', 'student'),
('1MS10CS129', 'cs129', 'student'),
('1MS10CS130', 'cs130', 'student'),
('1MS10CS132', 'cs132', 'student'),
('1MS10CS133', 'cs133', 'student'),
('1MS10CS134', 'cs134', 'student'),
('1MS10CS135', 'cs135', 'student'),
('1MS10CS136', 'cs136', 'student'),
('1MS10CS137', 'cs137', 'student'),
('1MS10CS138', 'cs138', 'student'),
('1MS10CS139', 'cs139', 'student'),
('1MS10CS140', 'cs140', 'student'),
('1MS10CS141', 'cs141', 'student'),
('1MS10CS142', 'cs142', 'student'),
('1MS10CS143', 'cs143', 'student'),
('1MS10CS144', 'cs144', 'student'),
('1MS11CS400', 'cs400', 'student'),
('1MS11CS401', 'cs401', 'student'),
('1MS11CS402', 'cs402', 'student'),
('1MS11CS403', 'cs403', 'student'),
('1MS11CS404', 'cs404', 'student'),
('1MS11CS405', 'cs405', 'student'),
('1MS11CS406', 'cs406', 'student'),
('1MS11CS407', 'cs407', 'student'),
('1MS11CS408', 'cs408', 'student'),
('1MS11CS409', 'cs409', 'student'),
('1MS11CS410', 'cs410', 'student'),
('1MS11CS411', 'cs411', 'student'),
('1MS11CS412', 'cs412', 'student'),
('1MS11CS413', 'cs413', 'student'),
('1MS11CS414', 'cs414', 'student'),
('1MS11CS415', 'cs415', 'student'),
('1MS11CS416', 'cs416', 'student'),
('1MS11CS417', 'cs417', 'student'),
('1MS11CS418', 'cs418', 'student'),
('1MS11CS419', 'cs419', 'student'),
('1MS11CS420', 'cs420', 'student'),
('1MS11CS421', 'cs421', 'sttudent'),
('1MS11CS422', 'cs422', 'student'),
('1MS11CS423', 'cs423', 'student'),
('admin', 'ecadmin', 'coordinator');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `usn` varchar(20) NOT NULL,
  `sfname` varchar(20) DEFAULT NULL,
  `sminit` varchar(6) DEFAULT NULL,
  `slname` varchar(20) DEFAULT NULL,
  `sbranch` varchar(10) DEFAULT NULL,
  `ssem` int(11) DEFAULT NULL,
  `sec` char(1) DEFAULT NULL,
  `group_A` varchar(50) DEFAULT NULL,
  `group_B` varchar(50) DEFAULT NULL,
  `suser_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`usn`),
  KEY `user_id` (`suser_id`),
  KEY `s1` (`group_A`),
  KEY `s2` (`group_B`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `sfname`, `sminit`, `slname`, `sbranch`, `ssem`, `sec`, `group_A`, `group_B`, `suser_id`) VALUES
('1MS08CS010', 'ANAND ', 'J', ' GUNGUNE', 'CSE', 7, 'A', NULL, NULL, '1MS08CS010'),
('1MS08CS105', 'SHIVAM ', NULL, 'TRIPATHI', 'CSE', 7, 'A', NULL, NULL, '1MS08CS105'),
('1MS09CS046', 'KUNAL ', NULL, 'KUMAR', 'CSE', 7, 'A', NULL, NULL, '1MS09CS046'),
('1MS10CS001', 'AAKASH ', NULL, 'PATHAK', 'CSE', 7, 'A', NULL, NULL, '1MS10CS001'),
('1MS10CS002', 'AANCHAL ', NULL, 'JAIN', 'CSE', 7, 'A', NULL, NULL, '1MS10CS002'),
('1MS10CS003', 'ABDUL ', 'P', 'RASIQ ', 'CSE', 7, 'A', NULL, NULL, '1MS10CS003'),
('1MS10CS004', 'ABHISHEK ', 'B K', NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS004'),
('1MS10CS005', 'ABHISHEK', NULL, ' KUMAR', 'CSE', 7, 'A', NULL, NULL, '1MS10CS005'),
('1MS10CS007', 'ABHISHEK ', 'R', 'VIJAY ', 'CSE', 7, 'A', NULL, NULL, '1MS10CS007'),
('1MS10CS009', 'ADITHYA ', 'S', NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS009'),
('1MS10CS010', 'ADITI', NULL, ' JANNU', 'CSE', 7, 'A', NULL, NULL, '1MS10CS010'),
('1MS10CS011', 'ADITYA ', 'M P', NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS011'),
('1MS10CS012', 'ADVAIT  ', 'AJIT', 'KUNTE', 'CSE', 7, 'A', NULL, NULL, '1MS10CS012'),
('1MS10CS013', 'AISHWARYA ', NULL, 'PARASURAM', 'CSE', 7, 'A', NULL, NULL, '1MS10CS013'),
('1MS10CS014', 'AKANKSHA ', NULL, 'SINGH', 'CSE', 7, 'A', NULL, NULL, '1MS10CS014'),
('1MS10CS015', 'AKSHATHA ', 'H P', NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS015'),
('1MS10CS016', 'AKSHAY ', 'T R', NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS016'),
('1MS10CS017', 'AMARESH ', 'G', NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS017'),
('1MS10CS018', 'AMIT ', 'M', ' NAVINDGI', 'CSE', 7, 'A', NULL, NULL, '1MS10CS018'),
('1MS10CS019', 'AMRUTH ', 'H', NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS019'),
('1MS10CS020', 'AMULYA ', 'V', NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS020'),
('1MS10CS021', 'ANKIT', NULL, NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS021'),
('1MS10CS022', 'ANMOL ', NULL, 'KHANDELWAL', 'CSE', 7, 'A', NULL, NULL, '1MS10CS022'),
('1MS10CS024', 'ANUSHA ', 'S', NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS024'),
('1MS10CS025', 'APARNA ', 'S', NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS025'),
('1MS10CS026', 'AQMAR ', NULL, 'HUSAIN', 'CSE', 7, 'A', NULL, NULL, '1MS10CS026'),
('1MS10CS027', 'ARPITA ', NULL, 'SRISHAILAN KOUNDINYA', 'CSE', 7, 'A', NULL, NULL, '1MS10CS027'),
('1MS10CS028', 'ARVIND ', 'M A', NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS028'),
('1MS10CS029', 'ASHA ', NULL, 'ARAVIND', 'CSE', 7, 'A', NULL, NULL, '1MS10CS029'),
('1MS10CS030', 'ASHISH', NULL, ' SINHA', 'CSE', 7, 'A', NULL, NULL, '1MS10CS030'),
('1MS10CS031', 'ASHUTOSH', NULL, NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS031'),
('1MS10CS032', 'ASHWIN ', NULL, 'RAJGOPAL', 'CSE', 7, 'A', NULL, NULL, '1MS10CS032'),
('1MS10CS033', 'ASHWINI', NULL, ' CHHIPA', 'CSE', 7, 'A', NULL, NULL, '1MS10CS033'),
('1MS10CS035', 'NANDITHA ', 'B G', 'SWAMY', 'CSE', 7, 'A', NULL, NULL, '1MS10CS035'),
('1MS10CS036', 'BASAVSAGAR', NULL, NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS036'),
('1MS10CS037', 'BHARATH ', 'K C', NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS037'),
('1MS10CS038', 'CECILIA ', NULL, 'MANGSATABAM', 'CSE', 7, 'A', NULL, NULL, '1MS10CS038'),
('1MS10CS039', 'CHAMAN ', NULL, 'SAURAV', 'CSE', 7, 'A', NULL, NULL, '1MS10CS039'),
('1MS10CS040', 'CHETAN ', 'C', NULL, 'CSE', 7, 'A', NULL, NULL, '1MS10CS040'),
('1MS10CS042', 'DEEPIKA ', NULL, 'HEGDE', 'CSE', 7, 'A', NULL, NULL, '1MS10CS042'),
('1MS10CS043', 'DEVAKI ', NULL, 'VASUDEV PRABHU', 'CSE', 7, 'A', NULL, NULL, '1MS10CS043'),
('1MS10CS045', 'DEVI', '', ' SNIGDHA', 'CSE', 7, 'B', NULL, NULL, '1MS10CS045'),
('1MS10CS046', 'DHANYA', 'P', 'PRASAD', 'CSE', 7, 'B', NULL, NULL, '1MS10CS046'),
('1MS10CS047', 'GANESH', ' ', 'S', 'CSE', 7, 'B', NULL, NULL, '1MS10CS047'),
('1MS10CS048', 'GANESH', 'S', 'HEGDE', 'CSE', 7, 'B', NULL, NULL, '1MS10CS048'),
('1MS10CS049', 'GAGAN', ' ', 'REDDY', 'CSE', 7, 'B', NULL, NULL, '1MS10CS049'),
('1MS10CS050', 'GAURAV', 'G', '', 'CSE', 7, 'B', NULL, NULL, '1MS10CS050'),
('1MS10CS051', 'GAUTI', 'A', ' ', 'CSE', 7, 'B', NULL, NULL, '1MS10CS051'),
('1MS10CS052', 'GREESHMA', ' ', 'RANGASWAMY', 'CSE', 7, 'B', NULL, NULL, '1MS10CS052'),
('1MS10CS053', 'KANCHANA', 'S', 'HEGDE', 'CSE', 7, 'B', NULL, NULL, '1MS10CS053'),
('1MS10CS054', 'KIRAN', ' ', 'K', 'CSE', 7, 'B', NULL, NULL, '1MS10CS054'),
('1MS10CS055', 'KIRAN ', 'S', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS10CS055'),
('1MS10CS056', 'KUSHAGRA ', NULL, 'MISHRA', 'CSE', 7, 'B', NULL, NULL, '1MS10CS056'),
('1MS10CS057', 'LOHIT ', NULL, 'RAJENDRA GHONGADI', 'CSE', 7, 'B', NULL, NULL, '1MS10CS057'),
('1MS10CS058', 'LOHITH ', 'V', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS10CS058'),
('1MS10CS059', 'LORRAINE ', NULL, 'ALISHA PREETI COELHO', 'CSE', 7, 'B', NULL, NULL, '1MS10CS059'),
('1MS10CS060', 'ROHITH ', 'M D', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS10CS060'),
('1MS10CS061', 'SUBHASREE ', 'M', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS10CS061'),
('1MS10CS062', 'MANASI ', NULL, 'SRIDHAR', 'CSE', 7, 'B', NULL, NULL, '1MS10CS062'),
('1MS10CS063', 'MASHITHA ', 'A', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS10CS063'),
('1MS10CS064', 'MAYANK ', NULL, 'KUMAR VISHWAKARMA', 'CSE', 7, 'B', NULL, NULL, '1MS10CS064'),
('1MS10CS065', 'MEERA ', 'V', ' PATIL', 'CSE', 7, 'B', NULL, NULL, '1MS10CS065'),
('1MS10CS066', 'MEGHANA', NULL, ' SHANKAR', 'CSE', 7, 'B', NULL, NULL, '1MS10CS066'),
('1MS10CS067', 'MEGHNA', '', 'NATRAJ', 'CSE', 7, 'B', NULL, NULL, '1MS10CS067'),
('1MS10CS068', 'MOHD', NULL, ' NABEEL SIDDIQUI', 'CSE', 7, 'B', NULL, NULL, '1MS10CS068'),
('1MS10CS069', 'NAGARJUN ', 'N N', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS10CS069'),
('1MS10CS071', 'NAMITHA ', 'A', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS10CS071'),
('1MS10CS072', 'NAMRATHA ', NULL, 'SHETTY', 'CSE', 7, 'B', NULL, NULL, '1MS10CS072'),
('1MS10CS073', 'NEHA ', 'E', 'SUDHAKAR ', 'CSE', 7, 'B', NULL, NULL, '1MS10CS073'),
('1MS10CS074', 'NETHRAVATHI ', 'B N', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS10CS074'),
('1MS10CS076', 'NIKHITHA ', 'R', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS10CS076'),
('1MS10CS078', 'NYTIKA ', 'N', 'SHETTY', 'CSE', 7, 'B', NULL, NULL, '1MS10CS078'),
('1MS10CS079', 'PALLA ', 'GOLLA', ' DWARAKESH', 'CSE', 7, 'B', NULL, NULL, '1MS10CS079'),
('1MS10CS080', 'PALLAVI', NULL, ' BALASAHEB KAMBLE', 'CSE', 7, 'B', NULL, NULL, '1MS10CS080'),
('1MS10CS081', 'PARSHV ', NULL, 'JAIN', 'CSE', 7, 'B', NULL, NULL, '1MS10CS081'),
('1MS10CS082', 'POOJA ', 'M', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS10CS082'),
('1MS10CS083', 'POOJITHA', NULL, ' RAMACHANDRA', 'CSE', 7, 'B', NULL, NULL, '1MS10CS083'),
('1MS10CS084', 'PRACHETH ', 'J', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS10CS084'),
('1MS10CS086', 'PRASHANTH ', 'B', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS10CS086'),
('1MS10CS088', 'PRERANA ', 'T H M', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS10CS088'),
('1MS10CS089', 'PRIYANKA ', NULL, 'SRIVATSA', 'CSE', 7, 'B', NULL, NULL, '1MS10CS089'),
('1MS10CS090', 'PUNITH ', 'N', 'KUMAR ', 'CSE', 7, 'B', NULL, NULL, '1MS10CS090'),
('1MS10CS091', 'RAKSHITH ', 'R', 'SHETTY ', 'CSE', 7, 'C', NULL, NULL, '1MS10CS091'),
('1MS10CS092', 'RAMYA ', 'R', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS10CS092'),
('1MS10CS093', 'RAVEENA ', NULL, 'KUMAR', 'CSE', 7, 'C', NULL, NULL, '1MS10CS093'),
('1MS10CS094', 'REENU', 'S', ' RAJ', 'CSE', 7, 'C', NULL, NULL, '1MS10CS094'),
('1MS10CS095', 'ROHIT', NULL, 'MEHRA', 'CSE', 7, 'C', NULL, NULL, '1MS10CS095'),
('1MS10CS096', 'SADIA', NULL, 'WAHID', 'CSE', 7, 'C', NULL, NULL, '1MS10CS096'),
('1MS10CS097', 'SAGAR', NULL, 'SUNIL WANI', 'CSE', 7, 'C', NULL, NULL, '1MS10CS097'),
('1MS10CS098', 'SAIRAM', NULL, 'PRASAD REDDY S', 'CSE', 7, 'C', NULL, NULL, '1MS10CS098'),
('1MS10CS099', 'SANTHOSH', NULL, 'VISHNU PARAMESWARAN', 'CSE', 7, 'C', NULL, NULL, '1MS10CS099'),
('1MS10CS100', 'SATYA', NULL, 'BRAT SINGH', 'CSE', 7, 'C', NULL, NULL, '1MS10CS100'),
('1MS10CS101', 'SHALINI', 'P', 'SAWKAR', 'CSE', 7, 'C', NULL, NULL, '1MS10CS101'),
('1MS10CS102', 'SHIVAM', NULL, 'DALMIA', 'CSE', 7, 'C', NULL, NULL, '1MS10CS102'),
('1MS10CS103', 'SHOBHA', NULL, 'SHANKAR TIRAKI', 'CSE', 7, 'C', NULL, NULL, '1MS10CS103'),
('1MS10CS104', 'SHREYAS', NULL, 'PRAKASH', 'CSE', 7, 'C', NULL, NULL, '1MS10CS104'),
('1MS10CS105', 'SHUBHAM', NULL, 'RISHISHWAR', 'CSE', 7, 'C', NULL, NULL, '1MS10CS105'),
('1MS10CS106', 'SHUBHENDU', NULL, 'SINGH RAJPUT', 'CSE', 7, 'C', NULL, NULL, '1MS10CS106'),
('1MS10CS107', 'SHUBHRA', NULL, 'KEJRIWAL', 'CSE', 7, 'C', NULL, NULL, '1MS10CS107'),
('1MS10CS108', 'SNEHAL', NULL, 'RADHARAMAN PATHAK', 'CSE', 7, 'C', NULL, NULL, '1MS10CS108'),
('1MS10CS109', 'SOUPARNO', NULL, 'RAYCHAUDHURI', 'CSE', 7, 'C', NULL, NULL, '1MS10CS109'),
('1MS10CS110', 'SRILEKHA', 'G', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS10CS110'),
('1MS10CS111', 'SRINIVAS', 'P', 'ANVEKAR', 'CSE', 7, 'C', NULL, NULL, '1MS10CS111'),
('1MS10CS112', 'SRUTI', NULL, 'SARAYAN', 'CSE', 7, 'C', NULL, NULL, '1MS10CS112'),
('1MS10CS113', 'SUDARSHAN', NULL, 'TAMANG', 'CSE', 7, 'C', NULL, NULL, '1MS10CS113'),
('1MS10CS114', 'SUJEET', NULL, 'KUMAR GUPTA', 'CSE', 7, 'C', NULL, NULL, '1MS10CS114'),
('1MS10CS116', 'SUMITH', NULL, 'KUMAR GARG', 'CSE', 7, 'C', NULL, NULL, '1MS10CS116'),
('1MS10CS117', 'SUNIL', 'V R', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS10CS117'),
('1MS10CS119', 'SYED', NULL, 'ABU AYUB ANSARI', 'CSE', 7, 'C', NULL, NULL, '1MS10CS119'),
('1MS10CS120', 'TANAY', NULL, 'AUL', 'CSE', 7, 'C', NULL, NULL, '1MS10CS120'),
('1MS10CS121', 'VARUN', NULL, 'BHATNAGAR', 'CSE', 7, 'C', NULL, NULL, '1MS10CS121'),
('1MS10CS122', 'VASUDHA', NULL, 'VISWAMURTHY', 'CSE', 7, 'C', NULL, NULL, '1MS10CS122'),
('1MS10CS123', 'VIKAS', NULL, 'MISHRA', 'CSE', 7, 'C', NULL, NULL, '1MS10CS123'),
('1MS10CS126', 'VINODH', NULL, 'KUMAR P', 'CSE', 7, 'C', NULL, NULL, '1MS10CS126'),
('1MS10CS127', 'VIVEK', NULL, 'KUMAR GUPTA', 'CSE', 7, 'C', NULL, NULL, '1MS10CS127'),
('1MS10CS128', 'VIVEK', NULL, 'KUMAR VERMA', 'CSE', 7, 'C', NULL, NULL, '1MS10CS128'),
('1MS10CS129', 'YASHASWINI', NULL, 'NAG M N', 'CSE', 7, 'C', NULL, NULL, '1MS10CS129'),
('1MS10CS130', 'YASHASWINI', 'P', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS10CS130'),
('1MS10CS132', 'SHRUTHI', 'S', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS10CS132'),
('1MS10CS133', 'SHRUTHI', 'V', 'RAIDURG', 'CSE', 7, 'C', NULL, NULL, '1MS10CS133'),
('1MS10CS134', 'SHREYAS', 'B S', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS10CS134'),
('1MS10CS135', 'ABHIRAM', 'E', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS10CS135'),
('1MS10CS136', 'IRA', NULL, 'KUNTE', 'CSE', 7, 'C', NULL, NULL, '1MS10CS136'),
('1MS10CS137', 'SANDHYA', 'S', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS10CS137'),
('1MS10CS138', 'SHREE DEVI', 'B N', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS10CS138'),
('1MS10CS139', 'TRUPTI', 'J S', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS10CS139'),
('1MS10CS140', 'VARSHA', 'B', 'CHANDAN', 'CSE', 7, 'B', NULL, NULL, '1MS10CS140'),
('1MS10CS141', 'SUSHMA', 'G', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS10CS141'),
('1MS10CS142', 'ADITHYA', NULL, 'VENKATESH', 'CSE', 7, 'C', NULL, NULL, '1MS10CS142'),
('1MS10CS143', 'SANDEEP', 'V', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS10CS143'),
('1MS10CS144', 'ASHWIN', 'R', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS10CS144'),
('1MS11CS400', 'BASAVARAJ', NULL, NULL, 'CSE', 7, 'A', NULL, NULL, '1MS11CS400'),
('1MS11CS401', 'BEEMESH', 'B N', NULL, 'CSE', 7, 'A', NULL, NULL, '1MS11CS401'),
('1MS11CS402', 'R CHARANA', NULL, 'KUMAR', 'CSE', 7, 'A', NULL, NULL, '1MS11CS402'),
('1MS11CS403', 'DAKSHAYINI', NULL, NULL, 'CSE', 7, 'B', NULL, NULL, '1MS11CS403'),
('1MS11CS404', 'GEETA', NULL, 'DALAWAI HANUMANTH', 'CSE', 7, 'B', NULL, NULL, '1MS11CS404'),
('1MS11CS405', 'HARISHKUMAR', NULL, NULL, 'CSE', 7, 'C', NULL, NULL, '1MS11CS405'),
('1MS11CS406', 'HEMA', 'N', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS11CS406'),
('1MS11CS407', 'KESHAVA', 'C', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS11CS407'),
('1MS11CS408', 'KHAN AMRIN', NULL, 'KHANAM AKBAR', 'CSE', 7, 'C', NULL, NULL, '1MS11CS408'),
('1MS11CS409', 'KISHORE', 'K', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS11CS409'),
('1MS11CS410', 'KUMARA', 'S N', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS11CS410'),
('1MS11CS411', 'LAVANYA', 'N', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS11CS411'),
('1MS11CS412', 'MUNIRAJU', 'G K', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS11CS412'),
('1MS11CS413', 'MUSTAFA', NULL, NULL, 'CSE', 7, 'B', NULL, NULL, '1MS11CS413'),
('1MS11CS414', 'NAGARAJ', NULL, NULL, 'CSE', 7, 'B', NULL, NULL, '1MS11CS414'),
('1MS11CS415', 'PRAHLAD', 'D', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS11CS415'),
('1MS11CS416', 'PRERANA', NULL, 'JOSHI', 'CSE', 7, 'B', NULL, NULL, '1MS11CS416'),
('1MS11CS417', 'PRIYANKA', 'K P', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS11CS417'),
('1MS11CS418', 'RANGANATH', 'D G', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS11CS418'),
('1MS11CS419', 'SACHIN', NULL, NULL, 'CSE', 7, 'C', NULL, NULL, '1MS11CS419'),
('1MS11CS420', 'SUMAN', 'C', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS11CS420'),
('1MS11CS421', 'VEERANNA', NULL, 'CHACHADI', 'CSE', 7, 'C', NULL, NULL, '1MS11CS421'),
('1MS11CS422', 'VENKATADRIKUMAR', 'C', NULL, 'CSE', 7, 'B', NULL, NULL, '1MS11CS422'),
('1MS11CS423', 'VIJAYAKUMAR', 'B', NULL, 'CSE', 7, 'C', NULL, NULL, '1MS11CS423');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `sl_no` int(11) NOT NULL DEFAULT '0',
  `tname` varchar(45) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sl_no`),
  KEY `t1` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`sl_no`, `tname`, `subject`) VALUES
(1, 'Dr. K G Srinivasa', 'Parallel Programming using CUDA'),
(2, 'Dr. R Srinivasan', NULL),
(3, 'Anita Kanavalli', NULL),
(4, 'Seema S', NULL),
(5, 'Annapurna P Patil', NULL),
(6, 'Jagadish S K', NULL),
(7, 'Jayalakshmi D S', NULL),
(8, 'Monica R Mundada', NULL),
(9, 'Sanjeetha R', NULL),
(10, 'A Parkavi', NULL),
(11, 'Veena G S', NULL),
(12, 'J Geeta', NULL),
(13, 'T N R Kumar', NULL),
(14, 'Ramanagouda S Patil', NULL),
(15, 'Suma Bhat', NULL),
(16, 'Mamatha Jadhav V', NULL),
(17, 'Chetan C T', NULL),
(18, 'Sini Anna Alex', NULL),
(19, 'Sardar Vandana Sudhakar', NULL),
(20, 'Meera Devi A Kawalgi', NULL),
(21, 'Malle Gowda M', 'Service Oriented Architechture'),
(22, 'E Manoranjitham', NULL),
(23, 'H V Divakar', 'Storage Area Networks'),
(24, 'Chandrika Prasad', NULL),
(25, 'Leelavathi Rathod', NULL),
(26, 'Rajarajeshwari', 'Cloud Computing'),
(27, 'Sowmyarani C N', 'Cloud Computing'),
(28, 'Shikha', NULL),
(29, 'Pramod C Sunagar', NULL),
(30, 'Mahima M Katti', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD CONSTRAINT `ecuser_id` FOREIGN KEY (`cuser_id`) REFERENCES `login` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `group_a`
--
ALTER TABLE `group_a`
  ADD CONSTRAINT `GAusn` FOREIGN KEY (`gausn`) REFERENCES `student` (`usn`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `group_a_ibfk_1` FOREIGN KEY (`1st_pref`) REFERENCES `elective_subject` (`ename`),
  ADD CONSTRAINT `group_a_ibfk_2` FOREIGN KEY (`2nd_pref`) REFERENCES `elective_subject` (`ename`);

--
-- Constraints for table `group_b`
--
ALTER TABLE `group_b`
  ADD CONSTRAINT `GBusn` FOREIGN KEY (`gbusn`) REFERENCES `student` (`usn`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `group_b_ibfk_1` FOREIGN KEY (`1st_pref`) REFERENCES `elective_subject` (`ename`),
  ADD CONSTRAINT `group_b_ibfk_2` FOREIGN KEY (`2nd_pref`) REFERENCES `elective_subject` (`ename`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `s1` FOREIGN KEY (`group_A`) REFERENCES `elective_subject` (`ename`),
  ADD CONSTRAINT `s2` FOREIGN KEY (`group_B`) REFERENCES `elective_subject` (`ename`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`suser_id`) REFERENCES `login` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `t1` FOREIGN KEY (`subject`) REFERENCES `elective_subject` (`ename`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
