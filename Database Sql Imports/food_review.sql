-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Aug 18, 2019 at 09:11 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6
=======
<<<<<<< HEAD
-- Generation Time: Aug 10, 2019 at 11:59 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6
=======
-- Generation Time: Jul 15, 2019 at 04:13 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415
>>>>>>> fa312b597a73245b82b6bb30a81cdcb8c9cc4ab1

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> fa312b597a73245b82b6bb30a81cdcb8c9cc4ab1
(12, 'Takeout 2.0', 'hi i am sajid', 2, 0, 2, 2),
(0, 'pagla hotel', 'bad bad', 1, 0, 2, 3),
(0, 'Navid Restaurant', 'bad taste', 4, 0, 5, 4),
(0, 'Navid Restaurant', 'bad taste', 4, 0, 5, 4),
(0, 'ancient Food', 'nice food', 8, 0, 9, 7),
(0, 'Herfy', 'good Food', 7, 8, 8, 9);

-- --------------------------------------------------------

--
-- Table structure for table `food_review1`
--

CREATE TABLE `food_review1` (
  `id` int(10) NOT NULL,
  `restaurant_name` text NOT NULL,
  `review` text NOT NULL,
  `rating` int(50) NOT NULL,
  `taste` int(50) NOT NULL,
  `ambiance` int(50) NOT NULL,
  `service` int(50) NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_review1`
--

<<<<<<< HEAD
INSERT INTO `food_review1` (`id`, `restaurant_name`, `review`, `rating`, `taste`, `ambiance`, `service`, `user_email`) VALUES
(1, 'shawon Restora', 'awesome lovely food . Dahing restaurant.. generally very good environment', 9, 9, 9, 9, ''),
(2, 'Humberger', 'awesome food', 7, 7, 7, 7, ''),
(3, 'bangla hotel', 'bad ', 3, 3, 3, 3, ''),
(4, 'Osthir food', 'best food in town', 8, 8, 8, 8, ''),
(5, 'Urmi Restaurant', 'Very bad food.. Cannot cook properly.. Only Begun Bhaji chatni.. ', 5, 6, 5, 6, ''),
(6, 'Amar Restaurant', 'bad bad bad', 4, 4, 3, 3, ''),
(7, 'urmi Res', 'baje khana', 4, 2, 3, 1, ''),
(8, 'Navisto', 'good food', 8, 7, 8, 8, 'a@a.com'),
(9, 'amitabh Restaurant', 'khana dana was good but average', 8, 7, 6, 5, 'a@a.com'),
(15, 'Domisto', ' Look Awesome', 8, 7, 4, 8, 'a@a.com'),
(17, 'erdw', 'the', 5, 5, 5, 5, 'a@a.com');
=======
INSERT INTO `food_review1` (`id`, `restaurant_name`, `review`, `rating`, `taste`, `ambiance`, `service`) VALUES
(1, 'shawon Restora', 'awesome lovely food . Dahing restaurant.. generally very good environment', 9, 9, 9, 9),
(2, 'Humberger', 'awesome food', 7, 7, 7, 7),
(3, 'bangla hotel', 'bad ', 3, 3, 3, 3),
(4, 'Osthir food', 'best food in town', 8, 8, 8, 8);
=======
(12, 'Takeout 2.0', 'hi i am sajid', 2, 0, 2, 2);
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415
>>>>>>> fa312b597a73245b82b6bb30a81cdcb8c9cc4ab1

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> fa312b597a73245b82b6bb30a81cdcb8c9cc4ab1
(1, 'shawon', 'shawon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Navid', 'navid@gmail.com', '654321', '654321'),
(3, 'afsana', 'afsana@gmail.com', '0123456', '0123456'),
(4, 'admin', 'admin@gmail.com', '123', '123'),
(5, 'a', 'a@a.com', '123', '123'),
(6, 'raven', 'raven@gmail.com', 'qwerty', 'qwerty'),
(7, 'bellal', 'b@gmail.com', 'asd', 'asd'),
(8, 'bellal', 'b@gmail.com', 'asd', 'asd'),
(9, 'bellal', 'b@gmail.com', 'asd', 'asd'),
(10, 'khuda', 'k@gmail.com', 'zxc', 'zxc'),
(11, 'Navid', 'navid@gmail.com', '8989', '8989'),
<<<<<<< HEAD
(12, 'test', 't@gmail.com', '5555', '5555'),
(13, 'Sammy', 'sammy@g.com', 'asdf', 'asdf'),
(14, 'silvy', 'silvy@gmail.com', '6969', '6969'),
(15, 'Navid', 'navid@gmail.com', '123456', '123456');
=======
(12, 'test', 't@gmail.com', '5555', '5555');
=======
(1, 'shawon', 'sha@gmail.com', '123', '123'),
(2, 'shawon', 'sha@gmail.com', '123', '123'),
(3, 'shawon', 'sha@gmail.com', '123', '123'),
(4, 'juhA', 'TAXSHXBSJH@GMAIL.COM', 'ASD', 'ASD'),
(5, '', '', '', ''),
(6, 'nav', 'nav@gma', '123', '123'),
(7, 'ghjh', 'sha@gmail.com', '12', '12'),
(8, 'shawon', 'a@gmai', '12345', '12345');
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415
>>>>>>> fa312b597a73245b82b6bb30a81cdcb8c9cc4ab1

--
-- Indexes for dumped tables
--

--
<<<<<<< HEAD
-- Indexes for table `food_review1`
--
ALTER TABLE `food_review1`
=======
<<<<<<< HEAD
-- Indexes for table `food_review1`
--
ALTER TABLE `food_review1`
=======
-- Indexes for table `food_review`
--
ALTER TABLE `food_review`
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415
>>>>>>> fa312b597a73245b82b6bb30a81cdcb8c9cc4ab1
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
<<<<<<< HEAD
-- AUTO_INCREMENT for table `food_review1`
--
ALTER TABLE `food_review1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
=======
<<<<<<< HEAD
-- AUTO_INCREMENT for table `food_review1`
--
ALTER TABLE `food_review1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
=======
-- AUTO_INCREMENT for table `food_review`
--
ALTER TABLE `food_review`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415
>>>>>>> fa312b597a73245b82b6bb30a81cdcb8c9cc4ab1

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
<<<<<<< HEAD
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
=======
<<<<<<< HEAD
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
=======
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415
>>>>>>> fa312b597a73245b82b6bb30a81cdcb8c9cc4ab1
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
