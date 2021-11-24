-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 10:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_sreps`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ic` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` text NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `regdate` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`id`, `username`, `password`, `ic`, `email`, `contact`, `gender`, `dob`, `regdate`, `status`) VALUES
(1, 'Emp1', 'emp1', '12356789', 'emp1@gmail.com', '0127849355', 'male', '2020-05-11', '24-May-2020 02:47 pm', 'Active'),
(2, 'Emp2', 'emp2', '2147483647', 'emp2@gmail.com', '0127849355', 'Male', '2020-04-28', '24-May-2020 02:51 pm', 'Active'),
(3, 'Emp3', 'emp3', '2147483647', 'emp3@gmail.com', '0127849355', 'Male', '2000-12-24', '24-May-2020 05:38 pm', 'Active'),
(4, 'Emp4', 'emp4', '2147483647', 'emp4@gmail.com', '0127849355', 'Female', '2000-08-24', '25-May-2020 10:36 pm', 'Active'),
(7, 'Emp5', 'emp5', '000824100291', 'emp5@gmail.com', '0127849355', 'Male', '2000-05-26', '26-May-2020 05:46 pm', 'Active'),
(8, 'Emp6', 'Emp6', '000824100291', 'emp6@gmail.com', '0127849355', 'Male', '2000-08-24', '26-May-2020 05:47 pm', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_information`
--
ALTER TABLE `employee_information`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
