-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2019 at 05:29 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `3424sds_users`
--

CREATE TABLE `3424sds_users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role` enum('DOCTOR','PATIENT','ADMIN','') NOT NULL,
  `address` text NOT NULL,
  `registration_date` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3424sds_users`
--

INSERT INTO `3424sds_users` (`id`, `name`, `username`, `email`, `password`, `phone`, `role`, `address`, `registration_date`, `created_at`, `updated_at`) VALUES
(3, 'wrwrw', 'vipin', 'vipin@gmail.com', '$2y$10$VU5qUmRw0feuiYNYLOVWDew2q61KAe4oe6TXgjBW6QKJA3hcTgENm', '', 'DOCTOR', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Gurpreet Singh', 'gurpreet2501', 'gurpreet2501@gmail.com', '$2y$10$G0jlo5TCFQBSvhxbwxSvherL94RvqMxh0BQiutdaPqVzht4IGd8gm', '', 'PATIENT', '', '2019-06-04 14:26:01', '2019-06-04 14:26:01', '0000-00-00 00:00:00'),
(6, 'TEst', 'test', 'tets@gmail.com', '$2y$10$PFu1HaQPC0g4ARMftkOUheob6J7aXSmrPAT73YMlQyUuAq7gScVNC', '', 'PATIENT', '', '2019-06-05 04:00:47', '2019-06-05 04:00:47', '0000-00-00 00:00:00'),
(7, 'sunil', 'sunil', 'sunil@gmail.com', '$2y$10$eMURrp8.TbISHJB5FFvvx.spVpHzq/oZN3RSZoPh7/k0Cwxh8fcke', '', 'DOCTOR', '', '2019-06-06 04:42:13', '2019-06-06 04:42:13', '0000-00-00 00:00:00'),
(8, 'Vipin Kumar', 'vipin', 'vipin@gmail.com', '$2y$10$eMURrp8.TbISHJB5FFvvx.spVpHzq/oZN3RSZoPh7/k0Cwxh8fcke', '', 'DOCTOR', '', '2019-06-04 14:26:01', '2019-06-04 14:26:01', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `3424sds_users`
--
ALTER TABLE `3424sds_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `3424sds_users`
--
ALTER TABLE `3424sds_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
