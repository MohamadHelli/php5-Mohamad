-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 03:31 PM
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
  `name` varchar(50) NOT NULL,
  `status` enum('user','adm') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proudct`
--

INSERT INTO `proudct` (`id`, `price`, `pic`, `dis`, `name`, `status`) VALUES
(1, 13, 'pic1.jpg', 'It is a very delicious pizza ok', 'Pizza Mona', 'user'),
(3, 9, 'pic3.jpg', 'it is just a pizza', 'pizza php', 'user'),
(4, 50, '62d004cf15e7e.jpg', 'high quality Pizaa $$$$', 'Pizza M&M', 'user'),
(5, 14, 'pic4.jpg', 'mona', 'mona', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `pass` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `status` enum('user','adm') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `date_of_birth`, `pass`, `picture`, `status`) VALUES
(1, 'mohamad', 'helli', 'mohamad@gmail.com', '2013-06-27', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '62d55fa9596b7.jpg', 'user'),
(2, 'mohamadd', 'hellii', 'mo@gmail.com', '2014-02-13', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'admavatar.png', 'adm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proudct`
--
ALTER TABLE `proudct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proudct`
--
ALTER TABLE `proudct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
