-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 02:40 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `money`
--

-- --------------------------------------------------------

--
-- Table structure for table `mtransfer`
--

CREATE TABLE `mtransfer` (
  `sl` int(11) NOT NULL,
  `brcode` varchar(5) NOT NULL,
  `brname` varchar(50) NOT NULL,
  `psbaccno` varchar(50) NOT NULL,
  `mtbank` varchar(50) NOT NULL,
  `mtbrname` varchar(50) NOT NULL,
  `mtamount` int(11) NOT NULL,
  `mtcom` int(11) NOT NULL,
  `mtvat` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mtransfer`
--

INSERT INTO `mtransfer` (`sl`, `brcode`, `brname`, `psbaccno`, `mtbank`, `mtbrname`, `mtamount`, `mtcom`, `mtvat`, `total`) VALUES
(1, '9009', 'test', '1234567890123456', 'TestSonali', 'Basabo Barular matha', 1231243123, 500, 75, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mtransfer`
--
ALTER TABLE `mtransfer`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mtransfer`
--
ALTER TABLE `mtransfer`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
