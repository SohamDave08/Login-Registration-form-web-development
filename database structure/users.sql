-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 11:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `friend_array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`) VALUES
(4, 'Soham', 'Dave', 'soham_dave', 'dave.soham@gmail.com', '12345678', '2019-06-06', '0', 0, 0, 'no', ','),
(6, 'Soham', 'Dave', 'soham_dave_1', 'dave.soham08@gmail.com', 'e8dc4081b13434b45189a720b77b6818', '2019-06-13', 'assets/images/profile_pics/defaults/head_red.png', 0, 0, 'no', ','),
(7, 'Rudra', 'Dave', 'rudra_dave', 'dave_rudra@gmail.com', 'acadfaa6343cd4525c88ea3a9261f408', '2019-06-13', 'assets/images/profile_pics/defaults/head_red.png', 0, 0, 'no', ','),
(8, 'Rudra', 'Dave', 'rudra_dave_1', 'dave.rudra@gmail.com', 'e8dc4081b13434b45189a720b77b6818', '2019-06-13', 'assets/images/profile_pics/defaults/head_red.png', 0, 0, 'no', ','),
(9, 'Soham', 'Dave', 'soham_dave_1_2', 'davesoham@gmail.com', 'e8dc4081b13434b45189a720b77b6818', '2019-06-13', 'assets/images/profile_pics/defaults/head_red.png', 0, 0, 'no', ','),
(10, 'Navin', 'Asti', 'navin_asti', 'nv@ymail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2019-06-13', 'assets/images/profile_pics/defaults/head_red.png', 0, 0, 'no', ','),
(11, 'Navin', 'Asti', 'navin_asti_1', '1nv@ymail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2019-06-13', 'assets/images/profile_pics/defaults/head_red.png', 0, 0, 'no', ','),
(12, 'Navin', 'Asti', 'navin_asti_1_2', '1n2v@ymail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2019-06-13', 'assets/images/profile_pics/defaults/head_pete_river.png', 0, 0, 'no', ','),
(13, 'Soham', 'Dave', 'soham_dave_1_2_3', 'aabbcc@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d30a', '2019-06-13', 'assets/images/profile_pics/defaults/head_pete_river.png', 0, 0, 'yes', ','),
(14, 'Soham', 'Dave', 'soham_dave_1_2_3_4', 'aabbccdd@gmail.com', '6eea9b7ef19179a06954edd0f6c05ceb', '2019-06-13', 'assets/images/profile_pics/defaults/head_pete_river.png', 0, 0, 'yes', ',');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
