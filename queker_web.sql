-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2023 at 04:52 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `queker_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `insert_by` int NOT NULL,
  `insert_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `name`, `image`, `insert_by`, `insert_at`, `updated_at`) VALUES
(1, 'Richard', 'cool.jpg', 1, '2023-06-08 07:04:53', '2023-06-08 07:04:53'),
(2, 'Felicia', 'cookies.jpg', 1, '2023-06-08 07:04:53', '2023-06-08 07:04:53'),
(3, 'Yasser', 'holy.jpg', 1, '2023-06-08 07:04:53', '2023-06-08 07:04:53'),
(4, 'Safarin', 'cool2.jpg', 1, '2023-06-08 07:04:53', '2023-06-08 07:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `insert_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `name`, `address`, `message`, `insert_at`, `updated_at`) VALUES
(1, 'nama', 'alamat', 'pesan', '2023-06-08 07:29:57', '2023-06-08 07:29:57'),
(3, 'test', 'test', 'test', '2023-06-08 07:33:19', '2023-06-08 07:33:19'),
(4, 'test', 'test', 'test', '2023-06-08 07:33:24', '2023-06-08 07:33:24'),
(5, 'test', 'test', 'test', '2023-06-08 07:33:25', '2023-06-08 07:33:25'),
(6, 'test', 'test', 'test', '2023-06-08 07:33:27', '2023-06-08 07:33:27'),
(7, 'test', 'test', 'tesst', '2023-06-08 07:34:23', '2023-06-08 07:34:23'),
(9, 'nama', 'alamat', 'Nastar.\r\nJumlah: 20\r\n\r\n', '2023-06-08 07:44:14', '2023-06-08 07:44:14'),
(10, 'Richard', 'Jalan', 'Nastar.\r\nJumlah: 100\r\n\r\n', '2023-06-08 07:49:12', '2023-06-08 07:49:12'),
(11, 'nama', 'alamat', 'pesanan', '2023-06-08 07:51:42', '2023-06-08 07:51:42'),
(12, 'ini saya', 'saya di sini', 'hahaha', '2023-06-12 16:19:01', '2023-06-12 16:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `insert_by` int NOT NULL,
  `insert_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `stock`, `price`, `image`, `insert_by`, `insert_at`, `updated_at`) VALUES
(2, 'Nastar', '999', 50000, 'Nastar.png', 1, '2023-06-08 07:04:53', '2023-06-08 07:04:53'),
(3, 'Putri Salju', '999', 50000, 'Putri Salju.png', 2, '2023-06-08 07:04:53', '2023-06-08 07:04:53'),
(4, 'Sagu', '999', 50000, 'Sagu.png', 2, '2023-06-08 07:04:53', '2023-06-08 07:04:53'),
(12, 'Kastengel', '999', 50000, 'Kastengel.png', 1, '2023-06-12 16:29:46', '2023-06-12 16:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `insert_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `image`, `insert_at`, `updated_at`) VALUES
(1, 'Richard', 'richard', '123', 'cool.jpg', '2023-06-08 07:04:53', '2023-06-08 07:04:53'),
(2, 'Felicia', 'felicia', '123', 'cookies.jpg', '2023-06-08 07:04:53', '2023-06-08 07:04:53'),
(3, 'Yasser', 'yasser', '123', 'holy.jpg', '2023-06-08 07:04:53', '2023-06-08 07:04:53'),
(4, 'Safarin', 'safarin', '123', 'cool2.jpg', '2023-06-08 07:04:53', '2023-06-08 07:04:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `fk_authors_insert_by` (`insert_by`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_products_insert_by` (`insert_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `fk_authors_insert_by` FOREIGN KEY (`insert_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_insert_by` FOREIGN KEY (`insert_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
