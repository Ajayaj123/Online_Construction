-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 09:58 AM
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
-- Database: `daba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `conreg`
--

CREATE TABLE `conreg` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` bigint(100) NOT NULL,
  `buildings` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `complete` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conreg`
--

INSERT INTO `conreg` (`id`, `name`, `contact`, `email`, `password`, `buildings`, `experience`, `complete`, `status`) VALUES
(13, 'Ravi', 9025416083, '1@gmail.com', 11111, '1', '1', '1', 'Approved'),
(14, 'Raja', 1, 'r@gamil.com', 1, '1', '1', '1', ''),
(15, 'Alex', 1, '1@gmail.com', 1, '1', '1', '1', ''),
(16, 'Redmi', 1, '1@gmail.com', 1, '1', '1', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `ownreg`
--

CREATE TABLE `ownreg` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` bigint(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ownreg`
--

INSERT INTO `ownreg` (`id`, `name`, `contact`, `email`, `password`, `area`, `work`, `details`, `status`) VALUES
(1, 'ben', 1, '1@gmail.com', 1, '1', '1', '1', 'Approved'),
(2, 'qwen', 1, '1@gmail.com', 1, '1', '1', '1', 'Rejected'),
(3, 'prasanna', 1, '1@gmail.com', 1, '1', '1', '1', 'Rejected'),
(4, 'Aravind', 1, '1@gmail.com', 1, '1', '1', '1', 'Approved'),
(5, 'vicky', 1, '1@gmail.com', 1, '1', '1', '1', 'Rejected'),
(6, 'Realme', 1, '1@gmail.com', 1, '1', '1', '1', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req`, `name`, `password`) VALUES
('hi', '', 0),
('hi', '', 0),
('hi', '', 0),
('hi', '', 0),
('hi', '', 0),
('hi', '', 0),
('hi', '', 0),
('hi', '', 0),
('hi', '', 0),
('hi', '', 0),
('hi', '', 0),
('hi', 'Raviprasath', 11111),
('hi', 'Raviprasath', 11111),
('hi', 'Raviprasath', 11111);

-- --------------------------------------------------------

--
-- Table structure for table `supmsg`
--

CREATE TABLE `supmsg` (
  `name` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `sender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supmsg`
--

INSERT INTO `supmsg` (`name`, `message`, `sender`) VALUES
('', 'neega Enga Porika', 'owner'),
('', 'aani pudukga', 'supllier'),
('', 'aaniye puduggavenna!!!', 'contractor');

-- --------------------------------------------------------

--
-- Table structure for table `supreg`
--

CREATE TABLE `supreg` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` bigint(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `who` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supreg`
--

INSERT INTO `supreg` (`id`, `name`, `contact`, `email`, `password`, `product`, `cost`, `discount`, `who`) VALUES
(7, 'Raviprasath', 9025416083, 'raviprasath@gmail.com', 11111, 'Mixer', '1000', '5%', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conreg`
--
ALTER TABLE `conreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ownreg`
--
ALTER TABLE `ownreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supreg`
--
ALTER TABLE `supreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conreg`
--
ALTER TABLE `conreg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ownreg`
--
ALTER TABLE `ownreg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supreg`
--
ALTER TABLE `supreg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
