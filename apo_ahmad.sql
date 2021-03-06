-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 03:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apo_ahmad`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `medicijnen_id` int(11) NOT NULL,
  `medicijnen_name` text NOT NULL,
  `medicijnen_description` text NOT NULL,
  `medicijnen_price` double(8,2) NOT NULL,
  `medicijnen_stock` int(11) NOT NULL,
  `product_obtainability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`medicijnen_id`, `medicijnen_name`, `medicijnen_description`, `medicijnen_price`, `medicijnen_stock`, `product_obtainability`) VALUES
(1, 'Paracetamol 250mg', 'this is some good tish', 1.99, 1000, 1),
(2, 'Aspirine', '26232269', 2.00, 250, 1),
(3, 'Metformine', '65331161', 2.01, 90, 1),
(4, 'Karbasalaat Ascal', '104430053', 2.02, 12, 1),
(5, 'Diclofenac', '143528945', 2.03, 45, 1),
(6, 'Paracetamol 500mg', '182627837', 2.04, 55, 1),
(7, 'Ibuprofen 500mg', '221726729', 2.05, 12, 1),
(8, 'Ibuprofen 600mg', '260825621', 2.06, 65, 1),
(9, 'Amoxicilline', '299924513', 2.07, 88, 1),
(10, 'Omeprazol', '339023405', 2.08, 77, 1),
(11, 'Doxycycline', '378122297', 2.09, 37, 1),
(12, 'Metoprolol', '417221189', 2.10, 9, 1),
(13, 'Salbutamol', '456320081', 2.11, 12, 1),
(14, 'Medicijn 01', '495418973', 2.12, 54, 1),
(15, 'Medicijn 02', '534517865', 2.13, 23, 1),
(16, 'Medicijn 03', '573616757', 2.14, 56, 1),
(17, 'Medicijn 04', '612715649', 2.15, 8, 1),
(18, 'Medicijn 05', '651814541', 2.16, 9, 1),
(19, 'Medicijn 06', '690913433', 2.17, 5, 1),
(20, 'Medicijn 07', '730012325', 2.18, 21, 1),
(21, 'Medicijn 08', '769111217', 2.19, 12, 1),
(22, 'Medicijn 09', '808210109', 2.20, 55, 1),
(23, 'Medicijn 10', '847309001', 2.21, 43, 1),
(24, 'Medicijn 11', '886407893', 2.22, 51, 1),
(25, 'Medicijn 12', '925506785', 2.23, 7, 1),
(26, 'Medicijn 13', '964605677', 2.24, 9, 1),
(27, 'Medicijn 14', '1003704569', 2.25, 12, 1),
(28, 'Medicijn 15', '1042803461', 2.26, 1, 1),
(29, 'Medicijn 16', '1081902353', 2.27, 12, 1),
(30, 'Medicijn 17', '1121001245', 2.28, 0, 1),
(31, 'Medicijn 18', '1160100137', 2.29, 9, 1),
(32, 'Medicijn 19', '1199199029', 2.30, 6, 1),
(33, 'Medicijn 20', '1238297921', 2.31, 3, 1),
(34, 'Medicijn 21', '1277396813', 2.32, 0, 1),
(35, 'Medicijn 22', '1316495705', 2.33, 1, 1),
(36, 'Medicijn 23', '1355594597', 2.34, 1, 1),
(37, 'Medicijn 24', '1394693489', 2.35, 2, 1),
(38, 'Medicijn 25', '1433792381', 2.36, 4, 1),
(39, 'Medicijn 26', '1472891273', 2.37, 5, 1),
(40, 'Medicijn 27', '1511990165', 2.38, 6, 1),
(41, 'Medicijn 28', '1551089057', 2.39, 7, 1),
(42, 'Medicijn 29', '1590187949', 2.40, 8, 1),
(43, 'Medicijn 30', '1629286841', 2.41, 13, 1),
(44, 'Medicijn 31', '1668385733', 2.42, 12, 1),
(45, 'Medicijn 32', '1707484625', 2.43, 66, 1),
(46, 'Medicijn 33', '1746583517', 2.44, 7, 1),
(47, 'Medicijn 34', '1785682409', 2.45, 5, 1),
(48, 'Medicijn 35', '1824781301', 2.46, 2, 1),
(49, 'Medicijn 36', '1863880193', 2.47, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messages_id` int(11) NOT NULL,
  `messages_name` text NOT NULL,
  `messages_email` text NOT NULL,
  `messages_subject` text NOT NULL,
  `messages_message` text NOT NULL,
  `messages_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_image` text NOT NULL,
  `news_title` text NOT NULL,
  `news_description` text NOT NULL,
  `news_link` text NOT NULL,
  `news_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `openinghours`
--

CREATE TABLE `openinghours` (
  `openinghours_id` int(11) NOT NULL,
  `openinghours_day` varchar(11) NOT NULL,
  `openinghours_from` time NOT NULL,
  `openinghours_to` time NOT NULL,
  `openinghours_closed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `openinghours`
--

INSERT INTO `openinghours` (`openinghours_id`, `openinghours_day`, `openinghours_from`, `openinghours_to`, `openinghours_closed`) VALUES
(1, 'Maandag', '00:00:00', '01:00:00', 1),
(2, 'Dinsdag', '01:00:00', '02:00:00', 0),
(3, 'Woensdag', '02:00:00', '03:00:00', 0),
(4, 'Donderdag', '03:00:00', '04:00:00', 1),
(5, 'Vrijdag', '04:00:00', '05:00:00', 0),
(6, 'Zaterdag', '05:00:00', '06:00:00', 1),
(7, 'Zondag', '06:00:00', '07:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `infixes` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(1) NOT NULL DEFAULT 0,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `infixes`, `last_name`, `email`, `password`, `user_level`, `date_created`, `status`) VALUES
(1, 'Test', '', 'Account', 'Test@account.com', '$2y$10$1QKaaBrKQf6TnQGLfWECZu66u5O2E.4Q3YKUgA4dDRYnGx3cgRf7a', 1, '2022-03-17 14:27:41', 0),
(2, '1', '2', '3', '4@4.4', '$2y$10$Mlp1nmg.Hf/tgEIpw.VwwuTXLaqW/lCvA6xwQpqQaqaD9lJTKJu5q', 0, '2022-03-24 10:03:08', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`medicijnen_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messages_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `openinghours`
--
ALTER TABLE `openinghours`
  ADD PRIMARY KEY (`openinghours_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `medicijnen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messages_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `openinghours`
--
ALTER TABLE `openinghours`
  MODIFY `openinghours_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
