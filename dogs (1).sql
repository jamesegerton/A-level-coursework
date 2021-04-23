-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 09:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs1`
--

CREATE TABLE `dogs1` (
  `DogID` int(11) NOT NULL,
  `Dog_Name` varchar(255) NOT NULL,
  `Dog_Breed` varchar(255) NOT NULL,
  `Dog_Size` tinyint(1) NOT NULL,
  `Lead` varchar(1) NOT NULL,
  `Special_Needs` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dogs1`
--

INSERT INTO `dogs1` (`DogID`, `Dog_Name`, `Dog_Breed`, `Dog_Size`, `Lead`, `Special_Needs`) VALUES
(3, 'rex', 'poodle', 1, '', 'none'),
(4, 'rex', 'poodle', 2, 'Y', 'none'),
(17, 'rover', 'greyhound', 2, 'Y', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `dog_user`
--

CREATE TABLE `dog_user` (
  `DogID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dog_user`
--

INSERT INTO `dog_user` (`DogID`, `UserID`) VALUES
(17, 3);

-- --------------------------------------------------------

--
-- Table structure for table `public_users`
--

CREATE TABLE `public_users` (
  `UserID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `public_users`
--

INSERT INTO `public_users` (`UserID`, `username`, `email`, `password`) VALUES
(3, 'pop', 'egerton.jn@oundleschool.org.uk', 'admin'),
(4, 'popsicle', '123', 'admin'),
(5, '123', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `walks`
--

CREATE TABLE `walks` (
  `walkid` int(4) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `walks`
--

INSERT INTO `walks` (`walkid`, `date`, `time`, `location`) VALUES
(1, '2021-04-23', '21:14:00', 'park'),
(2, '2021-04-24', '17:14:00', 'park'),
(3, '2021-04-24', '20:44:00', 'around the block');

-- --------------------------------------------------------

--
-- Table structure for table `walk_user`
--

CREATE TABLE `walk_user` (
  `walkid` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `walk_user`
--

INSERT INTO `walk_user` (`walkid`, `UserID`) VALUES
(2, 3),
(3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogs1`
--
ALTER TABLE `dogs1`
  ADD PRIMARY KEY (`DogID`);

--
-- Indexes for table `dog_user`
--
ALTER TABLE `dog_user`
  ADD PRIMARY KEY (`DogID`,`UserID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `public_users`
--
ALTER TABLE `public_users`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `walks`
--
ALTER TABLE `walks`
  ADD PRIMARY KEY (`walkid`);

--
-- Indexes for table `walk_user`
--
ALTER TABLE `walk_user`
  ADD PRIMARY KEY (`walkid`,`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs1`
--
ALTER TABLE `dogs1`
  MODIFY `DogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `public_users`
--
ALTER TABLE `public_users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `walks`
--
ALTER TABLE `walks`
  MODIFY `walkid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
