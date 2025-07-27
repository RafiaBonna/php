-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2025 at 08:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salary_table`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `call_users` (IN `username` VARCHAR(30), IN `email` VARCHAR(30), IN `salary` DECIMAL(10,2) UNSIGNED)   BEGIN
INSERT INTO employee_details(username,email,salary) VALUES(username,email,salary);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `salary` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`id`, `username`, `email`, `salary`) VALUES
(1, 'Jhorna', 'jhorna@gmail.com', 90000.00),
(2, 'Tamanna', 'tamanna@gmail.com', 60000.00),
(3, 'Ananna', 'ananna@gmail.com', 70000.00),
(5, 'sharmin', 'sharmin@gmail.com', 100000.00),
(6, 'Sara', 's@gmail.com', 80000.00),
(7, 'Nipa', 'nipa@gmail.com', 88000.00),
(8, 'Azmira', 'mira@gmail.com', 90000.00),
(9, 'Bonita', 'nita@gmail.com', 95000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
