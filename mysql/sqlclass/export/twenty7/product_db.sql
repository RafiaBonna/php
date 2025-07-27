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
-- Database: `product_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `call_categories` (IN `cname` VARCHAR(100), IN `ucontact` INT(100))   BEGIN
INSERT INTO categories (name,contact) VALUES (cname,ucontact);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `call_products` (IN `prname` VARCHAR(100), IN `pprice` INT(100))   BEGIN
INSERT INTO products (pname,price) VALUES(prname,pprice);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `contact`) VALUES
(1, 'Rahim', 9988776),
(2, 'Rahim', 9988776),
(3, 'Rahim', 9988776),
(4, 'Rahim', 9988776);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `price`) VALUES
(1, 'keyboard', 5000);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_products`
-- (See below for the actual view)
--
CREATE TABLE `view_products` (
`id` int(11)
,`pname` varchar(100)
,`price` int(100)
);

-- --------------------------------------------------------

--
-- Structure for view `view_products`
--
DROP TABLE IF EXISTS `view_products`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_products`  AS SELECT `products`.`id` AS `id`, `products`.`pname` AS `pname`, `products`.`price` AS `price` FROM `products` WHERE `products`.`price` > 4000 ORDER BY `products`.`pname` ASC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
