-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 03:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `user_address` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `registered_on` varchar(256) NOT NULL,
  `activation_code` varchar(256) NOT NULL,
  `isVerified` varchar(256) NOT NULL DEFAULT '0',
  `idAdmin` varchar(256) NOT NULL DEFAULT '0',
  `reset_code` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `user_password`, `email`, `user_address`, `phone`, `image`, `registered_on`, `activation_code`, `isVerified`, `idAdmin`, `reset_code`) VALUES
(13, 'Samuel Osei', 'Adu', '$2y$10$LQ1w.eDrNeOrJ3BZ61.wHOGvFWgGo1oWzWFV2zGs4z2KRkRDMOrqO', 'addsamuel355@gmail.com', 'Kumasi', '', '', '2021-07-29 At 04:15 PM', 'S21631', '1', '0', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
