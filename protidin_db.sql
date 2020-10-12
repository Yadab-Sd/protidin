-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 07:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `protidin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`) VALUES
(1, 'IBBL');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Furniture Sell');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `count` int(10) NOT NULL DEFAULT 0,
  `address` varchar(200) DEFAULT NULL,
  `totalSpent` int(10) NOT NULL DEFAULT 0,
  `due` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `fname`, `lname`, `mobile`, `createdAt`, `count`, `address`, `totalSpent`, `due`) VALUES
(1, 'Yadab', '', '01733267990', '0000-00-00 00:00:00', 0, 'Khilkhet', 0, 300),
(2, 'Yadab', NULL, '01753362960', '2020-10-03 15:44:03', 0, NULL, 0, 0),
(3, 'Nahid', NULL, '(+88) 01521231685.', '2020-10-03 15:44:40', 0, NULL, 0, 0),
(4, 'Yadab Sd', NULL, '01733267990', '2020-10-03 16:16:59', 0, NULL, 0, 0),
(5, 'Yadabsss', NULL, '1736446405', '2020-10-03 16:21:47', 0, NULL, 0, 0),
(6, 'Yadabsss', NULL, '01753362960', '2020-10-03 16:22:57', 0, NULL, 0, 0),
(7, 'Nahid', NULL, '01753362960', '2020-10-03 16:24:26', 0, NULL, 0, 0),
(8, 'Yadab', NULL, '1736446405', '2020-10-03 16:26:10', 0, NULL, 0, 0),
(9, 'Yadab', NULL, '(+88) 01521231685.', '2020-10-03 16:38:41', 0, NULL, 0, 0),
(10, 'Nahid', NULL, '01733267990', '2020-10-03 16:39:33', 0, NULL, 0, 0),
(11, 'Yadab', NULL, '01753362960', '2020-10-03 16:54:38', 0, NULL, 0, 0),
(12, 'Nahid', NULL, '01753362960', '2020-10-03 16:57:01', 0, NULL, 0, 0),
(13, 'Yadab', NULL, '1736446405', '2020-10-03 17:00:27', 0, NULL, 0, 0),
(14, 'Yadabsss', NULL, '01753362960', '2020-10-03 17:02:49', 0, NULL, 0, 0),
(15, 'Nahid', NULL, '01753362960', '2020-10-03 17:08:11', 0, NULL, 0, 0),
(16, 'Yadab Sd', NULL, '01733267990', '2020-10-03 17:10:39', 0, NULL, 0, 0),
(17, 'Yadab', NULL, '(+88) 01521231685.', '2020-10-03 17:11:46', 0, NULL, 0, 0),
(18, 'Nahid', NULL, '01733267990', '2020-10-03 17:17:04', 0, NULL, 0, 0),
(19, 'Nahid', NULL, '01733267990', '2020-10-03 17:17:29', 0, NULL, 0, 0),
(20, 'Nahid', NULL, '1733267990', '2020-10-03 17:18:01', 0, NULL, 0, 0),
(21, 'Yadab Sd', NULL, '01733267990', '2020-10-03 17:19:38', 0, NULL, 0, 0),
(22, 'Yadab Sd', NULL, '01733267990', '2020-10-03 17:21:49', 0, NULL, 0, 0),
(23, '', NULL, '', '2020-10-12 00:20:01', 0, NULL, 0, 200);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(6) UNSIGNED NOT NULL,
  `client_id` varchar(30) NOT NULL,
  `invoice_number` varchar(30) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `discount` varchar(30) NOT NULL,
  `transport` varchar(30) NOT NULL,
  `account` varchar(30) NOT NULL,
  `in_cat` varchar(30) NOT NULL,
  `payment` varchar(30) NOT NULL,
  `invoice_due_total` varchar(30) NOT NULL,
  `date_issue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` varchar(30) NOT NULL DEFAULT '0',
  `vat` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `client_id`, `invoice_number`, `product_id`, `discount`, `transport`, `account`, `in_cat`, `payment`, `invoice_due_total`, `date_issue`, `total`, `vat`) VALUES
(1, '1', '1', '2', '10', '10', '23', '10', '100', '200', '2020-10-11 18:20:01', '', ''),
(2, '1', '1', '2', '10', '10', '23', '10', '100', '200', '2020-10-11 18:26:11', '', ''),
(3, '1', '1', '2', '10', '10', '23', '10', '100', '200', '2020-10-11 18:27:09', '', ''),
(4, '1', '4', '', '10', '40', '23', '10', '10', '190', '2020-10-11 18:31:51', '0', '10'),
(5, '1', '4', '', '10', '40', '23', '10', '10', '190', '2020-10-11 18:42:06', '0', '10'),
(6, '1', '4', '', '10', '40', '23', '10', '10', '190', '2020-10-11 18:49:17', '0', '10'),
(7, '1', '7', '3', '10', '10', '1', '1', '100', '300', '2020-10-11 18:55:00', '0', '0'),
(8, '1', '7', '3', '10', '10', '1', '1', '100', '300', '2020-10-11 18:58:22', '0', '0'),
(9, '1', '7', '3', '10', '10', '1', '1', '100', '300', '2020-10-11 19:05:51', '0', '0'),
(10, '1', '7', '3', '10', '10', '1', '1', '100', '300', '2020-10-12 14:26:34', '0', '0'),
(11, '1', '11', '2', '10', '', '1', '1', '100', '340', '2020-10-12 14:32:05', '0', '0'),
(12, '1', '12', '3', '20', '40', '1', '1', '700', '80', '2020-10-12 15:06:59', '0', '10'),
(13, '1', '13', '3', '10', '30', '1', '1', '500', '200', '2020-10-12 16:35:18', '0', '0'),
(14, '1', '13', '3', '10', '30', '1', '1', '500', '200', '2020-10-12 17:02:29', '0', '0'),
(15, '1', '15', '2,3', '20', '10', '1', '1', '100', '300', '2020-10-12 17:45:40', '400', '5');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `classId` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `stock` int(10) NOT NULL DEFAULT 0,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `price` int(10) NOT NULL,
  `sku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `classId`, `name`, `description`, `unit`, `stock`, `createdAt`, `price`, `sku`) VALUES
(1, 'one', 'Chips', NULL, NULL, 0, '2020-10-03 17:40:01', 10, ''),
(2, 'one', 'Dim', 'Farm', '12', 5, '2020-10-07 19:42:52', 150, 'hv'),
(3, '', 'Sugar', 'Red', '1 kg', 10, '2020-10-11 05:05:29', 60, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
