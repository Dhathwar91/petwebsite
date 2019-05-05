-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 03:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rating`
--

-- --------------------------------------------------------

--
-- Table structure for table `greentheory`
--

CREATE TABLE `greentheory` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rasta`
--

CREATE TABLE `rasta` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sunnys`
--

CREATE TABLE `sunnys` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sunnys`
--

INSERT INTO `sunnys` (`id`, `name`, `comment`) VALUES
(1, ' v', 'cvcv');

-- --------------------------------------------------------

--
-- Table structure for table `tealdoor`
--

CREATE TABLE `tealdoor` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tealdoor`
--

INSERT INTO `tealdoor` (`id`, `name`, `comment`) VALUES
(1, 'zvfbf', 'bvsfbfsgbfsgdvsfvsdf');

-- --------------------------------------------------------

--
-- Table structure for table `therpup`
--

CREATE TABLE `therpup` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `greentheory`
--
ALTER TABLE `greentheory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rasta`
--
ALTER TABLE `rasta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sunnys`
--
ALTER TABLE `sunnys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tealdoor`
--
ALTER TABLE `tealdoor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `therpup`
--
ALTER TABLE `therpup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `greentheory`
--
ALTER TABLE `greentheory`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rasta`
--
ALTER TABLE `rasta`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sunnys`
--
ALTER TABLE `sunnys`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tealdoor`
--
ALTER TABLE `tealdoor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `therpup`
--
ALTER TABLE `therpup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
