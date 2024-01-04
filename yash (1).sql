-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 10:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yash`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `complaint` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `Email`, `contact`, `complaint`, `status`) VALUES
(7, 'Rushikesh', 'rushikeshkushare123@gmail.com', 2147483647, 'Hello Rushikesh', 'Rejected'),
(8, 'Om', 'ompatil123@gmail.com', 2147483647, 'Hello Om', 'Accepted'),
(9, 'Prathamesh', 'prathameshk123@gmail.com', 2147483647, 'Hello Prathamesh', 'Rejected'),
(10, 'Pratik', 'pb123@gmail.com', 2147483647, 'Hello Pratik', 'Accepted'),
(11, 'test', 'testing', 2147483647, 'tesing \r\n', 'Accepted'),
(12, 'harsh', 'rushikeshkushare123@gmail.com', 2147483647, 'test', 'Resolved'),
(13, 'Jay', 'jp123@j.com', 2147483647, 'Hello jay!', 'Resolved'),
(14, 'Ayush', 'yp12@gmai.com', 2147483647, 'esbhfuziglnjurhniuhguerREysiren shbh', 'Resolved'),
(15, 'yash', 'patilyash1914@gmail.com', 2147483647, 'gdkhedbkejq', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `resolver`
--

CREATE TABLE `resolver` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resolver`
--

INSERT INTO `resolver` (`id`, `username`, `pass`) VALUES
(1, 'resolver@admin', 'resolver@123');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_no` double NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `Email`, `name`, `phone_no`, `password`) VALUES
(1, 'rushikeshkushare123@gmail.com', 'harsh', 845416416, '88570906');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resolver`
--
ALTER TABLE `resolver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `resolver`
--
ALTER TABLE `resolver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
