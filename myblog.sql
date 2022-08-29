-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 03:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(30) NOT NULL,
  `Comment` varchar(50) NOT NULL,
  `Posts_id` int(30) NOT NULL,
  `name_user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `Comment`, `Posts_id`, `name_user_id`) VALUES
(96, 'Hi rehame', 80, 37),
(97, 'Hi rehame', 80, 37),
(98, 'Hi rehame', 80, 37),
(99, 'Hi rehame', 80, 37),
(100, 'welcome Ibtihal', 82, 34),
(101, 'Hi hadeer', 83, 39),
(102, 'hi aya', 84, 35),
(103, 'hi mostafa', 81, 38),
(104, 'Hi mostafa', 81, 38),
(105, 'Hi mostafa', 81, 38),
(106, 'Hi mostafa', 81, 38),
(110, 'nvnvn', 80, 38),
(111, 'Hi mostafa', 99, 38);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id_P` int(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `User_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id_P`, `title`, `Description`, `User_id`) VALUES
(80, 'welcome rehame', 'God has given life to everything on the face of the earth, not just man, but life on this planet shares many beings. Life is the title of work and departure.', 37),
(81, 'welcome rehame', 'God has given life to everything on the face of the earth, not just man, but life on this planet shares many beings. Life is the title of work and departure.', 37),
(82, 'welcome Ibtihal', 'Life is full of problems, but there are always solutions to any problem. When we find a solution to a problem that bothers us, we will feel happier and more confident in ourselves.', 34),
(83, 'welcome hadeer', 'Life is full of problems, but there are always solutions to any problem. When we find a solution to a problem that bothers us, we will feel happier and more confident in ourselves.', 39),
(84, 'welcome AYA', 'Life is full of problems, but there are always solutions to any problem. When we find a solution to a problem that bothers us, we will feel happier and more confident in ourselves.', 35),
(99, 'welcome MOSTAFA', 'Life is full of problems, but there are always solutions to any problem. When we find a solution to a problem that bothers us, we will feel happier and more confident in ourselves.', 38);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `FristName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Password` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FristName`, `LastName`, `Address`, `Email`, `Phone`, `Password`) VALUES
(34, 'Ibtihal', 'ALansary', 'Alexandria, Burj Al Arab', 'ebthalelansary@gmail.com', 1000290185, '567890'),
(35, 'aya', 'eLansary', 'Alexandria, Burj Al Arab', 'aya@gmail.com', 12345, '098765'),
(37, 'REHAME', 'ALansary', 'Alexandria, Burj Al Arab', 'rehame@gmail.com', 9878970, '6534128'),
(38, 'Mostafa', 'ALansary', 'Alexandria, Burj Al Arab', 'mostafa@gmail.com', 78934695, '45678'),
(39, 'HADEER', 'ALansary', 'Alexandria, Burj Al Arab', 'hadeer@gmail.com', 78934695, '987645');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_user_id` (`name_user_id`),
  ADD KEY `Posts_id` (`Posts_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_P`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_P` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`Posts_id`) REFERENCES `posts` (`id_P`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`name_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
