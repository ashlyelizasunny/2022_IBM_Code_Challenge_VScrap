-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 09:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scrap_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cmp_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cmp_id`, `full_name`, `address`, `phone`, `email`, `state`, `district`) VALUES
(3, 'ABC SCRAPPERS', 'Thoppurathu House', '9961057098', 'abc@gmail.com', 'Kerala', 'Pathanamthitta');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`) VALUES
('abc@gmail.com', 'abc', 'Company'),
('admin@gmail.com', '1234', 'Admin'),
('jophy@gmail.com', '123123', 'Customer'),
('vipinpunnacka@gmail.com', '12345', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `rc_book`
--

CREATE TABLE `rc_book` (
  `registered_number` varchar(200) NOT NULL,
  `dealer_name` text NOT NULL,
  `dealer_address` text NOT NULL,
  `maker_name` text NOT NULL,
  `owner_name` text NOT NULL,
  `owner_address` text NOT NULL,
  `class_of_vehicle` text NOT NULL,
  `makers_classification` text NOT NULL,
  `type_of_body` text NOT NULL,
  `chessis_number` text NOT NULL,
  `engine_number` text NOT NULL,
  `fuel` text NOT NULL,
  `color` text NOT NULL,
  `month_of_manufacture` text NOT NULL,
  `year_of_manufacture` text NOT NULL,
  `hourse_power` text NOT NULL,
  `cubic_capacity` text NOT NULL,
  `weight` text NOT NULL,
  `no_of_cylinder` text NOT NULL,
  `wheel_base` text NOT NULL,
  `seating_capacity` text NOT NULL,
  `nature_of_registration` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rc_book`
--

INSERT INTO `rc_book` (`registered_number`, `dealer_name`, `dealer_address`, `maker_name`, `owner_name`, `owner_address`, `class_of_vehicle`, `makers_classification`, `type_of_body`, `chessis_number`, `engine_number`, `fuel`, `color`, `month_of_manufacture`, `year_of_manufacture`, `hourse_power`, `cubic_capacity`, `weight`, `no_of_cylinder`, `wheel_base`, `seating_capacity`, `nature_of_registration`) VALUES
('KL-07-AY-2349', 'MUTHOOT MOTORS', 'PALARIVATTOM COCHIN', 'HONDA MOTOR CYCLE INDIA LTD', 'RAJ KUMAR', 'RAJ VILLA, CHERTHALA ALAPPUZHA', 'MC ABOVE 95CC', 'HONDA ACTIVA', 'SOLO', 'ME4JF082E78885151', 'JF0BE8563955', 'PETROL', 'BLACK', 'JANUARY', '2000', '7', '102', '111', '1', '', '2', 'private');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `aadhar` varchar(200) NOT NULL,
  `user_status` varchar(200) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `full_name`, `address`, `phone`, `email`, `state`, `district`, `aadhar`, `user_status`) VALUES
(7, 'Ex SGT Thomas Varghese', 'Vellaramala House', '9961057098', 'vipinpunnacka@gmail.com', 'Kerala', 'Ernakulam', '334234234234', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `scrap_request`
--

CREATE TABLE `scrap_request` (
  `request_id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `reg_number` varchar(200) NOT NULL,
  `booking_date` date NOT NULL,
  `schedule_date` date NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `image` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scrap_request`
--

INSERT INTO `scrap_request` (`request_id`, `user_email`, `reg_number`, `booking_date`, `schedule_date`, `cmp_id`, `remarks`, `image`, `status`, `code`) VALUES
(15, 'shchanganassery@gmail.com', 'KL-07-AY-2349', '2022-02-22', '2022-02-28', 3, 'Scrapping completed.....', '1645501495.jpg', 'completed', 3704);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cmp_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `rc_book`
--
ALTER TABLE `rc_book`
  ADD PRIMARY KEY (`registered_number`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `scrap_request`
--
ALTER TABLE `scrap_request`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cmp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `scrap_request`
--
ALTER TABLE `scrap_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
