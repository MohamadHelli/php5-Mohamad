-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 11:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--
CREATE DATABASE IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `restaurant`;

-- --------------------------------------------------------

--
-- Table structure for table `proudct`
--

CREATE TABLE `proudct` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `dis` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proudct`
--

INSERT INTO `proudct` (`id`, `price`, `pic`, `dis`, `name`) VALUES
(1, 7, 'pic1.jpg', 'It is a very delicious pizza', 'Pizza Mona'),
(2, 8, 'pic2.jpg', 'ANother delious pizza', 'Pizza Mohamad'),
(3, 9, 'pic3.jpg', 'it is just a pizza', 'pizza php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proudct`
--
ALTER TABLE `proudct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proudct`
--
ALTER TABLE `proudct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
