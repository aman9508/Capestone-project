-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 08:01 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `role`) VALUES
(1, 'ab', 'ab12', '123456', 'user'),
(2, 'ab12', '123456', 'av', 'user'),
(3, 'abcd', '123456', 'av', 'user'),
(4, '1234', '123456', 'av', 'user'),
(5, 'wow1', 'password_hash(123456, PASSWORD_DEFAULT)', 'wow', 'user'),
(6, 'afga', '$2y$10$yCCxUoRYE90GMadYYIJcW.jI9TwInYCnmtc0SEThjrAuce3sJF2I2', 'adfad', 'user'),
(7, 'rupinder@gmail.com', '$2y$10$EhQQbcJL0fvZ2U9fI3uuwuUtm.OjtsrKru4z.lgZ9hFKjmOA9wHNW', 'Rupinder', 'user'),
(8, 'admin', '$2y$10$CL8bi92XXiW1Oce6KmqTduUY16vVJsxEUqihdJftPeHeH5DVFgRMe', 'admin', 'admin'),
(9, 'ab@gmail.com', '$2y$10$CL8bi92XXiW1Oce6KmqTduUY16vVJsxEUqihdJftPeHeH5DVFgRMe', 'ab', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `vacationpack`
--

CREATE TABLE IF NOT EXISTS `vacationpack` (
  `pk_id` int(11) NOT NULL,
  `pk_image` varchar(255) NOT NULL,
  `pk_destination` text NOT NULL,
  `pk_region` text NOT NULL,
  `pk_description` varchar(255) NOT NULL,
  `pk_price` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacationpack`
--

INSERT INTO `vacationpack` (`pk_id`, `pk_image`, `pk_destination`, `pk_region`, `pk_description`, `pk_price`) VALUES
(1, '', 'Agra', 'India', '', 1200),
(2, '', 'Tamil', 'India', '', 1234),
(3, '$wow', 'wow', '$wow', '$wow', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`username`);

--
-- Indexes for table `vacationpack`
--
ALTER TABLE `vacationpack`
  ADD PRIMARY KEY (`pk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `vacationpack`
--
ALTER TABLE `vacationpack`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
