-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 06:47 AM
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
-- Database: `car-webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `car` varchar(150) NOT NULL,
  `pick_loc` varchar(200) NOT NULL,
  `drop_loc` varchar(200) NOT NULL,
  `pick_date` varchar(100) NOT NULL,
  `pick_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `car`, `pick_loc`, `drop_loc`, `pick_date`, `pick_time`) VALUES
(12, 'Yuvraj Joshi ', 'Fortuner ', 'Dhule', 'Nashik', '2023-08-09', '00:08'),
(14, 'Ndp', 'Endeavor', 'Dhule', 'Nashik', '2023-08-11', '17:33');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `car_category` varchar(100) NOT NULL,
  `car_name` varchar(150) NOT NULL,
  `car_comp` varchar(150) NOT NULL,
  `car_price` varchar(100) NOT NULL,
  `car_seat` varchar(100) NOT NULL,
  `car_no` varchar(50) NOT NULL,
  `car_ac` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `car_category`, `car_name`, `car_comp`, `car_price`, `car_seat`, `car_no`, `car_ac`, `photo`) VALUES
(28, 'Suv', 'Endeavor', 'Ford', '5000', '6', 'MH 18 AT 5858', 'Yes', 'endeavour123.jpeg'),
(29, 'Suv', 'Fortuner', 'Toyota', '4500', '6', 'MH 02 YZ 9875', 'Yes', 'fortuner.jpg'),
(30, 'Suv', 'XUV 500', 'Mahindra', '3000', '6', 'MH 12 BX 5546', 'Yes', 'mahindra-xuv-500.jpg'),
(31, 'Sedan', 'City', 'Honda', '3500', '5', 'MH 15 GT 6503', 'Yes', 'Honda-City.jpg'),
(32, 'Sedan', 'Verna', 'Hyundai', '2000', '4', 'MH 19 AX 5252', 'Yes', 'Hyundai-Verna11.jpg'),
(33, 'Suv', 'Safari', 'Tata', '1500', '6', 'MH 18 BX 6125', 'Yes', 'safari.jpeg'),
(34, 'Suv', 'Compass', 'Jeep', '900', '6', 'MH 16 GZ 1224', 'Yes', 'Jeep-Compass.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_email`, `subject`, `message`) VALUES
(1, 'Rohit More', 'rohitmore@gmail.com', 'Subject Here', 'Message Here'),
(2, 'Tanmay Jirekar', 'tanmayjirekar@yahoo.com', 'Subject Here', 'Message Here'),
(3, 'Mirza Ibrahim', 'mirza@gmail.com', 'Subject Here', 'Message Here'),
(4, 'Yuvraj Joshi ', 'uvjoshi2005@gmail.com', 'Subject Here', 'Message Here'),
(5, 'Soham More', 'soham@gmail.com', 'Subject Here', 'Message Here'),
(6, 'Yuvraj Joshi ', 'sonujcomp2013@gmail.com', 'Test  Subject', 'rshrh ');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_phone` varchar(10) NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `r_email` varchar(100) NOT NULL,
  `r_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_address`, `r_email`, `r_pass`) VALUES
(1, 'Yuvraj Joshi ', '9876543210', '1293/3, Pulwala Chowk Agra Road, Dhule 424001', 'uvjoshi2005@gmail.com', 'Yuvi@31'),
(2, 'Sonai Joshi', '9999999999', '1293/3\r\nPulwala Chowk Agra Road\r\nDhule 424001', 'sonujcomp2013@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
