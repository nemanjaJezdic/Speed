-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 02:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `speed`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `route`) VALUES
(1, 'Home', 'home'),
(2, 'Contact', 'contact'),
(3, 'Shop', 'products'),
(4, 'Aurhor', 'author');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`, `is_active`) VALUES
(1, 'Anemos', 'With the Parapera Anemos you have endless possibilities. It is a bike for long distances, bike tours, the way to work, simply for everything. You can equip your Anemos with Parapera accessories - from a bottle cage to mudguards to a lightweight luggage ra', 'b1.jpg', '400.00', 1),
(2, 'Lulu', 'With the Parapera Anemos you have endless possibilities. It is a bike for long distances, bike tours, the way to work, simply for everything. You can equip your Anemos with Parapera accessories - from a bottle cage to mudguards to a lightweight luggage ra', 'b2.jpg', '500.00', 1),
(3, 'Sunny', 'With the Parapera Anemos you have endless possibilities. It is a bike for long distances, bike tours, the way to work, simply for everything. You can equip your Anemos with Parapera accessories - from a bottle cage to mudguards to a lightweight luggage ra', 'b3.jpg', '700.00', 1),
(4, 'Nevada', 'With the Parapera Anemos you have endless possibilities. It is a bike for long distances, bike tours, the way to work, simply for everything. You can equip your Anemos with Parapera accessories - from a bottle cage to mudguards to a lightweight luggage ra', 'b4.jpg', '600.00', 1),
(5, 'Loki', 'With the Parapera Anemos you have endless possibilities. It is a bike for long distances, bike tours, the way to work, simply for everything. You can equip your Anemos with Parapera accessories - from a bottle cage to mudguards to a lightweight luggage ra', 'b5.jpg', '400.00', 1),
(7, 'Simon', 'With the Parapera Anemos you have endless possibilities. It is a bike for long distances, bike tours, the way to work, simply for everything. You can equip your Anemos with Parapera accessories - from a bottle cage to mudguards to a lightweight luggage ra', 'b7.jpg', '900.00', 1),
(8, 'Felix', 'With the Parapera Anemos you have endless possibilities. It is a bike for long distances, bike tours, the way to work, simply for everything. You can equip your Anemos with Parapera accessories - from a bottle cage to mudguards to a lightweight luggage ra', 'b8.jpg', '1200.00', 1),
(9, 'Yuri', 'With the Parapera Anemos you have endless possibilities. It is a bike for long distances, bike tours, the way to work, simply for everything. You can equip your Anemos with Parapera accessories - from a bottle cage to mudguards to a lightweight luggage ra', 'b9.jpg', '1600.00', 1),
(10, 'Pelvin', 'With the Parapera Anemos you have endless possibilities. It is a bike for long distances, bike tours, the way to work, simply for everything. You can equip your Anemos with Parapera accessories - from a bottle cage to mudguards to a lightweight luggage ra', 'b10.jpg', '2000.00', 1),
(11, 'Ferfex', 'With the Parapera Anemos you have endless possibilities. It is a bike for long distances, bike tours, the way to work, simply for everything. You can equip your Anemos with Parapera accessories - from a bottle cage to mudguards to a lightweight luggage ra', 'b11.jpg', '800.00', 1),
(13, 'Somon', 'With the Parapera Anemos you have endless possibilities. It is a bike for long distances, bike tours, the way to work, simply for everything. You can equip your Anemos with Parapera accessories - from a bottle cage to mudguards to a lightweight luggage ra', 'b13.jpg', '300.00', 1),
(14, 'Moist', 'With the Parapera Anemos you have endless possibilities. It is a bike for long distances, bike tours, the way to work, simply for everything. You can equip your Anemos with Parapera accessories - from a bottle cage to mudguards to a lightweight luggage ra', 'b14.jpg', '3000.00', 1),
(16, 'Trex', 'With the Parapera Anemos you have endless possibilities. It is a bike for long distances, bike tours, the way to work, simply for everything. You can equip your Anemos with Parapera accessories - from a bottle cage to mudguards to a lightweight luggage ra', 'b16.jpg', '1000.00', 1),
(17, 'Seven', 'Fastest bike ever', 'b1.jpg', '700.00', 1),
(18, 'Avina', 'Great bike', 'b4.jpg', '1000.00', 1),
(19, 'Mous', 'Speedy like gonazles', 'b10.jpg', '1000.00', 1),
(24, 'Speedy', 'Fastest bike', '1647173862_b8.jpg', '1000.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role_id`) VALUES
(2, 'pera', 'peric', 'pera@gmail.com', 'bf676ed1364b5857fba69b5623c81b64', 1),
(4, 'nikola', 'nikic', 'nik@gmail.com', '262201fe2fcb9ee8216cdccb04a85584', 2),
(5, 'Pera', 'Perovic', 'pero@gmail.com', '4e4793bed745bd4aa39a5b4dec9ed44a', 2),
(6, 'Pera', 'Peric', 'peraimir@gmail.com', '4d8e01b8df86e78fb594753d87e28a97', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_actions`
--

CREATE TABLE `user_actions` (
  `id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_actions`
--

INSERT INTO `user_actions` (`id`, `action`, `user_id`) VALUES
(1, 'Login', 2),
(3, 'Login', 2),
(4, 'Log out', 2),
(5, 'Login', 2),
(6, 'Log out', 2),
(7, 'Login', 2),
(8, 'Log out', 2),
(11, 'Login', 2),
(12, 'Log out', 2),
(13, 'Login', 2),
(14, 'Log out', 2),
(15, 'Login', 2),
(16, 'Log out', 2),
(17, 'Login', 2),
(18, 'Log out', 2),
(19, 'Login', 2),
(20, 'Log out', 2),
(21, 'Login', 2),
(22, 'Log out', 2),
(25, 'Login', 2),
(26, 'Log out', 2),
(27, 'Login', 2),
(28, 'Login', 2),
(29, 'Log out', 2),
(30, 'Login', 2),
(31, 'Log out', 2),
(32, 'Login', 2),
(33, 'Log out', 2),
(34, 'Login', 2),
(35, 'Log out', 2),
(36, 'Login', 2),
(37, 'Log out', 2),
(38, 'Login', 2),
(39, 'Log out', 2),
(40, 'Login', 2),
(41, 'Log out', 2),
(42, 'Login', 2),
(43, 'Log out', 2),
(44, 'Login', 2),
(45, 'Log out', 2),
(46, 'Login', 2),
(47, 'Log out', 2),
(48, 'Login', 2),
(49, 'Log out', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_actions`
--
ALTER TABLE `user_actions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_actions`
--
ALTER TABLE `user_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
