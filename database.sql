-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2021 at 06:42 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15834089_internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user` varchar(15) NOT NULL,
  `userid` int(4) NOT NULL,
  `email id` varchar(30) NOT NULL,
  `balance` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user`, `userid`, `email id`, `balance`) VALUES
('Riya Tak', 4000, 'riyatak@gmail.com', 503155),
('Ahana Tak', 4001, 'ahana@gmail.com', 197170),
('Jyoti Singh', 4003, 'singh@gmail.com', 140256),
('Ashish Jha', 4004, 'ashish@gmail.com', 496295),
('Nitin Tak', 4005, 'nitin123@gmail.com', 702000),
('Naina', 4006, 'naina12@gmail.com', 15166),
('Srishti', 4007, 'srish@gmail.com', 31321),
('Sanjana', 4008, 'sanji@gmail.com', 43511),
('Aarav Rathod', 4009, 'aarav234@gmail.com', 202100),
('Lucky', 4010, 'lucj899@gmail.com', 152286),
('Rubina', 4011, 'rubi@gmail.com', 12000),
('Rakhi', 4012, 'rakhi987@gmail.com', 81000);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `transaction no` int(5) NOT NULL,
  `userid` varchar(15) NOT NULL,
  `ruserid` varchar(15) NOT NULL,
  `amount` int(15) NOT NULL,
  `updated` int(25) NOT NULL,
  `rupdate` int(25) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`transaction no`, `userid`, `ruserid`, `amount`, `updated`, `rupdate`, `timestamp`) VALUES
(17, 'Ahana Tak', 'Aarav Rathod', 1000, 198150, 201600, '2021-01-18 18:21:54'),
(18, 'Ashish Jha', 'Aarav Rathod', 500, 496295, 202100, '2021-01-18 18:23:02'),
(19, 'Ahana Tak', 'Lucky', 980, 197170, 152286, '2021-01-18 18:23:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`transaction no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `userid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4013;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `transaction no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
