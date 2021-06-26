-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 25, 2021 at 11:31 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project5`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`id`, `user`, `password`) VALUES
(1, 'ransher', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `father` varchar(40) NOT NULL,
  `mother` varchar(40) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `hq` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `fadd` varchar(255) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `uni` varchar(255) NOT NULL,
  `uniadd` varchar(255) NOT NULL,
  `maxmark` int(10) NOT NULL,
  `minmark` int(10) NOT NULL,
  `resfile` varchar(255) NOT NULL,
  `imgfile` varchar(255) NOT NULL,
  `sigfile` varchar(255) NOT NULL,
  `registerdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `fname`, `lname`, `email`, `gender`, `father`, `mother`, `dob`, `hq`, `course`, `college`, `fadd`, `state`, `zip`, `country`, `uni`, `uniadd`, `maxmark`, `minmark`, `resfile`, `imgfile`, `sigfile`, `registerdate`) VALUES
(15, 'ransher', 'ransher', 'ransherverma@gmail.com', 'male', 'ramchandra', 'manju', '1999-06-11', 'Graduate', 'Engineering', 'National Institute of Technology Silchar', 'BHU', 'Varanasi', '56241', 'INDIA', 'DU Delhi', 'India', 600, 550, 'images/uploadres/RESUME_RANSHER.pdf', 'images/uploadimg/myprofileimage.jpeg', 'images/uploadsig/Sssiigg2.jpg', '2021-06-25 06:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `registerr`
--

CREATE TABLE `registerr` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `course` varchar(30) NOT NULL,
  `college` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `token` varchar(255) NOT NULL,
  `statuss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerr`
--

INSERT INTO `registerr` (`id`, `name`, `email`, `phone`, `course`, `college`, `password`, `cpassword`, `date`, `token`, `statuss`) VALUES
(25, 'ransher', 'ransherverma@gmail.com', 687355337, 'Science', 'National Institute of Technology Silchar', '123', '123', '2021-06-25 06:20:22', '2dcf27d6335568ca61f0dff864563f', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerr`
--
ALTER TABLE `registerr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registerr`
--
ALTER TABLE `registerr`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
