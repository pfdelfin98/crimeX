-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 04:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crimex`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `Id` int(11) NOT NULL,
  `IdNumber` varchar(128) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Username` varchar(128) NOT NULL,
  `Type` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`Id`, `IdNumber`, `Password`, `Username`, `Type`) VALUES
(1, '111-2222-333', 'sample', 'Angela', 'Admin'),
(2, '444-5555-666', 'sample', 'Angelo', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `studentsaccount`
--

CREATE TABLE `studentsaccount` (
  `Id` int(11) NOT NULL,
  `IdNumber` varchar(128) NOT NULL,
  `LastName` varchar(128) NOT NULL,
  `FirstName` varchar(128) NOT NULL,
  `MiddleName` varchar(128) NOT NULL,
  `dob` date NOT NULL,
  `Course` varchar(128) NOT NULL,
  `Year` varchar(11) NOT NULL,
  `Section` varchar(11) NOT NULL,
  `Password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentsaccount`
--

INSERT INTO `studentsaccount` (`Id`, `IdNumber`, `LastName`, `FirstName`, `MiddleName`, `dob`, `Course`, `Year`, `Section`, `Password`) VALUES
(1, '121212', 'Validad', 'Angelo', 'Frias', '2023-02-24', 'BS Criminology', '3', 'A', '$2y$10$/64vpN3ana6q4oKz52CftOz6JY3v7zIiuWQdfwnqNs.SK5AlCA9V.'),
(2, '134322', 'Siason', 'Angela', 'Cayao', '2023-02-24', 'BS Criminology', '3', 'A', '$2y$10$GUVdbxvafOPqbzYZ7GQfTuKSWHK4Z1yWe6mlwE/ooIjEyOpsL4rMO');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `Id` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `message` longtext NOT NULL,
  `img` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`Id`, `dateCreated`, `message`, `img`) VALUES
(34, '2023-02-24 19:28:05', 'dsds', '63f89f454414f3.34263040.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `studentsaccount`
--
ALTER TABLE `studentsaccount`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentsaccount`
--
ALTER TABLE `studentsaccount`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
