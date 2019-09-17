-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 11:55 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `id_classroom` int(10) NOT NULL,
  `name_classroom` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`id_classroom`, `name_classroom`) VALUES
(1, 'Alpha'),
(3, 'DEC');

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `id_computer` int(11) NOT NULL,
  `type_computer` varchar(30) DEFAULT NULL,
  `name_computer` varchar(100) DEFAULT NULL,
  `ram_computer` int(11) DEFAULT NULL,
  `date_buy_computer` date DEFAULT NULL,
  `id_classroom` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`id_computer`, `type_computer`, `name_computer`, `ram_computer`, `date_buy_computer`, `id_classroom`) VALUES
(1, 'HP', 'HP-1', 4, '2012-02-15', 1),
(2, 'HP', 'HP-2', 4, '2012-02-15', 1),
(3, 'HP', 'HP-3', 4, '2012-02-15', 1),
(4, 'HP', 'HP-4', 4, '2012-02-15', 1),
(5, 'HP', 'HP-5', 4, '2014-02-15', 1),
(6, 'HP', 'HP-6', 4, '2014-02-15', 1),
(17, 'Dell', 'Dell-1', 4, '2012-07-10', 3),
(18, 'Dell', 'Dell-2', 4, '2012-07-10', 3),
(19, 'Dell', 'Dell-3', 4, '2012-07-10', 3),
(20, 'Dell', 'Dell-4', 4, '2012-07-10', 3),
(21, 'Asus', 'Asus-6', 8, '2013-11-02', 3),
(22, 'Asus', 'Asus-7', 8, '2014-11-02', 3),
(23, 'Asus', 'Asus-8', 8, '2014-11-02', 3),
(24, 'Asus', 'Asus-9', 8, '2014-11-02', 3),
(25, 'MSI', 'MSI-1', 8, '2013-02-18', 3),
(26, 'MSI', 'MSI-2', 8, '2013-02-18', 3),
(27, 'MSI', 'MSI-3', 8, '2013-02-18', 3),
(28, 'MSI', 'MSI-4', 8, '2013-02-18', 3),
(29, 'zfz', 'zef', 23, '2010-01-01', NULL),
(30, 'test', 'test', 20, '2010-01-01', NULL),
(36, 'tst', 'tst', 20, '2018-05-25', NULL),
(37, 'tst', 'p', 6, '2018-02-02', NULL),
(38, 'tst', 'tst', 6, '2015-01-01', NULL),
(39, 'tst', 'tst', 2, '2010-01-05', 3);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `loginAdmin` varchar(30) NOT NULL,
  `pwAdmin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `loginAdmin`, `pwAdmin`) VALUES
(2, 'abdelwahab', 'developer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`id_classroom`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`id_computer`),
  ADD KEY `id_classroom` (`id_classroom`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `id_classroom` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `id_computer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `computer`
--
ALTER TABLE `computer`
  ADD CONSTRAINT `computer_ibfk_1` FOREIGN KEY (`id_classroom`) REFERENCES `classroom` (`id_classroom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
