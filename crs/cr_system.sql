-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 11:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `c_id` int(11) NOT NULL,
  `a_no` bigint(12) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type_crime` varchar(50) NOT NULL,
  `d_o_c` date NOT NULL,
  `description` varchar(7000) NOT NULL,
  `inc_status` varchar(50) DEFAULT 'Unassigned',
  `pol_status` varchar(50) DEFAULT 'null',
  `p_id` varchar(50) DEFAULT 'Null'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`c_id`, `a_no`, `location`, `type_crime`, `d_o_c`, `description`, `inc_status`, `pol_status`, `p_id`) VALUES
(1, 985736521478, 'Rohini Sec-15', 'Robbery', '2018-12-06', 'My Home has been Robbed.', 'Assigned', 'ChargeSheet Filed', 't101'),
(2, 987546123458, 'Rithala', 'Theft', '2021-04-16', 'cd', 'Assigned', 'ChargeSheet Filed', '12457'),
(3, 987546123458, 'Rithala', 'Molestation', '2021-04-14', 'i Saw', 'Unassigned', 'null', 'Null'),
(4, 987546123458, 'Rithala', 'Theft', '2021-04-06', 'asdgz', 'Assigned', 'In Process', '12457'),
(5, 985736521478, 'Rithala', 'Theft', '2021-04-06', 'asdgz', 'Assigned', 'In Process', '12457'),
(6, 985736521478, 'Rithala', 'Theft', '2021-04-09', 'ZC', 'Unassigned', 'null', 'Null'),
(7, 985736521478, 'Delhi', 'Theft', '2021-04-15', 'sds', 'Assigned', 'ChargeSheet Filed', '12457'),
(8, 985736521478, 'Rithala', 'Theft', '2021-05-03', 'I saw', 'Assigned', 'ChargeSheet Filed', '12457'),
(9, 985736521478, 'Delhi', 'Kidnapping', '2021-05-03', 'I saw the kid....', 'Unassigned', 'null', 'Null'),
(10, 985736521478, 'Rohini Sec-15', 'Molestation', '2021-05-03', 'A girl was molested.', 'Unassigned', 'null', 'Null'),
(11, 987452545874, 'Rithala', 'Theft', '2021-05-04', 'My Wallet was stolen by someone.', 'Unassigned', 'null', 'Null'),
(12, 987452545874, 'Rohini Sec-15', 'Murder', '2021-05-01', 'A saw some people which .................', 'Assigned', 'ChargeSheet Filed', 't101'),
(13, 987452545874, 'Rohini Sector- 14', 'Molestation', '2021-05-04', 'A ....................................', 'Unassigned', 'null', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `s.no.` int(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`s.no.`, `email`, `message`, `dt`) VALUES
(1, 'adarsh@gmail.com', 'working', '2021-04-24 13:46:24'),
(2, 'adarsh@gmail.com', 'I am ready', '2021-04-24 13:54:39'),
(33, 'adarshkashyap1muz@gmail.com', '', '2021-04-24 16:48:03'),
(34, '', '', '2021-04-25 19:12:37'),
(35, 'adarshkashyap1muz@gmail.com', '', '2021-04-25 21:14:02'),
(36, 'adarshkashyap1muz@gmail.com', '', '2021-04-25 21:18:19'),
(37, 'adarshkashyap1muz@gmail.com', '', '2021-04-25 21:21:10'),
(38, '', '', '2021-04-25 21:22:50'),
(39, '', '', '2021-04-25 21:25:59'),
(40, 'adarshkashyap1muz@gmail.com', '', '2021-04-25 21:27:15'),
(41, 'adarshkashyap1muz@gmail.com', '', '2021-04-26 13:09:05'),
(42, '', '', '2021-04-26 13:09:26'),
(43, 'adarshkashyap1muz@gmail.com', '1245', '2021-04-26 13:12:59'),
(44, 'adarshkashyap1muz@gmail.com', '1245', '2021-04-26 13:22:19'),
(45, 'adarshkashyap1muz@gmail.com', '', '2021-04-26 13:46:10'),
(46, 'adarshkashyap1muz@gmail.com', '', '2021-04-26 13:58:47'),
(47, 'adarshkashyap1muz@gmail.com', 'cdr', '2021-04-26 14:14:32'),
(48, 'adarshkashyap1muz@gmail.com', 'cdr', '2021-04-26 14:16:05'),
(49, 'adarshkashyap1muz@gmail.com', 'bg', '2021-04-26 14:16:11'),
(50, 'adarshkashyap1muz@gmail.com', '', '2021-04-26 14:18:34'),
(51, 'adarshkashyap1muz@gmail.com', '', '2021-04-26 14:20:19'),
(52, 'adarshkashyap1muz@gmail.com', '', '2021-04-26 14:34:14'),
(53, 'adarshkashyap1muz@gmail.com', '', '2021-04-26 14:38:58'),
(54, '', '', '2021-04-26 14:55:05'),
(55, 'adarshkashyap1muz@gmail.com', '', '2021-04-26 14:55:18'),
(56, 'adarshkashyap1muz@gmail.com', '', '2021-04-26 14:55:40'),
(57, 'adarshkashyap1muz@gmail.com', '', '2021-04-26 14:56:13'),
(58, '', '', '2021-04-26 14:56:19'),
(59, 'adarshkashyap1muz@gmail.com', '', '2021-04-26 15:00:09'),
(60, 'adarshkashyap1muz@gmail.com', 'df', '2021-04-26 15:00:15'),
(61, 'adarshkashyap1muz@gmail.com', 'nnnc', '2021-04-26 15:00:49'),
(62, 'adarshkashyap1muz@gmail.com', '', '2021-04-26 15:03:11'),
(63, 'adarshkashyap1muz@gmail.com', 'csavavav', '2021-04-26 15:04:06'),
(64, 'adarshkashyap1muz@gmail.com', 'Good Website', '2021-05-05 07:27:34'),
(65, 'adarshkashyap1muz@gmail.com', 'Good website.', '2021-05-05 09:20:22'),
(66, 'adarshkashyap1muz@gmail.com', 'BbxB', '2021-05-05 14:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `h_id` varchar(50) NOT NULL,
  `h_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`h_id`, `h_pass`) VALUES
