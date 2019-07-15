-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 04:13 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_review`
--

CREATE TABLE `food_review` (
  `id` int(255) NOT NULL,
  `restaurant_name` text NOT NULL,
  `review` text NOT NULL,
  `rating` int(50) NOT NULL,
  `taste` int(50) NOT NULL,
  `ambiance` int(50) NOT NULL,
  `service` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_review`
--

INSERT INTO `food_review` (`id`, `restaurant_name`, `review`, `rating`, `taste`, `ambiance`, `service`) VALUES
(6, 'Res1', 'Thisis a review', 2, 0, 0, 0),
(7, 'Res1', 'Thisis a review', 2, 0, 4, 5),
(8, 'fasf', 'fasf', 11, 0, 12, 12),
(9, 'Res1', 'fas', 11, 0, 12, 21),
(10, 'Res2', 'asdsa', 1, 0, 2, 15),
(11, 'Takeout 2.0', 'Takeout 2.0 is bullshit. Their kattchi has pocha peyaj.', 1, 0, 3, 11),
(12, 'Takeout 2.0', 'hi i am sajid', 2, 0, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_retype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`user_id`, `user_name`, `user_email`, `user_password`, `user_retype`) VALUES
(1, 'shawon', 'sha@gmail.com', '123', '123'),
(2, 'shawon', 'sha@gmail.com', '123', '123'),
(3, 'shawon', 'sha@gmail.com', '123', '123'),
(4, 'juhA', 'TAXSHXBSJH@GMAIL.COM', 'ASD', 'ASD'),
(5, '', '', '', ''),
(6, 'nav', 'nav@gma', '123', '123'),
(7, 'ghjh', 'sha@gmail.com', '12', '12'),
(8, 'shawon', 'a@gmai', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_review`
--
ALTER TABLE `food_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_review`
--
ALTER TABLE `food_review`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
