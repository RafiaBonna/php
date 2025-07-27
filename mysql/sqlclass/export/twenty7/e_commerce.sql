-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2025 at 08:44 AM
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
-- Database: `e_commerce`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `call_purchase_details` (IN `name` VARCHAR(100), IN `mail` VARCHAR(100), IN `cont` INT(50))   BEGIN
INSERT INTO purchase_details (username,email,contact) VALUES (name,mail,cont);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `username`, `email`, `contact`) VALUES
(2, 'Bristy', 'khaleda@gmail.com', 1987543266),
(3, 'Sheuly', 'sheuly@gmail.com', 1787543266);

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `id` int(11) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `prices` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