('head@kp', 'head'),
('aadi@head', 'aadi123@adarsh');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `p_name` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `p_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`p_name`, `p_id`, `spec`, `location`, `p_pass`) VALUES
('Amish ', '12457', 'Theft', 'Rithala', '123456'),
('Aditya', '98745', 'Theft', 'Rithala', 'Aadi123'),
('Manish Singh', 'a101', 'Murder', 'Rithala', 'manish'),
('Ankit', 't101', 'All', 'Rohini Sec-15', '123');

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `i_id` varchar(50) NOT NULL,
  `i_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `i_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`i_id`, `i_name`, `location`, `i_pass`) VALUES
('1245', 'Aditya', 'Delhi ', '12345'),
('12548', 'Anil Singh', 'Rohini Sector- 14', 'Anil123'),
('rith', 'Arjun', 'Rithala', 'arjun'),
('rohini15', 'Shivam', 'Rohini Sec-15', 'shivam');

-- --------------------------------------------------------

--
-- Table structure for table `update_case`
--

CREATE TABLE `update_case` (
  `c_id` int(11) NOT NULL,
  `d_o_u` timestamp NOT NULL DEFAULT current_timestamp(),
  `case_update` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_case`
--

INSERT INTO `update_case` (`c_id`, `d_o_u`, `case_update`) VALUES
(1, '2018-12-17 10:32:06', 'Criminal Verified'),
(1, '2018-12-17 10:32:12', 'Criminal Caught'),
(1, '2018-12-17 10:32:15', 'Criminal Interrogated'),
(1, '2018-12-17 10:32:21', 'Criminal Accepted the Crime'),
(1, '2018-12-17 10:32:26', 'Criminal Charged'),
(1, '2018-12-17 10:32:51', 'The case has been moved to Court.'),
(1, '2018-12-17 10:32:59', 'Criminal Verified'),
(2, '2021-04-21 04:38:31', 'Mission Completed!'),
(5, '2021-04-21 04:38:55', 'Criminal Interrogated'),
(4, '2021-04-26 07:30:36', 'Criminal Interrogated'),
(4, '2021-04-26 07:30:48', 'Criminal Accepted the Crime'),
(4, '2021-05-04 16:27:40', 'Criminal Caught'),
(12, '2021-05-05 02:56:48', 'Criminal Caught'),
(12, '2021-05-05 02:56:52', 'Criminal Verified'),
(12, '2021-05-05 02:56:57', 'Criminal Accepted the Crime'),
(12, '2021-05-05 02:57:04', 'Criminal Charged'),
(12, '2021-05-05 02:57:54', 'Criminal found guilty by the court.'),
(4, '2021-05-05 07:10:29', 'Criminal Charged');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_name` varchar(50) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL,
  `u_addr` varchar(100) NOT NULL,
  `a_no` bigint(12) NOT NULL,
  `gen` varchar(15) NOT NULL,
  `mob` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_name`, `u_id`, `u_pass`, `u_addr`, `a_no`, `gen`, `mob`) VALUES
('KASHYAP', 'kashyap1muz@gmail.com', '147852', 'Muzaffarpur 2', 145214789654, 'Male', 7203009136),
('ADARSH KASHYAP', 'adarshkashyap1muz@gmail.com', 'Adarsh', 'Muzaffarpur, Bihar-842003', 985736521478, 'Male', 7870577198),
('Amit Kumar', 'amit@gmail.com', '123456', 'Near Rohini West Metro Station, Delhi-110089', 987452545874, 'Male', 8754215858),
('Amish', 'amish@gmail.com', '123456', 'Muzaffarpur', 987456321458, 'Male', 6203009136);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`s.no.`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `police_station`
--
ALTER TABLE `police_station`
  ADD PRIMARY KEY (`i_id`),
  ADD UNIQUE KEY `location` (`location`);

--
-- Indexes for table `update_case`
--
ALTER TABLE `update_case`
  ADD UNIQUE KEY `d_o_u` (`d_o_u`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`a_no`),
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD UNIQUE KEY `mob` (`mob`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `s.no.` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
