-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 05:55 PM
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
-- Database: `designers`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookedappointment`
--

CREATE TABLE `bookedappointment` (
  `appointmentID` int(11) NOT NULL,
  `appointmenttype` text NOT NULL,
  `appointmentdate` date NOT NULL,
  `appointmenttime` time NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `DPID` int(11) DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookedappointment`
--

INSERT INTO `bookedappointment` (`appointmentID`, `appointmenttype`, `appointmentdate`, `appointmenttime`, `UserID`, `DPID`, `status`) VALUES
(3, 'video', '2024-01-27', '12:05:00', 47, 5, 'Approved'),
(4, 'inPerson', '2024-01-17', '08:44:00', 48, 6, 'Pending'),
(5, 'video', '2024-01-19', '21:30:00', 49, 5, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CID` int(11) NOT NULL,
  `CName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CID`, `CName`) VALUES
(1, 'Living Room'),
(2, 'Kitchen'),
(3, 'Bedroom'),
(4, 'Bathroom'),
(5, 'Office'),
(18, 'wall decoration'),
(23, 'Color Arrangement');

-- --------------------------------------------------------

--
-- Table structure for table `designerprofile`
--

CREATE TABLE `designerprofile` (
  `DPID` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `DOB` date NOT NULL,
  `CName` text NOT NULL,
  `Description` text NOT NULL,
  `Dimage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designerprofile`
--

INSERT INTO `designerprofile` (`DPID`, `FirstName`, `LastName`, `DOB`, `CName`, `Description`, `Dimage`) VALUES
(5, 'Lucide', 'Pascale', '2000-01-15', 'Living Room', 'I am very passionate in interior designing, I aim to make designs which are comfortable for my clien', NULL),
(6, 'ALINE', 'Keza', '1998-06-30', 'Officeroom', 'Passionate about creating beautiful and functional living spaces. Specializing in room designs that ', NULL),
(8, 'JANET', 'Umuhoza', '2000-01-15', 'Living Room', 'Experienced in transforming rooms into cozy and inviting retreats Experienced in transforming rooms into cozy and inviting retreats Lets work together to make your dream room a reality.', NULL),
(9, 'JAMES', 'Taylor', '1993-12-11', 'Living Room', 'Bringing illumination and ambiance to your spaces Specializing in innovative lighting solutions for a modern touch', NULL),
(10, 'Pacifique', 'Abeza', '2008-12-25', 'Color Arrangement', 'hbhbhjsfbejkwbfkj', NULL),
(11, 'wsw', 'wsw', '2024-01-13', 'Bedroom', 'de', 'uploads/65a93e0e9ca5digisubizo.png'),
(12, 'Pacifique', 'Cyuzuzo', '2000-10-16', 'Living Room', 'Your Imagination can come to reality It is just only an appointment ', 'uploads/65abc30f08be5Tropico Photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Role` varchar(40) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `Role`, `Date`, `email`) VALUES
(47, 'Enthusiast', 'abana', 'generalUser', '2024-01-18 11:30:27', 'Karera12@gmail.com'),
(48, 'Admin1', 'Tryme', 'Admin', '2024-01-18 14:36:14', 'lucpas15nov@gmail.com'),
(49, 'OnlyDesigner1', '123', 'interiorDesigner', '2024-01-18 14:43:08', 'alinekeza23@gmail.com'),
(50, 'Pacifique12', 'ukwezi', 'interiorDesigner', '2024-01-20 12:52:08', 'pacifique12@gmail.com'),
(51, 'Abeza Nera', '123', 'interiorDesigner', '2024-01-21 05:56:07', 'abeza@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookedappointment`
--
ALTER TABLE `bookedappointment`
  ADD PRIMARY KEY (`appointmentID`),
  ADD KEY `fk_bookedappointment_users` (`UserID`),
  ADD KEY `fk_bookedappointment_designerprofile` (`DPID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `designerprofile`
--
ALTER TABLE `designerprofile`
  ADD PRIMARY KEY (`DPID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookedappointment`
--
ALTER TABLE `bookedappointment`
  MODIFY `appointmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `designerprofile`
--
ALTER TABLE `designerprofile`
  MODIFY `DPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookedappointment`
--
ALTER TABLE `bookedappointment`
  ADD CONSTRAINT `fk_bookedappointment_designerprofile` FOREIGN KEY (`DPID`) REFERENCES `designerprofile` (`DPID`),
  ADD CONSTRAINT `fk_bookedappointment_users` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
