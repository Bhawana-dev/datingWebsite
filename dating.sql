-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2020 at 08:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dating`
--

-- --------------------------------------------------------

--
-- Table structure for table `fav_list`
--

CREATE TABLE `fav_list` (
  `f_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `fav_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fav_list`
--

INSERT INTO `fav_list` (`f_id`, `u_id`, `fav_id`) VALUES
(1, 3, 1),
(2, 3, 2),
(7, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `age` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `signup_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `name`, `password`, `email`, `gender`, `age`, `mobile`, `country`, `city`, `picture`, `status`, `signup_date`) VALUES
(1, 'Angela', '123', 'angela@gmail.com', 'female', '25', '1254125412', 'canada', 'Montreal', '8f.jpg', 1, '2020-02-17 05:39:36'),
(2, 'George', '123', 'george@gmail.com', 'male', '22', '1223456789', 'canada', 'Montreal', '55.jpg', 1, '2020-02-17 05:38:00'),
(3, 'Radhika', '159', 'radhika@gmail.com', 'female', '23', '159482637', 'India', 'Jalandhar', '6f.jpg', 1, '2020-02-16 23:04:14'),
(4, 'Disha', '123', 'disha@gmail.com', 'female', '25', '142536987', 'India', 'Jammu', '88.jpg', 1, '2020-02-22 11:48:36'),
(5, 'Ruhi', '123', 'ruhi@gmail.com', 'female', '25', '147258369', 'Australia', 'Sydney', '4f.jpg', 1, '2020-02-22 19:40:25'),
(6, 'Peter', '123', 'peter@gmail.com', 'male', '27', '123759486', 'Australia', 'Melbourne', '77.jpg', 1, '2020-02-17 05:24:33'),
(7, 'John', '123', 'tim@gmail.com', 'male', '27', '147369258', 'Italy', 'rome', '22.jpg', 1, '2020-02-17 05:41:17'),
(8, 'Muraat', '123', 'muraat', 'male', '28', '123654987', 'turkey', 'istanbul', '11.jpg', 1, '2020-02-17 05:25:12'),
(9, 'Jameer', '123', 'Jameer@gmail.com', 'male', '28', '546879213', 'Turkey', 'izmir', '33.jpg', 1, '2020-02-17 05:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `wink`
--

CREATE TABLE `wink` (
  `w_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fav_list`
--
ALTER TABLE `fav_list`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `wink`
--
ALTER TABLE `wink`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fav_list`
--
ALTER TABLE `fav_list`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wink`
--
ALTER TABLE `wink`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
