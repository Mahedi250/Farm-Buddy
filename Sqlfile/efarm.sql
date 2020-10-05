-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 03:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_temp`
--

CREATE TABLE `client_temp` (
  `Com_id` int(10) NOT NULL,
  `full name` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_country` varchar(20) NOT NULL,
  `c_add` varchar(20) NOT NULL,
  `c_li` varchar(20) NOT NULL,
  `user-type` int(20) NOT NULL,
  `m_system` int(5) NOT NULL,
  `activity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_temp`
--

INSERT INTO `client_temp` (`Com_id`, `full name`, `email`, `contact`, `username`, `password`, `c_name`, `c_country`, `c_add`, `c_li`, `user-type`, `m_system`, `activity`) VALUES
(15, 'Maruf Hasan', 'saimaromi@gmail.com', '016774444438', '0', '123', 'tamim agro', 'Bangladesh', 'kapasia,gazipur', '013546975456', 2, 1, 1),
(16, 'jamil khan', 'jamilboss@gmail.com', '0165487547', '0', '123', 'jamil dairy farm', 'austrilia', 'assdfsdfgg', '14579542654', 2, 12, 1),
(17, 'saima', 'saimaromi@gmail.com', '016758451', '0', '123', 'saima agro', 'Bangladesh', 'sasdfsadfsdf', '14579613254', 2, 2, 1),
(20, 'Ashiqur rahman', 'ashiquezaman@gmail.c', '1642579119', '0', '123', '123', '123', 'Dhaka,Banfladesh', '123', 2, 2, 1),
(21, 'noor', 'noor@gmail.com', '0136458795', '0', '123', 'noor dairy', 'bangladesh', 'rajshahi', '1457569845', 2, 1, 1),
(22, 'hssan', 'dasd@gmail.com', '0134565', '0', '123', 'noor dairy', 'bangladesh', 'dhaka,Bangldesh', '1457569845', 2, 1, 1),
(23, 'onik Hassan', 'dasd@gmail.com', '0136457895', 'onik20', 'onik123', 'onik dairy', 'bangladesh', 'dhaka,Bangldesh', '1457569845', 2, 1, 1),
(24, 'jabin', 'dasd@gmail.com', '0135648545', 'jabin', '123', 'jabin poultry', 'bangladesh', 'asdfsdgdfh', '1457569845', 2, 1, 1),
(25, 'anis sarkar', 'anis250@gmail.com', '013645754', 'anis', '123', 'anis dairy', 'Bangladesh', 'dhaka,bangladesh', '12364579545', 2, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `com_system`
--

CREATE TABLE `com_system` (
  `com_id` int(5) NOT NULL,
  `system_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `com_system`
--

INSERT INTO `com_system` (`com_id`, `system_id`) VALUES
(15, 1),
(16, 1),
(16, 2),
(17, 2),
(21, 1),
(20, 2),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(25, 2);

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `cred_id` int(5) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `User_type` int(10) NOT NULL,
  `emp_id` int(5) DEFAULT NULL,
  `client_id` int(5) DEFAULT NULL,
  `man_id` int(10) DEFAULT NULL,
  `activity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`cred_id`, `Username`, `Password`, `User_type`, `emp_id`, `client_id`, `man_id`, `activity`) VALUES
(1, 'maruf', '123', 1, 3, NULL, NULL, 1),
(62, 'maruf250', '123', 1, 11, NULL, NULL, 0),
(63, 'jamil', '123', 1, 13, NULL, NULL, 0),
(64, 'noor123', '123', 1, 14, NULL, NULL, 0),
(67, 'maruf54', '123', 1, 15, NULL, NULL, 0),
(71, 'anis', '123', 2, NULL, 25, NULL, 1),
(72, 'hassan', 'ss', 3, NULL, NULL, 25, 0),
(73, '123', '123', 3, NULL, NULL, 25, 0),
(74, '123', '123', 3, NULL, NULL, 25, 0);

-- --------------------------------------------------------

--
-- Table structure for table `maneger`
--

CREATE TABLE `maneger` (
  `man_id` int(5) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `system` int(10) NOT NULL,
  `com_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maneger`
--

INSERT INTO `maneger` (`man_id`, `full_name`, `email`, `username`, `password`, `system`, `com_id`) VALUES
(1, 'maruf hassan', 'maruf250@gmail.com', 'maruf2500', '123', 0, 0),
(2, 'maruf hassan', 'maruf250@gmail.com', 'maruf2500', '123', 0, 0),
(3, 'maruf', '123@gmail.com', '123', '123', 0, 0),
(4, 'maruf', '123@gmail.ciom', 'maruf', '123', 1, 0),
(5, 'hassan', 'hassan@gmail.com', 'hassan123', '123', 1, 25),
(6, 'kashem', 'kashem@gmail.com', 'kashem123', '123', 0, 25),
(7, 'kashem', 'kashem@gmail.com', 'kashem123', '123', 0, 25),
(8, 'kashem', 'kashem@gmail.com', 'kashem123', '123', 0, 25),
(9, 'kashem', 'kashem@gmail.com', 'kashem123', '123', 0, 25),
(10, 'jibon', 'jibon123@gmail.com', '123', '123', 1, 25),
(11, 'hassan', 'hasan@gmail.com', 'hassan', 'hassan', 2, 25),
(12, 'azxcvzx', 'mm@gmail.com', '123', '123', 1, 25),
(13, 'ggg', 'g@gmail.com', '123', '123', 1, 25),
(14, 'dasf', 'asdf@gmail.com', '123', '123', 1, 25),
(15, 'asdf', 'asd@gmail.com', '123', '123', 1, 25),
(16, 'jgbv', 'jgh@gmail.com', '123', '123', 1, 25),
(17, 'asf', 'asfa@gmail.com', 'maruf123', '123', 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `system_cat`
--

CREATE TABLE `system_cat` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_cat`
--

INSERT INTO `system_cat` (`cat_id`, `cat_name`) VALUES
(1, 'Poultry-Management-s'),
(2, 'Dairy-Management-sys');

-- --------------------------------------------------------

--
-- Table structure for table `temp_admin`
--

CREATE TABLE `temp_admin` (
  `a_id` int(10) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_type` int(5) NOT NULL,
  `activity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_admin`
--

INSERT INTO `temp_admin` (`a_id`, `full_name`, `Email`, `Contact`, `username`, `password`, `user_type`, `activity`) VALUES
(3, 'Maruf Hasan', 'saimaromi@gmail.com', '123', 'maruf', '123', 1, 1),
(4, 'omr sani', 'maruf250@gmail.com', '01677444438', 'maruf250', 'maruf', 1, 1),
(5, 'josep', 'josep@gmail.com', '1648975785', 'josep123', '123456', 1, 1),
(6, 'hemel', 'hemelraihan123@gmail.com', '016548759', 'hml', '123', 1, 1),
(7, 'Maruf Hasan', 'saimaromi@gmail.com', '11', '11', '11', 1, 1),
(8, 'hassan', 'saimaromi@gmail.com', '123', '123', '123', 1, 1),
(9, 'Maruf Hasan', 'saimaromi@gmail.com', '0124685', 'jj', '123', 1, 1),
(10, 'joya', 'joya@gmail.com', '123', 'joya123', '123', 1, 1),
(11, 'jagdish', 'maruu@gmail.com', '123456', 'maruf250', '123', 1, 1),
(13, 'jamil khan', 'saimaromi@gmail.com', '0166574844', 'jamil', '123', 1, 1),
(14, 'noor', 'noor@gmail.com', '016445798544', 'noor123', '123', 1, 1),
(15, 'avijit', 'dasd@gmail.com', '0136458795', 'maruf54', '123', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_temp`
--
ALTER TABLE `client_temp`
  ADD PRIMARY KEY (`Com_id`);

--
-- Indexes for table `com_system`
--
ALTER TABLE `com_system`
  ADD KEY `com_id` (`com_id`),
  ADD KEY `system_id` (`system_id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`cred_id`),
  ADD KEY `emp_rel` (`emp_id`),
  ADD KEY `clent` (`client_id`) USING BTREE;

--
-- Indexes for table `maneger`
--
ALTER TABLE `maneger`
  ADD PRIMARY KEY (`man_id`);

--
-- Indexes for table `system_cat`
--
ALTER TABLE `system_cat`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `temp_admin`
--
ALTER TABLE `temp_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_temp`
--
ALTER TABLE `client_temp`
  MODIFY `Com_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `cred_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `maneger`
--
ALTER TABLE `maneger`
  MODIFY `man_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `temp_admin`
--
ALTER TABLE `temp_admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `com_system`
--
ALTER TABLE `com_system`
  ADD CONSTRAINT `com_system_ibfk_1` FOREIGN KEY (`com_id`) REFERENCES `client_temp` (`Com_id`),
  ADD CONSTRAINT `com_system_ibfk_2` FOREIGN KEY (`system_id`) REFERENCES `system_cat` (`cat_id`);

--
-- Constraints for table `credentials`
--
ALTER TABLE `credentials`
  ADD CONSTRAINT `credentials_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `temp_admin` (`a_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `credentials_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client_temp` (`Com_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
