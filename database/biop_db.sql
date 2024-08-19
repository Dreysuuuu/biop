-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2024 at 11:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `biop_events`
--

CREATE TABLE `biop_events` (
  `EventID` int(11) NOT NULL,
  `EventTitle` varchar(100) NOT NULL,
  `EventDetails` varchar(1000) NOT NULL,
  `EventCover` varchar(100) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `UpdatedBy` int(11) DEFAULT NULL,
  `UpdatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biop_events`
--

INSERT INTO `biop_events` (`EventID`, `EventTitle`, `EventDetails`, `EventCover`, `Active`, `CreatedBy`, `CreatedAt`, `UpdatedBy`, `UpdatedAt`) VALUES
(1, 'Search for Mr. and Ms. San Bartolome!', 'Are you between 18 to 24 years old and a resident of Barangay San Bartolome, Sto. Tomas, Batangas? Step into the spotlight and showcase your charisma!', '01-event-01.png', 1, 1, '2024-08-17 12:04:50', NULL, NULL),
(2, 'Inter-Barangay Basketball Tournament', 'Get ready for an exciting day of basketball! Join us for the matches!', '02-event-02.png', 1, 1, '2024-08-17 12:08:54', NULL, NULL),
(3, 'Barangay San Bartolome Blood Donation', 'Donors must be healthy and in good condition. Your donation will help patients at Sto. Tomas General Hospital.', '03-event-03.png', 1, 1, '2024-08-17 12:08:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biop_requests`
--

CREATE TABLE `biop_requests` (
  `RequestID` int(11) NOT NULL,
  `RequestType` varchar(50) NOT NULL,
  `RequestStatus` varchar(50) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `UpdatedBy` int(11) DEFAULT NULL,
  `UpdatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `biop_requests_payments`
--

CREATE TABLE `biop_requests_payments` (
  `PaymentID` int(11) NOT NULL,
  `RequestID` int(11) NOT NULL,
  `PaymentMethod` varchar(50) NOT NULL,
  `DocumentFee` decimal(18,2) NOT NULL,
  `ProcessingFee` decimal(18,2) NOT NULL,
  `ServiceCharge` decimal(18,2) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `UpdatedBy` int(11) DEFAULT NULL,
  `UpdatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `biop_settings`
--

CREATE TABLE `biop_settings` (
  `SettingsID` int(11) NOT NULL,
  `Attribute` varchar(50) NOT NULL,
  `Value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `biop_users`
--

CREATE TABLE `biop_users` (
  `UserID` int(11) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `UpdatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biop_users`
--

INSERT INTO `biop_users` (`UserID`, `Role`, `FullName`, `EmailAddress`, `Password`, `Active`, `CreatedAt`, `UpdatedAt`) VALUES
(1, 'Administrator', 'Andrei Rafael Andal', 'admin@email.com', 'NCs0djA3RVlXVkVQc1lZVDNqRi9XUT09', 1, '2024-08-18 14:34:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biop_events`
--
ALTER TABLE `biop_events`
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `biop_requests`
--
ALTER TABLE `biop_requests`
  ADD PRIMARY KEY (`RequestID`);

--
-- Indexes for table `biop_requests_payments`
--
ALTER TABLE `biop_requests_payments`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `biop_settings`
--
ALTER TABLE `biop_settings`
  ADD PRIMARY KEY (`SettingsID`);

--
-- Indexes for table `biop_users`
--
ALTER TABLE `biop_users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biop_events`
--
ALTER TABLE `biop_events`
  MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `biop_requests`
--
ALTER TABLE `biop_requests`
  MODIFY `RequestID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biop_requests_payments`
--
ALTER TABLE `biop_requests_payments`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biop_settings`
--
ALTER TABLE `biop_settings`
  MODIFY `SettingsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biop_users`
--
ALTER TABLE `biop_users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
