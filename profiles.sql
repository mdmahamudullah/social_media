-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 03:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_number` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwords` varchar(50) NOT NULL,
  `profile_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `first_name`, `last_name`, `date_of_birth`, `address`, `mobile_number`, `email`, `passwords`, `profile_picture`) VALUES
(7, 'asdf', 'noyon', '2023-05-01', 'sonapur', 2147483647, 'hamzu785@gmail.com', 'asdfsadfsdaf', ''),
(8, 'rifat', 'hosain', '2023-05-10', 'tangail', 2147483647, 'rifat@gmail.com', '2147483647', ''),
(9, 'sahriar', ' Hosain', '2023-05-02', 'tangail', 2147483647, 'sahriar@gmail.com', '2147483647', ''),
(10, 'rifat bolod', 'ahmed', '2000-03-01', 'birulia', 2147483647, 'bikshow@gmail.com', '69696969', 'profile/NMN.png'),
(11, 'ami', 'calak', '2023-05-03', 'nai', 2147483647, 'hamzu85@gmail.com', '69696969', 'profile/dr horsit1.png'),
(14, 'hamza', 'calak', '2023-05-22', 'sonapur', 453254354, 'bikw@gmail.com', '69696969', ''),
(15, 'razib', 'valo', '2023-05-02', 'birulia', 2147483647, 'razib@gmail.com', '69696969', 'profile/NMN.png'),
(16, 'new', 'user', '2023-05-02', 'madaripur', 2147483647, 'new@gmail.com', '69696969', ''),
(17, 'asdf', ' no name', '2023-05-04', 'nai', 2147483647, 'new123@gmail.com', '68686868', 'profile/blank.jpg'),
(18, 'rifat', 'antaji bolod', '2023-05-31', 'tangail', 2147483647, 'antaji@gmail.com', '69696969', 'profile/NMN.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
