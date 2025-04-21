-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2025 at 01:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `news_type` varchar(100) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `word` varchar(100) NOT NULL,
  `small` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `time`, `location`, `thumbnail`, `news_type`, `banner`, `word`, `small`, `description`) VALUES
(30, 'PIU student activities to celebrate', '📅 Date: 9 March 2025 ', '⏰ Time: 2 PM - 5 PM', '📍 Location: PPIU Center', '20250409103825-482095635_1071006088401454_3389041062273094251_n.jpg', 'events', '20250409103624-', '', '', ''),
(31, 'action welcome back to class!!', '📅 Date: 10 Dec 2022', '⏰ Time: 1:00 PM - 5:00 PM', '📍 Location: PPIU Center', '20250409104224-11195036069.jpg', 'events', '20250409104208-11195036069.jpg', '', '', ''),
(32, 'Universal Declaration of Human Rights (UDHR)', '📅 Date: 11 Feb 2025', '⏰ Time: 5:30 PM - 7:00 PM', '📍 Location: PPIU Center', '20250409104538-486295357_1083683420467054_96073237029920477_n.jpg', 'events', '20250409104538-486386181_1083683440467052_8668464964492757301_n.jpg', '', '', ''),
(33, 'The management of (PPIU) share experiences...', '📅 Date: 21 February 2025', '⏰ Time: 2:00 PM - 5:00 PM', '📍 Location: PPIU Center', '20250409103959-486643352_1085236973645032_6184732671856785796_n.jpg', 'events', '20250409103714-', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `First Name` varchar(100) NOT NULL,
  `Last Name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Degree` varchar(100) NOT NULL,
  `Skill` varchar(100) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `phone` int(100) NOT NULL,
  `dob` date NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `First Name`, `Last Name`, `gender`, `age`, `Email`, `Degree`, `Skill`, `price`, `phone`, `dob`, `Date`) VALUES
(2, 'tony', 'ja', 'male', 22, 'tony168@gmail.com', 'Bachelor', 'International Business', '$700', 6666, '2025-04-04', '2025-04-02 04:20:40'),
(3, 'haapy', 'ja', 'male', 22, 'tony168@gmail.com', 'Bachelor', 'Accounting', '500', 6666, '2025-04-10', '2025-04-02 04:23:54'),
(4, 'tony', 'ja', 'Male', 22, 'tony168@gmail.com', 'Associate', 'Computer Sciences', '700', 6666, '2025-05-07', '2025-04-07 06:21:33'),
(5, 'tony', 'ja', 'male', 22, 'tony168@gmail.com', 'Bachelor', 'Accounting', '500', 6666, '2025-05-07', '2025-04-02 04:27:27'),
(6, 'smos', 'ccc', 'male', 22, 'tony1684@gmail.com', 'Bachelor', 'Computer Sciences', '$850', 158111660, '2025-04-09', '2025-04-02 04:28:25'),
(7, 'haapy', 'ff', 'Male', 22, 'tony16844@gmail.com', 'Bachelor', 'Logistics Management ', '$600', 158111660, '2025-04-30', '2025-04-04 05:42:56'),
(8, 'Yang', 'Chanthorony', 'male', 22, 'tony168@gmail.com', 'Bachelor', 'Computer Sciences', '$850', 15811660, '2025-04-03', '2025-04-03 15:48:49'),
(10, 'haapy', 'ja', 'Female', 22, 'tony168@gmail.com', 'Associate', 'Economic Development', '$900', 158111660, '2025-04-12', '2025-04-13 09:15:30'),
(11, 'smos', 'ja', 'male', 22, 'tony@gmail.com', 'Bachelor', 'Accounting', '$500', 158111660, '2025-04-06', '2025-04-06 14:34:21'),
(13, 'tony', 'ja', 'male', 22, 'tony168@gmail.com', 'Bachelor', 'Computer Sciences', '$850', 15811660, '2025-04-08', '2025-04-08 14:20:09'),
(15, 'haapy', 'ccc', 'male', 25, 'tony@gmail.com', 'Associate', 'Law', '$800', 158111660, '2025-04-26', '2025-04-21 10:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `password`, `email`, `date`) VALUES
(1, 'tony', '202cb962ac59075b964b07152d234b70', 'tony@gmail.com', '2025-03-09 04:58:45'),
(2, 'tonyyyyyyyy', '202cb962ac59075b964b07152d234b70', 'weevvvvvvvv@gmail.com', '2025-03-09 08:45:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
