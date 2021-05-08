-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 10:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `useraccounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `servicelist`
--

CREATE TABLE `servicelist` (
  `id` int(11) NOT NULL,
  `service` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicelist`
--

INSERT INTO `servicelist` (`id`, `service`) VALUES
(1, 'Electrician'),
(3, 'Plumber'),
(4, 'Teacher'),
(6, 'Maid'),
(11, 'Housekeeping'),
(12, 'Nanny'),
(13, 'Pest Control'),
(14, 'Gardener'),
(15, 'PackersMovers');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `cid` int(5) NOT NULL,
  `spid` int(5) NOT NULL,
  `sid` int(5) NOT NULL,
  `status` varchar(18) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `description` varchar(40) NOT NULL,
  `reqid` int(11) NOT NULL,
  `feedback` varchar(50) DEFAULT NULL,
  `conf` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`cid`, `spid`, `sid`, `status`, `date`, `time`, `description`, `reqid`, `feedback`, `conf`) VALUES
(10, 11, 1, 'finished', '2021-03-19', '20:41:00.000000', 'need elec ', 3, 'good', NULL),
(10, 13, 4, 'finished', '2021-03-26', '18:45:00.000000', 'need teacher', 4, 'nice', NULL),
(10, 11, 1, 'finished', '2021-04-07', '16:58:00.000000', 'need elec2', 5, 'okay', NULL),
(10, 13, 4, 'finished', '2021-04-02', '15:59:00.000000', 'need teacher2', 6, 'nice work', NULL),
(10, 11, 1, 'finished', '2021-03-30', '21:19:00.000000', 'need elec3', 7, 'nice', NULL),
(10, 13, 4, 'finished', '2021-03-31', '18:57:00.000000', 'need teacher3', 8, 'good.', NULL),
(10, 0, 1, 'unassigned', '2021-03-23', '18:41:00.000000', 'ELEC 4', 10, NULL, 1216),
(10, 11, 1, 'finished', '2021-03-25', '21:29:00.000000', 'elec 1', 11, NULL, NULL),
(15, 13, 4, 'finished', '2021-03-31', '10:31:00.000000', 'need teacher', 12, 'ok ok', NULL),
(15, 13, 4, 'finished', '2021-03-31', '08:39:00.000000', 'need a teach', 14, 'amazing', 1111),
(15, 0, 9, 'declined', '2021-03-30', '11:36:00.000000', 'need mech', 15, NULL, NULL),
(10, 0, 1, 'unassigned', '2021-03-24', '00:09:00.000000', 'need elecccc', 17, NULL, NULL),
(10, 0, 9, 'unassigned', '2021-03-24', '15:43:00.000000', 'need mech2', 18, NULL, NULL),
(10, 11, 1, 'assigned', '2021-03-31', '19:04:00.000000', 'demo elec', 19, NULL, 1234),
(20, 11, 1, 'assigned', '2021-03-24', '18:25:00.000000', 'need elec', 20, NULL, 1000),
(10, 0, 1, 'unassigned', '2021-04-21', '04:34:00.000000', 'elec req', 21, NULL, NULL),
(10, 0, 1, 'unassigned', '2021-04-14', '13:02:00.000000', 'need elec', 22, NULL, 0),
(10, 23, 4, 'finished', '2021-04-14', '23:18:00.000000', 'need teacher', 23, 'amazing', NULL),
(10, 0, 4, 'unassigned', '2021-04-08', '01:18:00.000000', 'need teacher2', 24, NULL, 0),
(15, 23, 4, 'finished', '2021-04-15', '22:45:00.000000', 'need teacher3', 25, NULL, 1024);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `waddress` varchar(200) NOT NULL,
  `image` varchar(55) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `service` varchar(20) NOT NULL,
  `create_datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phoneno`, `password`, `address`, `waddress`, `image`, `usertype`, `service`, `create_datetime`) VALUES
(10, 'cons1', 'cons1@gmail.com', '1234567899', '53b3cb502f328f9bf76806605a4c84e2', '1 2 , cons1 mumbai', '', 'marine drive.png', 'consumer', '', '2020-12-18 17:29:38'),
(11, 'sp1', 'sp1@gmail.com', '1111111', '7f3fa7aa05f8e1ab0a523d738a97cf04', '1 2 3, sp1 mumbai', '3 2 1, sp1 mumbai', 'marine drive.png', 'sprovider', '1', '2021-04-12 18:43:00'),
(12, 'admin1', 'admin1@gmail.com', '2222222', 'e00cf25ad42683b3df678c61f42c6bda', '1 2 3,admin1 mumbai', '', 'Gateway of India.jpg', 'admin', '', '2020-12-18 17:34:55'),
(13, 'sp2', 'sp2@gmail.com', '2222222', '33cfd1ff8df9b5eb8d2dd008a71d6e15', '1 2 ,sp2, mumbai', '3 2 1,sp2, mumbai', 'Coloba-Causeway.jpg', 'sprovider', '4', '2021-01-27 17:40:38'),
(15, 'cons2', 'cons2@gmail.com', '222111', 'a387f91cb2bf9e3b9138a2bd6010d0e0', '1 2, cons2 mumbai', '', '', 'consumer', '', '2021-03-20 09:27:26'),
(17, 'cons3', 'cons3@gmail.com', '22221111', '72a77fc6d115c79c3054ee2d370a5fda', '1 2 3, cons3 mumbai', '', 'Juhu Beach.jpg', 'consumer', '', '2021-03-26 01:42:33'),
(18, 'sp3', 'sp3@gmail.com', '333332222', '0df6f113d2652eb9bc62b370aaf8e7cc', '1 2 3, sp3 mumbai', '3 2 1, sp3 mumbai', 'Coloba-Causeway.jpg', 'sprovider', '9', '2021-03-26 01:49:26'),
(19, 'admin2', 'admin2@gmail.com', '222221111', 'c84258e9c39059a89ab77d846ddab909', '1 2 3, admin2 mumbai', '', 'marine drive.png', 'admin', '', '2021-03-26 01:52:50'),
(20, 'Shrestha ', 'shrestha.sharma.4@gmail.com', '8108605093', '4a315d707428056419bbb4aafd3ad620', '1 2 3, shrestha mumbai', '', 'Gateway of India.jpg', 'consumer', '', '2021-03-27 10:54:48'),
(23, 'sp4', 'sp4@gmail.com', '4444444', '374374037b6bdd2d23c18d942f301ea5', '1 2 3, sp4 mumbai', '3 2 1, sp4 mumbai', 'India Gate.jpg', 'sprovider', '4', '2021-04-12 18:24:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `servicelist`
--
ALTER TABLE `servicelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`reqid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `servicelist`
--
ALTER TABLE `servicelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
