-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 04:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gebeya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admingebeyauser`
--

CREATE TABLE `admingebeyauser` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birr` int(11) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admingebeyauser`
--

INSERT INTO `admingebeyauser` (`id`, `user_name`, `password`, `name`, `birr`, `user_type`) VALUES
(1, 'melak', '123', '', 990, NULL),
(2, 'meri', '123', '', 1000, NULL),
(3, 'sda', '202cb962ac59075b964b07152d234b70', 'sda', 1000, NULL),
(4, 'mela', '202cb962ac59075b964b07152d234b70', 'mela', 510, 'Admin'),
(5, 'dsfc', '202cb962ac59075b964b07152d234b70', 'dsf', 1000, NULL),
(6, 'sd', '202cb962ac59075b964b07152d234b70', 'sda', 1000, NULL),
(9, 'me', '202cb962ac59075b964b07152d234b70', 'me', 230, NULL),
(10, 'gebeya', '123', 'gebeya', 100000000, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `gebeyauser`
--

CREATE TABLE `gebeyauser` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birr` int(11) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gebeyauser`
--

INSERT INTO `gebeyauser` (`id`, `user_name`, `password`, `name`, `birr`, `user_type`) VALUES
(1, 'melak', '123', '', 990, NULL),
(2, 'meri', '123', '', 1000, NULL),
(3, 'sda', '202cb962ac59075b964b07152d234b70', 'sda', 1000, NULL),
(4, 'mela', '202cb962ac59075b964b07152d234b70', 'mela', 420, 'Admin'),
(5, 'dsfc', '202cb962ac59075b964b07152d234b70', 'dsf', 1000, NULL),
(6, 'sd', '202cb962ac59075b964b07152d234b70', 'sda', 1000, NULL),
(9, 'me', '202cb962ac59075b964b07152d234b70', 'me', 230, NULL),
(10, 'gebeya', '123', 'gebeya', 100000000, 'Admin'),
(11, 'jhon', '202cb962ac59075b964b07152d234b70', 'jhon', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suk`
--

CREATE TABLE `suk` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suk`
--

INSERT INTO `suk` (`id`, `name`, `description`, `type`, `image`, `amount`) VALUES
(1, 'seat', 'dasfacdsvc', 'clock', 'm.png', 10),
(2, 'seat 2', 'This is one of rollex brand new hand watch with new updates.', 'clock', 'w1.jpg', 10),
(4, 'aaa', 'aaaa', 'cloth', 'm.png', 10),
(6, 'qqq', 'qqqqq', 'qqqq', 'm.png', 10),
(9, 'k', 'k', 'k', 'k.png', 99);

-- --------------------------------------------------------

--
-- Table structure for table `suklist`
--

CREATE TABLE `suklist` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birr` int(11) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suklist`
--

INSERT INTO `suklist` (`id`, `user_name`, `password`, `name`, `birr`, `user_type`) VALUES
(1, 'melak', '123', '', 990, NULL),
(2, 'meri', '123', '', 1000, NULL),
(3, 'sda', '202cb962ac59075b964b07152d234b70', 'sda', 1000, NULL),
(4, 'mela', '202cb962ac59075b964b07152d234b70', 'mela', -510, 'Admin'),
(5, 'dsfc', '202cb962ac59075b964b07152d234b70', 'dsf', 1000, NULL),
(6, 'sd', '202cb962ac59075b964b07152d234b70', 'sda', 1000, NULL),
(9, 'me', '202cb962ac59075b964b07152d234b70', 'me', -230, NULL),
(10, 'gebeya', '123', 'gebeya', 100000000, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admingebeyauser`
--
ALTER TABLE `admingebeyauser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gebeyauser`
--
ALTER TABLE `gebeyauser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suk`
--
ALTER TABLE `suk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suklist`
--
ALTER TABLE `suklist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admingebeyauser`
--
ALTER TABLE `admingebeyauser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gebeyauser`
--
ALTER TABLE `gebeyauser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `suk`
--
ALTER TABLE `suk`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `suklist`
--
ALTER TABLE `suklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
