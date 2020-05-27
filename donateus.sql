-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 04:29 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donateus`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `Genders` varchar(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `DonationTypes` varchar(11) NOT NULL,
  `mnumber` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `fname`, `lname`, `age`, `Genders`, `amount`, `address`, `DonationTypes`, `mnumber`, `email`) VALUES
(1, 'Saiful', 'Ali', 0, '0', 0, '', '0', 918720925484, 'techysaiful.com@gmail.com'),
(2, 'Saiful', 'Ali', 0, '0', 0, '', '0', 918720925484, 'techysaiful.com@gmail.com'),
(3, 'Saiful', 'Ali', 0, '0', 0, '', '0', 918720925484, 'techysaiful.com@gmail.com'),
(4, 'Rajib', 'dutta', 0, '0', 0, 'Letekujan, Letekujan', '0', 8720925484, 'saifulaliskp33@gmail.com'),
(5, 'Saiful', 'Ali', 21, '0', 200, 'Golaghat Assam, Letekujan', 'Blood', 9706211174, 'techysaiful.com@gmail.com'),
(6, 'Saiful', 'Ali', 21, 'Male', 200, 'Golaghat Assam, Letekujan', 'Blood', 9706211174, 'techysaiful.com@gmail.com'),
(7, 'Saiful', 'Ali', 21, 'Male', 200, 'Golaghat Assam, Letekujan', 'Blood', 9706211174, 'techysaiful.com@gmail.com'),
(8, 'Saiful', 'Ali', 21, 'Male', 200, 'Golaghat Assam, Letekujan', 'Blood', 9706211174, 'techysaiful.com@gmail.com'),
(9, 'Saiful', 'Ali', 21, 'Male', 200, 'Golaghat Assam, Letekujan', 'Blood', 9706211174, 'techysaiful.com@gmail.com'),
(10, 'Saiful', 'Ali', 21, 'Male', 200, 'Golaghat Assam, Letekujan', 'Blood', 9706211174, 'techysaiful.com@gmail.com'),
(11, 'Saiful', 'Ali', 21, 'Male', 200, 'Golaghat Assam, Letekujan', 'Blood', 9706211174, 'techysaiful.com@gmail.com'),
(12, 'Saiful', 'Ali', 21, 'Male', 200, 'Golaghat Assam, Letekujan', 'Blood', 9706211174, 'techysaiful.com@gmail.com'),
(13, 'Saiful', 'Ali', 21, 'Male', 200, 'Golaghat Assam, Letekujan', 'Blood', 9706211174, 'techysaiful.com@gmail.com'),
(14, 'Saiful', 'Ali', 21, 'Male', 200, 'Golaghat Assam, Letekujan', 'Blood', 9706211174, 'techysaiful.com@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
