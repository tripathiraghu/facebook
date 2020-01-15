-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 07:56 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `sno` int(11) NOT NULL,
  `username` text NOT NULL,
  `post` text NOT NULL,
  `time` date NOT NULL,
  `profileImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`sno`, `username`, `post`, `time`, `profileImage`) VALUES
(39, 'Atul sharma', 'traveliing', '2020-01-10', 'images/user-image/user2.jpg'),
(40, 'jai Rathore', 'hello this my first ', '2020-01-10', 'images/user-image/user3.jpg'),
(46, 'Raghav Tripathi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has ', '2020-01-10', 'images/user-image/user1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `sno` int(20) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `profileImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`sno`, `name`, `email`, `password`, `profileImage`) VALUES
(38, '', '123dsds', '', ''),
(39, '', '123dsdscfg', '', ''),
(40, '', '123', '', ''),
(41, 'Raghav Tripathi', 'test@test.com', 'test', 'images/user-image/user1.jpg'),
(43, 'Atul sharma', 'user2@user.com', '1234', 'images/user-image/user2.jpg'),
(44, 'jai Rathore', 'user3@user.com', '1234', 'images/user-image/user3.jpg'),
(45, '', 'sad@122.k', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
