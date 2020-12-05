-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 06:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwtproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `typeid` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `tb1image` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `owner`, `typeid`, `phone`, `des`, `location`, `tb1image`) VALUES
(5, 'j', 'oo', '9341827025', '', '..', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookfound`
--

CREATE TABLE `bookfound` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `typeid` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `des` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `tb2image` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ele`
--

CREATE TABLE `ele` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `typeid` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `des` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `tb3image` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `elefound`
--

CREATE TABLE `elefound` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `typeid` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `des` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `tb4image` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `idcard`
--

CREATE TABLE `idcard` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `typeid` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `des` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `tb5image` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `idcardfound`
--

CREATE TABLE `idcardfound` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `typeid` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `des` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `tb6image` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perfound`
--

CREATE TABLE `perfound` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `typeid` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `tb7image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perfound`
--

INSERT INTO `perfound` (`id`, `owner`, `typeid`, `phone`, `des`, `location`, `tb7image`) VALUES
(2, 'vfg', 'eff', '8073730133', 'df', '.dfgf.', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `typeid` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `des` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `tb8image` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `owner`, `typeid`, `phone`, `des`, `location`, `tb8image`) VALUES
(3, 'i', 'hkn', '9341827025', 'yghhi', '.guhi.', ''),
(4, 'dffg', 'dff', '8073730133', 'dfrfg', '.dff.', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'dhathwar91', 'dhathwar91@gmail.com', '98673a3b728872effe144279b1a0153f'),
(7, 'rg', 'dha@gmail.com', '0ecb2b966eca6994910caee2947f6679'),
(9, 'shreyasrinivas24@gmail.com', 'shreyasrinivas24@gmail.com', '9124d5c6ffec56320ead4cf474e15f82');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phone` (`phone`) USING BTREE;

--
-- Indexes for table `bookfound`
--
ALTER TABLE `bookfound`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `ele`
--
ALTER TABLE `ele`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `elefound`
--
ALTER TABLE `elefound`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `idcard`
--
ALTER TABLE `idcard`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `idcardfound`
--
ALTER TABLE `idcardfound`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `perfound`
--
ALTER TABLE `perfound`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookfound`
--
ALTER TABLE `bookfound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ele`
--
ALTER TABLE `ele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `elefound`
--
ALTER TABLE `elefound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `idcard`
--
ALTER TABLE `idcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `idcardfound`
--
ALTER TABLE `idcardfound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perfound`
--
ALTER TABLE `perfound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
