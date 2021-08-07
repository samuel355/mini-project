-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 11:14 PM
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
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description_` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start_` datetime NOT NULL,
  `end_` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `email`, `title`, `description_`, `color`, `start_`, `end_`) VALUES
(1, '', 'Dustbin is full', 'My dustbin is full please', '#0071c5', '2021-08-05 00:00:00', '2021-08-06 00:00:00'),
(2, '', 'Hello there', 'sweetheart', '#0071c5', '2021-08-06 00:00:00', '2021-08-07 00:00:00'),
(3, 'addsamuel355@gmail.com', 'Dustbin Full', 'please come and take your bin', '#40E0D0', '2021-08-05 00:00:00', '2021-08-06 00:00:00'),
(5, 'addsamuel355@gmail.com', 'WMS', 'We love the way you work', '#008000', '2021-08-06 00:00:00', '2021-08-07 00:00:00'),
(6, 'addsamuel355@gmail.com', 'New update', 'add and send message', '#0071c5', '2021-08-04 00:00:00', '2021-08-05 00:00:00'),
(7, 'addsamuel355@gmail.com', 'hmph emeil', 'mabr3', '#0071c5', '2021-08-12 00:00:00', '2021-08-13 00:00:00'),
(10, 'addsamuel355@gmail.com', 'Another one', 'here we go again', '#0071c5', '2021-08-11 00:00:00', '2021-08-12 00:00:00'),
(12, 'asamuel355@yahoo.com', 'Hey ', 'come and pick the hell out', '#FFD700', '2021-08-13 00:00:00', '2021-08-14 00:00:00'),
(13, 'asamuel355@yahoo.com', 'Im gettting error', 'Lets solve', '#0071c5', '2021-08-06 00:00:00', '2021-08-07 00:00:00'),
(17, 'asamuel355@yahoo.com', 'Bin full', 'Bin ready to be removed', '#008000', '2021-08-19 00:00:00', '2021-08-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `subject_` varchar(256) NOT NULL,
  `message_` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `firstname`, `email`, `phone`, `subject_`, `message_`) VALUES
(6, 'AduEmmanuel', 'asamuel355@yahoo.com', '', 'New Event', 'Customer added new event to calender'),
(7, 'Williams', 'wills@gmail.com', '087879383', 'nice idea', 'Very good to explore here');

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
  `user_image` varchar(256) NOT NULL,
  `registered_on` varchar(256) NOT NULL,
  `activation_code` varchar(256) NOT NULL,
  `isVerified` varchar(256) NOT NULL DEFAULT '0',
  `isAdmin` varchar(256) NOT NULL DEFAULT '0',
  `reset_code` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `user_password`, `email`, `user_address`, `phone`, `user_image`, `registered_on`, `activation_code`, `isVerified`, `isAdmin`, `reset_code`) VALUES
(13, 'Samuel Osei', 'Adu', '$2y$10$LQ1w.eDrNeOrJ3BZ61.wHOGvFWgGo1oWzWFV2zGs4z2KRkRDMOrqO', 'addsamuel355@gmail.com', 'Kumasi-Ghana', '0246562377', ' ', '2021-07-29 At 04:15 PM', 'S21631', '1', '1', ''),
(14, 'Adu', 'Emmanuel', '$2y$10$8wvWKnHW36SNsFCzORIemeXYSRd/8acNSiJyELtdFIRLr8mcIJoCy', 'asamuel355@yahoo.com', 'Independence Hall, Indece Road, KNUST, Kumasi, Ghana', '055398983', '', '2021-08-06 At 09:58 PM', 'A217390', '1', '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
