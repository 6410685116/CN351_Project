-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb:3306
-- Generation Time: May 28, 2024 at 07:50 AM
-- Server version: 10.11.7-MariaDB-1:10.11.7+maria~ubu2204
-- PHP Version: 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userrole` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `userrole`, `create_at`) VALUES
(1, 'somsak', 'rakthai', 'somsak@gmail.com', '11111', 'admin', '2024-05-24 14:56:14'),
(8, 'AUM', 'AUM', 'aum@aum.com', '123456', 'user', '2024-05-25 17:11:14'),
(9, '<script>alert(document.cookie);</script>', 'yoyo', 'y@y.com', '111111', 'user', '2024-05-25 17:13:32'),
(10, '<script>alert(\"hello\")</script>', 'cha', 'a@a.com', '12345', 'user', '2024-05-26 07:45:26'),
(11, 'ณัฐภัทร', 'โชติเสน', 'team@gmail.com', '55555', 'user', '2024-05-27 08:14:58'),
(12, 'ณัฐภัทร', 'โชติเสน', 'team@gmai.com', '12345', 'user', '2024-05-27 08:18:36'),
(13, '<script>alert(document.cookie)</script>', 'cookie', 'cookie@t.c', '12345', 'user', '2024-05-27 08:21:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
