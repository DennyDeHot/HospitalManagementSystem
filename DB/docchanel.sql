-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2023 at 12:14 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docchanel`
--
ALTER TABLE `docchanel`
  ADD PRIMARY KEY (`patient_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `docchanel`
--
ALTER TABLE `docchanel`
  MODIFY `patient_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
