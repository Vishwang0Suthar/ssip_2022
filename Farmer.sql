-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 11:12 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_password`) VALUES
('cltofc001', 'amreli@123');

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_info`
--

CREATE TABLE `bussiness_info` (
  `sales_price` int(20) NOT NULL,
  `co_operative_membership` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bussiness_info`
--

INSERT INTO `bussiness_info` (`sales_price`, `co_operative_membership`) VALUES
(45000, 'APMC');

-- --------------------------------------------------------

--
-- Table structure for table `farm_info`
--

CREATE TABLE `farm_info` (
  `survey_no` int(11) NOT NULL,
  `village` varchar(20) NOT NULL,
  `taluka` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farm_info`
--

INSERT INTO `farm_info` (`survey_no`, `village`, `taluka`, `district`, `state`) VALUES
(238, 'Rajula', 'Amreli', 'Amreli', 'Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `field_info`
--

CREATE TABLE `field_info` (
  `soil_report` blob NOT NULL,
  `irrigation` varchar(20) NOT NULL,
  `land_title` varchar(20) NOT NULL,
  `doc_712` blob NOT NULL,
  `crop_history` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `field_info`
--

INSERT INTO `field_info` (`soil_report`, `irrigation`, `land_title`, `doc_712`, `crop_history`) VALUES
(0x736f696c207265706f72742e706466, 'Drip irrigation', 'Rajesh Khandla J', 0x3731322e706466, 'Wheat');

-- --------------------------------------------------------

--
-- Table structure for table `financial_instruments`
--

CREATE TABLE `financial_instruments` (
  `account_ownership` varchar(20) NOT NULL,
  `loan_amount` int(20) NOT NULL,
  `use_of_loan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `financial_instruments`
--

INSERT INTO `financial_instruments` (`account_ownership`, `loan_amount`, `use_of_loan`) VALUES
('Rajesh Khandla Jayan', 60000, 'Tractor');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `insurance_amount` int(20) NOT NULL,
  `cmp_details` varchar(20) NOT NULL,
  `ins_period` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`insurance_amount`, `cmp_details`, `ins_period`) VALUES
(40000, 'ICICI', '2020-2028');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `farmer_Id` varchar(20) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `aadhar_no` int(12) NOT NULL,
  `account_no` int(14) NOT NULL,
  `farmer_name` varchar(40) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`farmer_Id`, `mobile_no`, `aadhar_no`, `account_no`, `farmer_name`, `date_of_birth`, `email`) VALUES
('7478 2971 8718 5025', 2147483647, 2147483647, 2147483647, 'Rajesh Khandla J', '1968-03-12', 'rajeshkhandla98@gmai');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `farmer_id` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `yeild_info`
--

CREATE TABLE `yeild_info` (
  `acres_harvested` varchar(20) NOT NULL,
  `harvesting_technique` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yeild_info`
--

INSERT INTO `yeild_info` (`acres_harvested`, `harvesting_technique`) VALUES
('33 acres', 'Reaping');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bussiness_info`
--
ALTER TABLE `bussiness_info`
  ADD PRIMARY KEY (`co_operative_membership`);

--
-- Indexes for table `farm_info`
--
ALTER TABLE `farm_info`
  ADD PRIMARY KEY (`survey_no`);

--
-- Indexes for table `field_info`
--
ALTER TABLE `field_info`
  ADD PRIMARY KEY (`land_title`);

--
-- Indexes for table `financial_instruments`
--
ALTER TABLE `financial_instruments`
  ADD PRIMARY KEY (`account_ownership`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`insurance_amount`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`farmer_Id`);

--
-- Indexes for table `yeild_info`
--
ALTER TABLE `yeild_info`
  ADD PRIMARY KEY (`acres_harvested`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
