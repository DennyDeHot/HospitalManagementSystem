-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2023 at 12:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cityhospitals`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `employee ID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`employee ID`, `username`, `password`, `Name`) VALUES
(1, 'KasunP', 'Kasun123!', 'Kasun Rajitha Perera');

-- --------------------------------------------------------

--
-- Table structure for table `docchanel`
--

CREATE TABLE `docchanel` (
  `patient_No` int(11) NOT NULL,
  `NIC` varchar(11) NOT NULL,
  `Patient_Name` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Doctor_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `docchanel`
--

INSERT INTO `docchanel` (`patient_No`, `NIC`, `Patient_Name`, `Age`, `Date`, `Time`, `Doctor_Name`) VALUES
(23, '976612655V', 'gayan darshana', 25, '2023-04-27', '23:47:00', 'Dr Amal Perera'),
(29, '976612655V', 'pam', 25, '2023-04-23', '07:10:00', 'Dr Amal Perera'),
(31, '96447333v', 'sam silva', 30, '2023-04-24', '18:03:00', 'Dr Pushpa');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `employeeID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Expertise` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`employeeID`, `username`, `password`, `Name`, `Expertise`) VALUES
(1, 'Samank', 'Saman123!', 'Dr. Saman Kumara', 'Cardio'),
(10, 'Amal', 'amal1234', 'Dr. Amal Perera', 'Dentist'),
(12, 'RohithaP', 'Rohitha1234', 'Dr. Rohitha Prabashwara', 'Eye Spc'),
(17, 'RohithaD', 'Rohitha123!', 'Dr. Rohitha Dias', 'Ear'),
(25, 'PushpikaJ', 'Pushpi123!', 'Dr. Pushpika Jayawardana', 'Borns'),
(48, 'CharukaS', 'Charuka123!', 'Charuka Silva', 'Brain'),
(54, 'DanuA', 'Danu123!', 'Danu Amila', 'skin'),
(55, 'AdhyaH', 'Adhya123!', 'Dr Adhya Hasindi', 'cardio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`employee ID`);

--
-- Indexes for table `docchanel`
--
ALTER TABLE `docchanel`
  ADD PRIMARY KEY (`patient_No`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`employeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `employee ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `docchanel`
--
ALTER TABLE `docchanel`
  MODIFY `patient_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
