-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 03:10 PM
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
-- Database: `core_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `3424sds_appointments`
--

CREATE TABLE `3424sds_appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `time_slot_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3424sds_appointments`
--

INSERT INTO `3424sds_appointments` (`id`, `patient_id`, `doctor_id`, `time_slot_id`, `appointment_date`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 7, 12, 1, '2019-06-26', 0, '2019-06-26 14:43:07', '0000-00-00 00:00:00'),
(2, 7, 10, 1, '2019-06-26', 0, '2019-06-26 14:43:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `3424sds_doctor_specialisations`
--

CREATE TABLE `3424sds_doctor_specialisations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3424sds_doctor_specialisations`
--

INSERT INTO `3424sds_doctor_specialisations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ENT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'CARDIOLOGIST', '2019-06-18 00:00:00', '2019-06-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `3424sds_time_slots`
--

CREATE TABLE `3424sds_time_slots` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3424sds_time_slots`
--

INSERT INTO `3424sds_time_slots` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '9:00 Am to 9:30 Am', '2019-06-18 00:00:00', '2019-06-18 00:00:00'),
(2, '9:30 Am to 10:00 Am', '2019-06-18 00:00:00', '2019-06-18 00:00:00');

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
  `specialisation_id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3424sds_users`
--

INSERT INTO `3424sds_users` (`id`, `name`, `username`, `email`, `password`, `phone`, `role`, `address`, `registration_date`, `specialisation_id`, `created_at`, `updated_at`) VALUES
(3, 'Test', 'vipin', 'admin@gmail.com', '$2y$10$eMURrp8.TbISHJB5FFvvx.spVpHzq/oZN3RSZoPh7/k0Cwxh8fcke', '', 'ADMIN', '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Gurpreet Singh', 'gurpreet2501', 'gurpreet2501@gmail.com', '$2y$10$eMURrp8.TbISHJB5FFvvx.spVpHzq/oZN3RSZoPh7/k0Cwxh8fcke', '', 'PATIENT', '', '2019-06-04 14:26:01', 1, '2019-06-04 14:26:01', '0000-00-00 00:00:00'),
(6, 'TEst', 'test', 'test@gmail.com', '$2y$10$eMURrp8.TbISHJB5FFvvx.spVpHzq/oZN3RSZoPh7/k0Cwxh8fcke', '', 'PATIENT', '', '2019-06-05 04:00:47', 1, '2019-06-05 04:00:47', '0000-00-00 00:00:00'),
(7, 'sunil', 'sunil', 'patient@gmail.com', '$2y$10$eMURrp8.TbISHJB5FFvvx.spVpHzq/oZN3RSZoPh7/k0Cwxh8fcke', '', 'PATIENT', '', '2019-06-06 04:42:13', 1, '2019-06-06 04:42:13', '0000-00-00 00:00:00'),
(10, 'test', 'testjnj', 'doctor@gmail.com', '$2y$10$cHUsu/.3lhbPODkfi3iSeeeIjp9XR7m7OoTrQPEd38c/HE7sGIc1m', '854389', 'DOCTOR', '', '2019-06-12 04:26:54', 1, '2019-06-12 04:26:54', '0000-00-00 00:00:00'),
(11, 'Anil', 'anil', 'anil@gmail.com', '$2y$10$dOLCz7qCBhsEQQO2FZS7SeRqTsUrI4TbF3OEDloZbW66sHmEt3hB6', '', 'PATIENT', '', '2019-06-17 09:37:53', 1, '2019-06-17 09:37:53', '0000-00-00 00:00:00'),
(12, 'Vipin', 'testing123', 'testing123@gmail.com', '$2y$10$/Hcz9cClCMy.q/2Hxe2U3O3kShRCtRKrUfUEMmyMp7wLnrEc.6MHy', '5654654', 'DOCTOR', '', '2019-06-18 14:20:16', 2, '2019-06-18 14:20:16', '0000-00-00 00:00:00'),
(13, 'ASDFSDGFDS', 'KFHSJKFH', 'patient1@gmail.com', '$2y$10$eMURrp8.TbISHJB5FFvvx.spVpHzq/oZN3RSZoPh7/k0Cwxh8fcke', '', 'PATIENT', '', '2019-06-18 14:37:58', 1, '2019-06-18 14:37:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `patient_booking`
--

CREATE TABLE `patient_booking` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phoneno` text NOT NULL,
  `date` datetime NOT NULL,
  `registration_date` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_booking`
--

INSERT INTO `patient_booking` (`id`, `name`, `email`, `phoneno`, `date`, `registration_date`, `created_at`) VALUES
(2, 'admin admin', 'admin@techvill.net', '9999998888', '2019-06-18 00:00:00', '2019-06-18 14:12:46', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `3424sds_appointments`
--
ALTER TABLE `3424sds_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3424sds_doctor_specialisations`
--
ALTER TABLE `3424sds_doctor_specialisations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3424sds_time_slots`
--
ALTER TABLE `3424sds_time_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3424sds_users`
--
ALTER TABLE `3424sds_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_booking`
--
ALTER TABLE `patient_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `3424sds_appointments`
--
ALTER TABLE `3424sds_appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `3424sds_doctor_specialisations`
--
ALTER TABLE `3424sds_doctor_specialisations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `3424sds_time_slots`
--
ALTER TABLE `3424sds_time_slots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `3424sds_users`
--
ALTER TABLE `3424sds_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patient_booking`
--
ALTER TABLE `patient_booking`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
